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

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if the groupid parameter exists
    if (isset($_GET['id'])) {
        $groupid = $_GET['id'];

        // Fetch the group social links from the database for the specified groupid
        $sql = "SELECT * FROM group_social_links WHERE groupid = :groupid";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':groupid', $groupid);
        $stmt->execute();

        // Prepare the response array
        $response = array('data' => array());

        // Fetch the group social links and populate the response array
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $link = array(
                'id' => $row['id'],
                'type' => $row['type'],
                'url' => $row['url'],
                'title' => $row['title']
            );

            $response['data'][] = $link;
        }

        // Send the response
        echo json_encode($response);
    } else {
        // Group ID parameter is missing
        $response = array('status' => 'error', 'message' => 'Group ID parameter is missing');
        echo json_encode($response);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch the JSON payload from the request
    $jsonPayload = file_get_contents('php://input');
    $data = json_decode($jsonPayload, true);

    // Check if the necessary fields are provided in the JSON payload
    if (isset($data['type']) && isset($data['url']) && isset($data['title'])) {
        $groupid = $_GET['id']; // Assuming you have the group ID available
        $type = $data['type'];
        $url = $data['url'];
        $title = $data['title'];

        // Insert the social link into the group_social_links table
        $sql = "INSERT INTO group_social_links (groupid, type, url, title) VALUES (:groupid, :type, :url, :title)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':groupid', $groupid);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':title', $title);
        $stmt->execute();

        // Check if the insertion was successful
        $insertedRows = $stmt->rowCount();
        if ($insertedRows > 0) {
            // Social link added successfully
            $response = array('status' => 'success', 'message' => 'Social link added successfully');
            echo json_encode($response);
        } else {
            // Failed to add social link
            $response = array('status' => 'error', 'message' => 'Failed to add social link');
            echo json_encode($response);
        }
    } else {
        // Required fields are missing in the JSON payload
        $response = array('status' => 'error', 'message' => 'Required fields are missing');
        echo json_encode($response);
    }
} else {
    // Invalid request method
    $response = array('status' => 'error', 'message' => 'Invalid request method');
    echo json_encode($response);
}
?>