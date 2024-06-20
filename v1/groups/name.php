<?php
include '../site.php';
// Check if maintenance is enabled
$queryMaintenance = $db->prepare("SELECT * FROM site_settings WHERE id = 2");
$queryMaintenance->execute();
$siteSettings = $queryMaintenance->fetch(PDO::FETCH_ASSOC);

if ($siteSettings['name'] === 'groupr') {
    // Maintenance is on, return 500 error with internal server error code
    http_response_code(500);

    $responseData = [
        "error" => "Internal Server Error",
        "message" => "The server is currently under maintenance. Please try again later."
    ];

    // Convert the response to JSON and send it
    header('Content-Type: application/json');
    echo json_encode($responseData);
} else {
}  
// Database connection settings
$servername = "mysql0.serv00.com";
$username = "m4486_root";
$password = "xzNsO(CE^D#V7T4KjhlG";
$dbname = "m4486_st3";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
    if (isset($_GET['id'])) {
        $groupId = $_GET['id'];

        // Fetch the new group name from the request payload
        $data = json_decode(file_get_contents('php://input'), true);
        $newName = $data['name'] ?? '';

        // Fetch the old group name from the database
        $oldName = '';
        $fetchSql = "SELECT name FROM `groups` WHERE id = :groupId";
        $fetchStmt = $db->prepare($fetchSql);
        $fetchStmt->bindParam(':groupId', $groupId);
        $fetchStmt->execute();
        if ($fetchStmt->rowCount() > 0) {
            $row = $fetchStmt->fetch(PDO::FETCH_ASSOC);
            $oldName = $row['name'];
        }

        // Update the group name in the database
        $updateSql = "UPDATE `groups` SET name = :newName WHERE id = :groupId";
        $updateStmt = $db->prepare($updateSql);
        $updateStmt->bindParam(':newName', $newName);
        $updateStmt->bindParam(':groupId', $groupId);
        $updateStmt->execute();

        // Check if the update was successful
        $updatedRows = $updateStmt->rowCount();
        if ($updatedRows > 0) {
            // Group name updated successfully
            $response = array('status' => 'success', 'message' => 'Group name updated successfully');
            echo json_encode($response);

            // Insert a new entry in the past_group_names table
            if (!empty($oldName)) {
                $insertSql = "INSERT INTO past_group_names (group_id, name) VALUES (:groupId, :oldName)";
                $insertStmt = $db->prepare($insertSql);
                $insertStmt->bindParam(':groupId', $groupId);
                $insertStmt->bindParam(':oldName', $oldName);
                $insertStmt->execute();
            }
        } else {
            // Group name update failed
            $response = array('status' => 'error', 'message' => 'Failed to update group name');
            echo json_encode($response);
        }
    } else {
        // Group ID parameter is missing
        $response = array('status' => 'error', 'message' => 'Group ID parameter is missing');
        echo json_encode($response);
    }
} else {
    // Invalid request method
    $response = array('status' => 'error', 'message' => 'Invalid request method');
    echo json_encode($response);
}