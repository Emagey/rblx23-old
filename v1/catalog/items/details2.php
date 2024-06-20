<?php
$servername = "mysql0.serv00.com";
$username = "m4486_root";
$password = "xzNsO(CE^D#V7T4KjhlG";
$dbname = "m4486_st3";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT id, name, description, price, thumbnail, type, creator, updated, created, asset, limited FROM catalog WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

$response = array();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $creatorId = $row["creator"];
    $creatorStatement = $conn->prepare("SELECT * FROM accounts WHERE id = ?");
    $creatorStatement->bind_param("i", $creatorId);
    $creatorStatement->execute();
    $creatorResult = $creatorStatement->get_result();

    if ($creatorResult->num_rows > 0) {
        $creatorRow = $creatorResult->fetch_assoc();
        $creator = array(
            "creatorHasVerifiedBadge" => true,
            "creatorType" => "User",
            "creatorTargetId" => $creatorId,
            "creatorName" => $creatorRow["username"],
        );
    } else {
        $creator = null;
    }

    $response = array(
        "expectedSellerId" => $creatorId,
        "owned" => false, // Update with actual owned status
        "isPurchasable" => true, // Update with actual purchasable status
        "id" => $row["id"],
        "itemType" => $row["type"],
        "assetType" => ($row["type"] == "Asset") ? 8 : null,
        "name" => $row["name"],
        "description" => $row["description"],
        "productId" => $row["id"],
        "genres" => ["All"],
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
}

$conn->close();

header('Content-Type: application/json');

echo json_encode($response, JSON_PRETTY_PRINT);
?>