<?php
include_once('../site.php');

// Get the user ID from the URL or any other source
$userId = $_GET['id']; // Replace 'id' with the actual parameter name

// Prepare and execute the SQL statement
$stmt = $conn->prepare("SELECT premium FROM accounts WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

// Initialize the premium variable
$premiumValue = null;

// Check if there is a row returned from the query
if ($result->num_rows > 0) {
    // Retrieve the premium value
    $row = $result->fetch_assoc();
    $premiumValue = $row['premium'];
}

// Close the database connection
$conn->close();

// Set the response content type to plain text
header('Content-Type: text/plain');

// Send the premium value as the response
echo $premiumValue;
?>

