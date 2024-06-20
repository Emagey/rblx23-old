<?php
// Include site.php for database connection and other configurations
require_once '../../site.php';

// Check the request method
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get the logged user's account information
    $userId = $usr['id'];
    $query = $db->prepare("SELECT countryName, countryId FROM accounts WHERE id = :userId");
    $query->execute([':userId' => $userId]);
    $account = $query->fetch();

    if ($account) {
        // Prepare the response with the country information
        $response = [
            "countryName" => $account['countryName'],
            "localizedName" => $account['countryName'],
            "countryId" => $account['countryId'],
            "success" => true,
            "errorMessage" => null
        ];
    } else {
        // Prepare the error response if account not found
        $response = [
            "error" => "AccountNotFound",
            "message" => "User account not found"
        ];
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the country ID from the payload
    $countryId = $_POST['countryId'];

    // Retrieve the country list from the .txt file
    $countryListFile = file_get_contents('countries.txt');
    $countryList = json_decode($countryListFile, true);

    // Find the country name based on the country ID
    $countryName = null;
    foreach ($countryList['countryList'] as $country) {
        if ($country['countryId'] == $countryId) {
            $countryName = $country['countryName'];
            break;
        }
    }

    if ($countryName) {
        // Update the logged user's account with the country information
        $userId = $usr['id'];
        $updateQuery = $db->prepare("UPDATE accounts SET countryName = :countryName, countryId = :countryId WHERE id = :userId");
        $updateQuery->execute([':countryName' => $countryName, ':countryId' => $countryId, ':userId' => $userId]);

        // Prepare the success response
        $response = [
            "success" => true
        ];
    } else {
        // Prepare the error response for invalid country ID
        $response = [
            "error" => "InvalidCountryId",
            "message" => "Invalid country ID provided"
        ];
    }
} else {
    // Prepare the error response for unsupported request method
    $response = [
        "error" => "MethodNotAllowed",
        "message" => "GET or POST method is required for this endpoint"
    ];
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
exit();
