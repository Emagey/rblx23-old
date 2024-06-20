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
    // Maintenance is not on, proceed with the existing logic

    $groupId = $_GET['id']; // Retrieve the group ID from the GET request

    // Fetch the group walls based on the group ID
    $query = $db->prepare("SELECT * FROM group_walls WHERE groupId = :groupId");
    $query->execute([':groupId' => $groupId]);
    $wallsData = $query->fetchAll(PDO::FETCH_ASSOC);

    $responseData = [];

    $query = $db->prepare("SELECT * FROM `groups` WHERE id = :groupId");
    $query->execute([':groupId' => $groupId]);
    $groupData = $query->fetch(PDO::FETCH_ASSOC);

    if ($groupData) {
        // Fetch the logged-in user's role information based on the group ID
        $loggedInUserId = $usr['id']; // Assuming you have the logged-in user's ID stored in a session variable

        $roleQuery = $db->prepare("SELECT * FROM roles WHERE groupId = :groupId AND JSON_CONTAINS(userids, :loggedInUserId, '$')");
        $roleQuery->execute([':groupId' => $groupId, ':loggedInUserId' => $loggedInUserId]);
        $roles = $roleQuery->fetchAll(PDO::FETCH_ASSOC);

        if ($roles) {
            $roleInfo = null;

            foreach ($roles as $role) {
                $roleId = $role['id'];
                $roleName = $role['name'];
                $roleRank = $role['rank'];

                $isCurrentUserInRole = true; // Modify this based on your specific conditions

                $roleInfo = [
                    "id" => $roleId,
                    "name" => $roleName,
                    "rank" => $roleRank
                ];

                // Break after finding the first role
                break;
            }
        }

        if ($wallsData) {
            foreach ($wallsData as $wall) {
                $wallId = $wall['id'];
                $posterUserId = $wall['posterUserId'];
                $body = $wall['body'];
                $created = $wall['created'];
                $updated = $wall['updated'];

                // Fetch the poster's information
                $posterQuery = $db->prepare("SELECT * FROM accounts WHERE id = :userId");
                $posterQuery->execute([':userId' => $posterUserId]);
                $posterData = $posterQuery->fetch(PDO::FETCH_ASSOC);

                $poster = [
                    "user" => [
                        "hasVerifiedBadge" => $posterData['verified'], // Update with the actual value from the user data
                        "userId" => $posterData['id'],
                        "username" => $posterData['username'],
                        "displayName" => $posterData['DisplayName']
                    ],
                    "role" => $roleInfo
                ];

                $wallData = [
                    "id" => $wallId,
                    "poster" => $poster,
                    "body" => $body,
                    "created" => $created,
                    "updated" => $updated
                ];

                $responseData[] = $wallData;
            }
        }

        // Prepare the final response
        $response = [
            "previousPageCursor" => null,
            "nextPageCursor" => null,
            "data" => $responseData
        ];

        // Convert the response to JSON and send it
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
?>