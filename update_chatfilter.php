<?php
// Step 1: Establish a database connection
require_once('site.php');

session_start();

try {
    // Retrieve the user ID from the session
    $userId = 2

    // Retrieve the chat filter value from the POST data
    $chatFilterValue = $_POST['chatFilterValue'];

    // Update the user's account with the chat filter value
    $statement = $db->prepare("UPDATE accounts SET chatfilter = :chatFilterValue WHERE id = :userId");
    $statement->bindParam(':chatFilterValue', $chatFilterValue, PDO::PARAM_INT);
    $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
    $statement->execute();

    // Close the database connection
    $db = null;

    // Generate the success response
    $response = [
        "resultType" => "Success",
        "statusMessage" => "Chat filter settings updated successfully."
    ];

    // Convert the response data to JSON format
    $jsonResponse = json_encode($response);

    // Set the Content-Type header to application/json
    header('Content-Type: application/json');

    // Output the JSON response
    echo $jsonResponse;
} catch (PDOException $e) {
    // Handle any database errors
    $response = [
        "resultType" => "Error",
        "statusMessage" => "Database connection error: " . $e->getMessage()
    ];

    // Convert the error response to JSON format
    $jsonResponse = json_encode($response);

    // Set the Content-Type header to application/json
    header('Content-Type: application/json');

    // Output the JSON response
    echo $jsonResponse;
}
?>
