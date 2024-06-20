<?php
// Create an associative array with the desired data
$response = array(
    "displayNewsTab" => true
);

// Convert the array to JSON
$jsonResponse = json_encode($response);

// Set the content type to JSON
header('Content-Type: application/json');

// Send the JSON response
echo $jsonResponse;
?>
