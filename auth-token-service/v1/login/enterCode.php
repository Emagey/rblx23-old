<?php
// Include site.php for database connection and other configurations
require_once 'site.php';

// Get the payload from the request
$payload = json_decode(file_get_contents('php://input'), true);

// Extract the entered code from the payload
$enteredCode = $payload['code'];

// Check if the entered code is valid
$query = $db->prepare("SELECT * FROM login_codes WHERE code = :code");
$query->execute([':code' => $enteredCode]);
$loginCode = $query->fetch(PDO::FETCH_ASSOC);

if ($loginCode) {
    // Update the status and accountName of the login code
    $updateCode = $db->prepare("UPDATE login_codes SET status = 'UserLinked', accountName = :accountName WHERE code = :code");
    $updateCode->execute([':accountName' => $usr['username'], ':code' => $enteredCode]);

    // Prepare the success response with deviceInfo and location
    $response = [
        "code" => $enteredCode,
        "deviceInfo" => "Device",
        "location" => "Not Added",
    ];
} else {
    // Prepare the error response for invalid code
    $response = [
        "error" => "CodeInvalid"
    ];

    // Set the HTTP response status to 400 (Bad Request)
    http_response_code(400);
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
