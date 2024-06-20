<?php
// Assume you have a database connection established and stored in the $db variable
include_once('../site.php');

// Get the keyword from the request
$keyword = $_GET['keyword'];

// Get the nextPageCursor from the request
$nextPageCursor = $_GET['nextPageCursor'];

// Initialize the response data
$responseData = [
    "keyword" => $keyword,
    "previousPageCursor" => null,
    "nextPageCursor" => $nextPageCursor,
    "data" => []
];

try {
    // Prepare the SQL query to fetch groups based on the keyword and nextPageCursor
    $query = $db->prepare("SELECT * FROM groups WHERE name LIKE :keyword AND id > :nextPageCursor ORDER BY id LIMIT 10");
    $query->bindValue(':keyword', '%' . $keyword . '%');
    $query->bindValue(':nextPageCursor', $nextPageCursor ? (int)$nextPageCursor : 0, PDO::PARAM_INT);
    $query->execute();
    $groups = $query->fetchAll(PDO::FETCH_ASSOC);

    // Fetch the total count of groups matching the keyword for pagination purposes
    $countQuery = $db->prepare("SELECT COUNT(*) as total FROM groups WHERE name LIKE :keyword");
    $countQuery->bindValue(':keyword', '%' . $keyword . '%');
    $countQuery->execute();
    $totalCount = $countQuery->fetchColumn();

    // Process each group and add it to the response data
    foreach ($groups as $group) {
        $groupId = $group['id'];
        $groupName = $group['name'];
        $groupDescription = $group['description'];
        $memberCount = $group['memberCount'];
        $publicEntryAllowed = (bool)$group['publicEntryAllowed'];
        $created = $group['created'];
        $updated = $group['updated'];
        $hasVerifiedBadge = (bool)$group['hasVerifiedBadge'];

        $groupData = [
            "id" => $groupId,
            "name" => $groupName,
            "description" => $groupDescription,
            "memberCount" => $memberCount,
            "previousName" => "",
            "publicEntryAllowed" => $publicEntryAllowed,
            "created" => $created,
            "updated" => $updated,
            "hasVerifiedBadge" => $hasVerifiedBadge
        ];

        $responseData['data'][] = $groupData;
    }

    // Check if there are more groups to fetch and set the nextPageCursor accordingly
    $nextPageCursor = $groups ? $groups[count($groups) - 1]['id'] : null;
    $responseData['nextPageCursor'] = $nextPageCursor;

    // Convert the response data to JSON
    $jsonResponse = json_encode($responseData);

    // Set the appropriate Content-Type header
    header('Content-Type: application/json');

    // Send the JSON response
    echo $jsonResponse;
} catch (PDOException $e) {
    // Handle the exception
    echo "Error: " . $e->getMessage();
}
?>
