<?php
$data = [
    "bannerDismissTimeSpan" => 5000,
    "signalRDisconnectionResponseInMilliseconds" => 3000,
    "canLaunchGameFromGameUpdate" => true
];

$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Output the JSON data
echo $jsonData;
