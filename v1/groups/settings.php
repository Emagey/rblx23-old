<?php
// Assuming you have a database connection established and stored in the $db variable
include_once('../site.php');
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
// Get the group ID from the URL parameter
$groupId = $_GET['id'];

try {
    // Prepare the SQL query to fetch group settings based on the group ID
    $query = $db->prepare("SELECT * FROM group_settings WHERE group_id = :groupId");
    $query->execute([':groupId' => $groupId]);
    $groupSettings = $query->fetch(PDO::FETCH_ASSOC);

    if (!$groupSettings) {
        // If the group settings are not found, return default settings
        $settings = [
            "isApprovalRequired" => false,
            "isBuildersClubRequired" => false,
            "areEnemiesAllowed" => true,
            "areGroupFundsVisible" => true,
            "areGroupGamesVisible" => true,
            "isGroupNameChangeEnabled" => true
        ];
    } else {
        // Create the group settings array
        $settings = [
            "isApprovalRequired" => isset($groupSettings['is_approval_required']) ? $groupSettings['is_approval_required'] === 'true' : false,
            "isBuildersClubRequired" => isset($groupSettings['is_builders_club_required']) ? $groupSettings['is_builders_club_required'] === 'true' : false,
            "areEnemiesAllowed" => isset($groupSettings['are_enemies_allowed']) ? $groupSettings['are_enemies_allowed'] === 'true' : true,
            "areGroupFundsVisible" => isset($groupSettings['are_group_funds_visible']) ? $groupSettings['are_group_funds_visible'] === 'true' : true,
            "areGroupGamesVisible" => isset($groupSettings['are_group_games_visible']) ? $groupSettings['are_group_games_visible'] === 'true' : true,
            "isGroupNameChangeEnabled" => isset($groupSettings['is_group_name_change_enabled']) ? $groupSettings['is_group_name_change_enabled'] === 'true' : true
        ];
    }

    // Convert the settings array to JSON
    $jsonResponse = json_encode($settings);

    // Set the appropriate Content-Type header
    header('Content-Type: application/json');

    // Send the JSON response
    echo $jsonResponse;
} catch (PDOException $e) {
    // Handle the exception
    echo "Error: " . $e->getMessage();
}
?>
