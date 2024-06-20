<?php
$data = array(
    "emailSent" => false,
    "vendorToken" => null,
    "verificationLink" => "https://test.com",
    "sessionIdentifier" => "inq_dqapsEinP7y8kw7vhkKoXsXn",
    "daysUntilNextVerification" => 0
);

$jsonData = json_encode($data, JSON_PRETTY_PRINT);

echo $jsonData;
