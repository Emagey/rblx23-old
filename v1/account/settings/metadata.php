<?php
// JSON data
$jsonData = '{
    "IsAccountsRestrictionsSpamBugFixEnabled": true,
    "MaximumParentalControlsMonthlySpendLimitInUSD": 10000,
    "IsParentalMonthlyLimitInUIEnabled": true,
    "IsParentalNotificationSettingsInUIEnabled": true,
    "IsContentControlsEnabled": false
}';

// Decode the JSON data into an associative array
$data = json_decode($jsonData, true);

// Encode the data back to JSON format
$jsonEncoded = json_encode($data);
header('Content-Type: application/json');
// Output the encoded JSON
echo $jsonEncoded;
?>
