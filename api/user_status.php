<?php
// Configuration for database connection
$servername = 'mysql0.serv00.com';
$dbname = 'm35828_RBLX16';
$username = 'm35828_root';
$password = '7w!8Dc-86pW<+TWdj4Qes9QKK7hJtS';

// Create a database connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Check if the connection is successful
if (!$conn) {
    $response["status"] = "error";
    $response["message"] = "Database connection failed: " . mysqli_connect_error();
    echo json_encode($response);
    exit;
}

// Check if the user ID and status are provided
if (isset($_POST['userId']) && isset($_POST['status'])) {
    $userId = $_POST['userId'];
    $status = $_POST['status'];

    // Prepare the SQL query to update the user's status
    $sql = "UPDATE `accounts` SET `online` = ? WHERE `id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$status, $userId]);

    // Check if the update was successful
    if ($stmt->rowCount() > 0) {
        // Return success response
        $response = [
            "status" => "success",
            "message" => "User status updated successfully"
        ];
    } else {
        // Unable to update the user's status
        $response = [
            "status" => "error",
            "message" => "Unable to update the user's status"
        ];
    }
} else {
    // Invalid request parameters
    $response = [
        "status" => "error",
        "message" => "Invalid request parameters"
    ];
}

// Output the JSON response
echo json_encode($response);
?>