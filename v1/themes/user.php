<?php
$jsonData = '{"themeType":"dark"}';

// Decode JSON data into PHP associative array
$data = json_decode($jsonData, true);

// Convert PHP array back to JSON string
$jsonString = json_encode($data);

// Print the JSON string
echo $jsonString;
