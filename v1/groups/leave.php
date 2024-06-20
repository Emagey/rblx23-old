<?php
// Assume you have a database connection established and stored in the $db variable
include_once('../site.php');

// Ensure the user is logged in and retrieve their ID
if (!isset($usr['id'])) {
    echo "User ID is not provided.";
    exit;
}

$userId = $usr['id'];

// Retrieve the group ID from the API request (e.g., using $_GET)
$groupId = $_GET['id'];

// Function to get the role that contains the given userId in its userIds field
function getRoleContainingUserId($groupId, $userId, $db)
{
    $query = $db->prepare("SELECT * FROM roles WHERE groupId = :groupId AND JSON_CONTAINS(userIds, :userId, '$')");
    $query->execute([':groupId' => $groupId, ':userId' => $userId]);
    $role = $query->fetch(PDO::FETCH_ASSOC);
    return $role;
}

// Function to remove the user from the role's userIds in the roles table
function removeUserFromRole($roleId, $userId, $db)
{
    $query = $db->prepare("SELECT userIds FROM roles WHERE id = :roleId");
    $query->execute([':roleId' => $roleId]);
    $role = $query->fetch(PDO::FETCH_ASSOC);

    if ($role) {
        $userIds = json_decode($role['userIds'], true);
        if ($userIds === null) {
            $userIds = [];
        }
        if (in_array($userId, $userIds)) {
            $userIds = array_diff($userIds, [$userId]);
            $userIdsJson = json_encode(array_values($userIds));

            $updateQuery = $db->prepare("UPDATE roles SET userIds = :userIdsJson WHERE id = :roleId");
            $updateQuery->execute([
                ':userIdsJson' => $userIdsJson,
                ':roleId' => $roleId
            ]);
        }
    }
}

// Function to remove the user from the primary_users table
function removeUserFromPrimaryUsers($groupId, $userId, $db)
{
    $query = $db->prepare("DELETE FROM primary_users WHERE groupId = :groupId AND userId = :userId");
    $query->execute([':groupId' => $groupId, ':userId' => $userId]);
}

// Function to remove the user from the participants in the groups table
function removeUserFromGroupParticipants($groupId, $userId, $db)
{
    $query = $db->prepare("SELECT participants, owner_userId FROM `groups` WHERE id = :groupId");
    $query->execute([':groupId' => $groupId]);
    $group = $query->fetch(PDO::FETCH_ASSOC);

    if ($group) {
        // Remove the user from participants
        $participants = json_decode($group['participants'], true);
        if ($participants === null) {
            $participants = [];
        }
        if (in_array($userId, $participants)) {
            $participants = array_diff($participants, [$userId]);
            $participantsJson = json_encode(array_values($participants));

            $updateQuery = $db->prepare("UPDATE `groups` SET participants = :participantsJson WHERE id = :groupId");
            $updateQuery->execute([
                ':participantsJson' => $participantsJson,
                ':groupId' => $_GET['id']
            ]);
        }

        // Check if the user is the owner, and if yes, remove it from the owner_userId
        if ((int) $group['owner_userId'] === $userId) {
            $updateQuery = $db->prepare("UPDATE `groups` SET owner_userId = NULL WHERE id = :groupId");
            $updateQuery->execute([':groupId' => $_GET['id']]);
        }
    }
}
  
// Call the function to get the role containing the user and then remove the user from that role
$role = getRoleContainingUserId($groupId, $userId, $db);
if ($role) {
    removeUserFromRole($role['id'], $userId, $db);
}

// Call the function to remove the user from the primary_users table
removeUserFromPrimaryUsers($groupId, $userId, $db);

// Call the function to remove the user from the participants in the groups table
removeUserFromGroupParticipants($groupId, $userId, $db);

// Return a success message or any other response as needed
$response = [
    "success" => true,
    "message" => "User successfully left the group."
];

// Convert the response data to JSON
$jsonResponse = json_encode($response);

// Set the appropriate Content-Type header
header('Content-Type: application/json');

// Send the JSON response
echo $jsonResponse;
?>
