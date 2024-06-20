<?php
// Include site.php for database connection and other configurations
require_once '../site.php';

// Get the user's information from the accounts table
$query = $db->prepare("SELECT currentCredit FROM accounts WHERE username = :username");
$query->execute([':username' => $usr['username']]);
$userData = $query->fetch();

if ($userData) {
    // Retrieve the credit balance from the user's data
    $creditBalance = $userData['currentCredit'];

    $conversionRate = 80; // Assuming 1 dollar = 80 Robux

    // Calculate the Robux amount based on the credit balance and conversion rate
    $robuxAmount = $creditBalance * $conversionRate;

    // Prepare the success response with the credit balance and Robux amount
    $response = [
        "creditBalance" => $creditBalance,
        "currencyCode" => "USD",
        "robuxConversionAmount" => $robuxAmount
    ];
} else {
    // Prepare the error response if user data is not found
    $response = [
        "error" => "UserNotFound"
    ];

    // Set the HTTP response status to 404 (Not Found)
    http_response_code(404);
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
exit();
