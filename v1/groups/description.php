<?php
include '../site.php';

// Check if maintenance is enabled
$queryMaintenance = $db->prepare("SELECT * FROM site_settings WHERE id = 2");
$queryMaintenance->execute();
$siteSettings = $queryMaintenance->fetch(PDO::FETCH_ASSOC);

if ($siteSettings['name'] === 'group') {
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
        $newName = $data['description'] ?? '';


        // Update the group name and past names in the database
        $updateQuery = $db->prepare("UPDATE `groups` SET description = :newName, pastname = :updatedPastNames WHERE id = :groupId");
        $updateQuery->bindParam(':newName', $newName);
        $updateQuery->bindParam(':updatedPastNames', $updatedPastNames);
        $updateQuery->bindParam(':groupId', $groupId);
        $updateQuery->execute();

        // Check if the update was successful
        $updatedRows = $updateQuery->rowCount();
        if ($updatedRows > 0) {
            // Group name updated successfully
            $response = array('status' => 'success', 'message' => 'Group name updated successfully');
            echo json_encode($response);

            // Add an entry to the audit log
            $actionType = "Change Description";
            $userId = $usr['id']; // Assuming you have a logged-in user session
            $groupName = $currentData['name'];
            $newRoleName = ""; // Fetch the new role name from the database (if applicable)

            $auditSql = "INSERT INTO audit_log_groups (action_type, user_id, group_id, group_name, new_name, new_role_name)
                         VALUES (:actionType, :userId, :groupId, :groupName, :newName, :newRoleName)";
            $auditStmt = $db->prepare($auditSql);
            $auditStmt->bindParam(':actionType', $actionType);
            $auditStmt->bindParam(':userId', $userId);
            $auditStmt->bindParam(':groupId', $groupId);
            $auditStmt->bindParam(':groupName', $groupName);
            $auditStmt->bindParam(':newName', $newName);
            $auditStmt->bindParam(':newRoleName', $newRoleName);
            $auditStmt->execute();
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