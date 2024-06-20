<?php
$arrayData = array('count' => 0); // PHP array

$jsonData = json_encode($arrayData); // Convert PHP array to JSON

echo $jsonData; // Output: {"count":2}
