<?php
// Assume you have a database connection established and stored in the $db variable
include_once('../../site.php');
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
// Function to create a new entry in the primary_users table
function createPrimaryUser($groupId, $loggedUserId, $db)
{
    // Check if the primary user already exists for the given groupId and loggedUserId
    $query = $db->prepare("SELECT id FROM primary_users WHERE groupId = :groupId AND userId = :loggedUserId");
    $query->execute([':groupId' => $groupId, ':loggedUserId' => $loggedUserId]);
    $primaryUserId = $query->fetchColumn();

    if ($primaryUserId) {
        // If the primary user already exists, return the existing primaryUserId
        return $primaryUserId;
    } else {
        // If the primary user does not exist, create a new entry in the primary_users table
        $insertQuery = $db->prepare("INSERT INTO primary_users (groupId, userId) VALUES (:groupId, :loggedUserId)");
        $insertQuery->execute([':groupId' => $groupId, ':loggedUserId' => $loggedUserId]);

        // Return the newly created primaryUserId
        return $db->lastInsertId();
    }
}

// Get loggedUserId from the API URL (assuming it's passed as a query parameter)
$loggedUserId = $usr['id'];

// Get the JSON payload from the POST request
$jsonPayload = file_get_contents('php://input');
$data = json_decode($jsonPayload, true);

// Extract the groupId from the JSON payload
$groupId = $data['groupId'];

// Call the createPrimaryUser function to create a new entry in the primary_users table
$primaryUserId = createPrimaryUser($groupId, $loggedUserId, $db);

// Prepare the API response
$responseData = [
    'groupId' => $groupId,
    'loggedUserId' => $loggedUserId,
    'primaryUserId' => $primaryUserId
];

$jsonData = json_encode($responseData);

header('Content-Type: application/json');
echo $jsonData;
?>

