<?php
// Assume you have a database connection established and stored in the $db variable
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
$groupId = $_GET['id']; // Retrieve the group ID from the GET request

// Function to get group owner details from the database
function getGroupOwnerDetails($groupId, $db)
{
    $query = $db->prepare("SELECT owner_userId FROM `groups` WHERE id = :groupId");
    $query->execute([':groupId' => $groupId]);
    $ownerUserId = $query->fetchColumn();

    if (!$ownerUserId) {
        // If the owner_userId is not found, return null
        return null;
    }

    // Fetch owner details from the accounts table using the owner_userId
    $ownerQuery = $db->prepare("SELECT id, username, DisplayName, verified FROM `accounts` WHERE id = :userId");
    $ownerQuery->execute([':userId' => $ownerUserId]);
    $ownerData = $ownerQuery->fetch(PDO::FETCH_ASSOC);

    if ($ownerData) {
        $ownerHasVerifiedBadge = $ownerData['verified'] === 'true';

        return [
            "hasVerifiedBadge" => $ownerHasVerifiedBadge,
            "userId" => $ownerData['id'],
            "username" => $ownerData['username'],
            "displayName" => $ownerData['DisplayName']
        ];
    }

    return null;
}

// Function to get group description from the database
function getGroupDescriptionFromDatabase($groupId) {
    global $db;
    $stmt = $db->prepare("SELECT description FROM `groups` WHERE id = :groupId");
    $stmt->bindParam(':groupId', $groupId);
    $stmt->execute();
    $result = $stmt->fetchColumn();
    return $result ? $result : '';
}
  
function getGroupAlliesStatus($groupId, $db)
{
    $stmt = $db->prepare("SELECT ally_group_id, status FROM `groups_allies` WHERE group_id = :groupId");
    $stmt->bindParam(':groupId', $groupId);
    $stmt->execute();
    $alliesStatus = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Prepare an associative array to store allies' status with their group IDs
    $alliesStatusMap = [];
    foreach ($alliesStatus as $ally) {
        $allyGroupId = $ally['ally_group_id'];
        $status = $ally['status'];
        $alliesStatusMap[$allyGroupId] = $status;
    }

    return $alliesStatusMap;
}  
  
function getGroupMemberCount($groupId, $db)
{
    $stmt = $db->prepare("SELECT participants FROM `groups` WHERE id = :groupId");
    $stmt->bindParam(':groupId', $groupId);
    $stmt->execute();
    $participantsJson = $stmt->fetchColumn();

    if ($participantsJson) {
        $participants = json_decode($participantsJson, true);
        return count($participants);
    } else {
        return 0;
    }
}
function getGroupNameFromDatabase($groupId) {
    global $db;
    $stmt = $db->prepare("SELECT name FROM `groups` WHERE id = :groupId");
    $stmt->bindParam(':groupId', $groupId);
    $stmt->execute();
    $result = $stmt->fetchColumn();
    return $result ? $result : 'Unknown Group';
}

// Sample API response data
$relationshipType = "Allies";
$relatedGroups = array();

try {
    $stmt = $db->prepare("SELECT ally_group_id, status FROM `groups_allies` WHERE group_id = :groupId AND status = '1'");
    $stmt->bindParam(':groupId', $groupId);
    $stmt->execute();
    $allies = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Filter out groups with status 1 or 0
    $filteredAllies = array_filter($allies, function ($ally) {
        $status = $ally['status'];
        return $status !== '1' && $status !== '0';
    });

    foreach ($filteredAllies as $ally) {
        $allyGroupId = $ally['ally_group_id'];

        // Get owner details for the ally group
        $owner = getGroupOwnerDetails($allyGroupId, $db);

        $relatedGroups[] = array(
            "id" => $allyGroupId,
            "name" => getGroupNameFromDatabase($allyGroupId),
            "description" => getGroupDescriptionFromDatabase($allyGroupId),
            "owner" => $owner,
            "shout" => null, // You can add shout details here if available in the database
            "memberCount" => getGroupMemberCount($allyGroupId, $db),
            "isBuildersClubOnly" => false, // Replace this with the actual value from the groups table
            "publicEntryAllowed" => true, // Replace this with the actual value from the groups table
            "hasVerifiedBadge" => false, // Replace this with the actual value from the groups table
            "status" => $ally['status'] // Add the status fetched from the groups_allies table
        );
    }
} catch (PDOException $e) {
    // Handle database query errors
    $response = array(
        'success' => false,
        'message' => 'Database error: ' . $e->getMessage()
    );
    echo json_encode($response);
    exit();
}

// Update the totalGroupCount based on the filtered relatedGroups array
$totalGroupCount = count($relatedGroups);

// Prepare the final API response
$response = array(
    'groupId' => $groupId,
    'relationshipType' => $relationshipType,
    'totalGroupCount' => $totalGroupCount,
    'relatedGroups' => $relatedGroups,
    'nextRowIndex' => 50 // You can set this based on your pagination logic
);

// Output the JSON response
header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);
