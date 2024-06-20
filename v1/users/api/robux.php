<?php
include_once('feeddb.php');
// Simulate robux maintenance status
$robuxMaintenance = false; // Set to true to simulate maintenance mode

// Function to fetch robux data from the database
function fetchRobuxFromDatabase($db)
{
    $sql = "SELECT * FROM robux";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $robuxData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $robuxData;
}

// Prepare the API response
$response = [];

if ($robuxMaintenance) {
    // If in maintenance mode, return maintenance status
    $response['system message'] = 'Hi! Welcome to RBLXREV Maintenance 2.0 System';
    $response['maintenance'] = true;
    $response['message'] = 'Robux system is currently undergoing maintenance. Error Code: RBLXREVMTN43';
} else {
    // Fetch robux data from the database
    $robuxData = fetchRobuxFromDatabase($db);
    $response['system message'] = 'Hi! Welcome to RBLXREV Robux 1.2 System';
    $response['robux'] = $robuxData;
}

// Set the appropriate content type for the API response
header('Content-Type: application/json');

// Send the API response
echo json_encode($response);
?>
