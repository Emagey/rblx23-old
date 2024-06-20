<?php
include_once('site.php');
$id = $usr['id'];

// Function to get username by user ID
function getUsernameByUserId($userId, $db)
{
    $sql = "SELECT username FROM accounts WHERE id = :userId";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':userId', $userId);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Return the username
    return $result['username'];
}

// Function to get user ID by username
function getUserIdByUsername($username, $db)
{
    $sql = "SELECT id FROM accounts WHERE username = :username";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Return the user ID
    return $result['id'];
}

$username = getUsernameByUserId($id, $db);

$sql = "SELECT * FROM friends WHERE (user1 = :id OR user2 = :id2) AND request = :request";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $username);
$stmt->bindParam(':id2', $username);
$accepted = 'request';
$stmt->bindParam(':request', $accepted);
$stmt->execute();
$friends = $stmt->fetchAll(PDO::FETCH_ASSOC);

$responseData = array();
foreach ($friends as $friend) {
    $friendName = ($friend['user1'] == $username) ? $friend['user2'] : $friend['user1'];
    $friendId = getUserIdByUsername($friendName, $db);

    $friendInfo = array(
        "friendRequest" => array(
            "sentAt" => "2023-07-11T20:09:20.360Z",
            "senderId" => $friendId,
            "sourceUniverseId" => 0,
            "originSourceType" => 0,
            "contactName" => "test"
        ),
        "mutualFriendsList" => array(
            "string"
        ),
        "hasVerifiedBadge" => true,
        "description" => "string",
        "created" => "2023-07-11T20:09:20.360Z",
        "isBanned" => true,
        "externalAppDisplayName" => "string",
        "id" => $friendId,
        "name" => "test",
        "displayName" => "test"
    );

    $responseData[] = $friendInfo;
}

$response = array(
    "previousPageCursor" => "string",
    "nextPageCursor" => "string",
    "data" => $responseData
);

$jsonResponse = json_encode($response);

header('Content-Type: application/json');
echo $jsonResponse;
?>

