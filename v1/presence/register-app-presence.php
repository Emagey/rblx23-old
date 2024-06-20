<?php
require_once '../site.php';  
header("Content-Type: application/json");

// Configuration for database connection
$servername = 'mysql0.serv00.com';
$dbname = 'm4486_st3';
$username = 'm4486_root';
$password = 'xzNsO(CE^D#V7T4KjhlG';

// Create a database connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Check if the connection is successful
if (!$conn) {
    $response["status"] = "error";
    $response["message"] = "Database connection failed: " . mysqli_connect_error();
    echo json_encode($response);
    exit;
}

// Get the logged-in user's ID
$loggedUserId = $usr['id'];

// Prepare the SQL query to update the logged-in user's status
$sql = "UPDATE `accounts` SET `online` = 'online' WHERE `id` = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$loggedUserId]);

// Check if the update was successful
if ($stmt->rowCount() > 0) {
    // Build the response for the logged-in user
    $response = [
        "success" => true,
        "user" => [
            "userId" => $loggedUserId,
            "userPresenceType" => 1,
            "lastLocation" => "Website",
            "placeId" => null,
            "rootPlaceId" => null,
            "gameId" => null,
            "universeId" => null,
            "lastOnline" => null
        ]
    ];
} else {
    // Unable to update the user's status
    $response = [
        "status" => "error",
        "message" => "Unable to update the user's status"
    ];
}

// Output the JSON response
echo json_encode($response);