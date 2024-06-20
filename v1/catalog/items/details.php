<?php
$servername = "mysql0.serv00.com";
$username = "m4486_root";
$password = "xzNsO(CE^D#V7T4KjhlG";
$dbname = "m4486_st3";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, description, price, thumbnail, type, creator, updated, created, asset, limited FROM catalog";
$result = $conn->query($sql);

$response = array(
    "data" => array()
);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $creatorId = $row["creator"];
        $creatorStatement = $conn->prepare("SELECT * FROM accounts WHERE id = ?");
        $creatorStatement->bind_param("i", $creatorId);
        $creatorStatement->execute();
        $creatorResult = $creatorStatement->get_result();

        if ($creatorResult->num_rows > 0) {
            $creatorRow = $creatorResult->fetch_assoc();
            $creator = array(
                "creatorHasVerifiedBadge" => true, // Assuming all creators have a verified badge
                "creatorType" => "User", // Assuming the creator is a user
                "creatorTargetId" => $creatorId,
                "creatorName" => $creatorRow["username"], // Assuming the creator's username is used as the creator name
            );
        } else {
            // Creator account not found, set creator to null or handle accordingly
            $creator = null;
        }

        $catalogItem = array(
            "id" => $row["id"],
            "itemType" => $row["type"],
            "assetType" => ($row["type"] == "Asset") ? 8 : null,
            "name" => $row["name"],
            "description" => $row["description"],
            "productId" => $row["id"],
            "genres" => ["All"], // Assuming all items have the "All" genre
            "itemStatus" => [],
            "itemRestrictions" => [],
            "creatorHasVerifiedBadge" => true, // Assuming all creators have a verified badge
            "creatorType" => "User", // Assuming the creator is a group
            "creatorTargetId" => $creatorId,
            "creatorName" => $creatorRow["username"], // Assuming the creator's username is used as the creator name
            "price" => $row["price"],
            "favoriteCount" => 0,
            "offSaleDeadline" => null,
            "saleLocationType" => "NotApplicable"
        );

        $response["data"][] = $catalogItem;
    }
}

$conn->close();

header('Content-Type: application/json');

echo json_encode($response, JSON_PRETTY_PRINT);
?>