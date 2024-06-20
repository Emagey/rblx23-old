<?php
// Assume you have a database connection established and stored in the $db variable
include_once('../site.php');
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
$groupId = $_GET['id']; // Retrieve the group ID from the GET request

// Query to fetch the group information
$query = $db->prepare("SELECT * FROM `groups` WHERE id = :groupId");
$query->execute([':groupId' => $groupId]);
$groupData = $query->fetch(PDO::FETCH_ASSOC);

if ($groupData) {
    // Retrieve the shout information from the database
    $shoutQuery = $db->prepare("SELECT * FROM `shout` WHERE groupId = :groupId");
    $shoutQuery->execute([':groupId' => $groupId]);
    $shoutData = $shoutQuery->fetch(PDO::FETCH_ASSOC);

    if ($shoutData) {
        // Retrieve information about the shout poster
        $posterId = $shoutData['posterId'];

        $posterQuery = $db->prepare("SELECT * FROM `accounts` WHERE id = :posterId");
        $posterQuery->execute([':posterId' => $posterId]);
        $posterData = $posterQuery->fetch(PDO::FETCH_ASSOC);

        if ($posterData) {
            // Construct the shout data with the retrieved information
            $shout = [
                "body" => $shoutData['body'],
                "poster" => [
                    "hasVerifiedBadge" => $posterData['verified'] === 'true',
                    "userId" => $posterData['id'],
                    "username" => $posterData['username'],
                    "displayName" => $posterData['DisplayName']
                ]
            ];
        }
    }

    // Retrieve the owner information
    // Query to fetch group information from the database
    $query = $db->prepare("SELECT * FROM `groups` WHERE id = :groupId");
    $query->execute([':groupId' => $groupId]);
    $groupData = $query->fetch(PDO::FETCH_ASSOC);

    // Check if the group data exists
    if ($groupData) {
        // Get the owner information from the database
        $ownerStatement = $db->prepare("SELECT * FROM accounts WHERE id = :ownerId");
        $ownerId = $groupData['owner_userId']; // Assuming 'owner_userId' is the column name in the 'groups' table
        $ownerStatement->execute([':ownerId' => $ownerId]);
        $ownerAccount = $ownerStatement->fetch(PDO::FETCH_ASSOC);

        // Check if the owner account exists
        if ($ownerAccount) {
            // Extract the owner details
            $ownerName = $ownerAccount['username'];
            $ownerDisplayName = $ownerAccount['DisplayName'];
            $ownerHasVerifiedBadge = (bool) $ownerAccount['verified'];

            // Create the owner array
            $owner = [
                "hasVerifiedBadge" => $ownerHasVerifiedBadge,
                "userId" => $ownerId,
                "username" => $ownerName,
                "displayName" => $ownerDisplayName
            ];
        } else {
            // Owner account not found
            $owner = null;
        }

        // Get the participants from the groups table
        $participants = json_decode($groupData['participants'], true);

        // Count the number of user IDs in the participants
        $memberCount = count($participants);

        // Construct the final data array
     $data = array("robux" => $groupData['robux']);


        // Convert the data array to JSON
        $responseData = json_encode($data, JSON_PRETTY_PRINT);
        header('Content-Type: application/json');
        echo $responseData;
    } else {
        // Group not found
        echo "Group not found.";
    }
}
?>
