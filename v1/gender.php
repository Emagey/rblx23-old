<?php
require_once('site.php');

$host = "mysql0.serv00.com";
$username = "m4486_root";
$password = "xzNsO(CE^D#V7T4KjhlG";
$dbname = "m4486_st3";

// Create a new MySQLi connection
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get the logged-in user's ID (replace 1 with the actual user ID)
$userId = $usr['id'];

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Retrieve the gender from the "accounts" table
    $query = "SELECT gender FROM accounts WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $userId);
    $stmt->execute();

    // Fetch the result
    $result = $stmt->get_result();

    if ($result === false) {
        echo "Failed to fetch data from the database.";
    } else {
        $row = $result->fetch_assoc();

        // Check if the row exists and gender field is not null
        if ($row && isset($row["gender"])) {
            $gender = $row["gender"];
        } else {
            $gender = null;
        }

        // Prepare the response data
        $data = [
            "gender" => $gender,
        ];

        // Encode the data as JSON
        $json = json_encode($data);
        echo $json;
    }

    $stmt->close();
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the gender from the form parameter
    $gender = $_POST['gender'];

    // Update the gender in the "accounts" table
    $query = "UPDATE accounts SET gender = ? WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ii", $gender, $userId);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        // Prepare the success response
        $response = [
            "success" => true,
        ];
    } else {
        // Prepare the error response
        $response = [
            "errors" => [
                [
                    "code" => 0,
                    "message" => "Failed to update gender.",
                    "userFacingMessage" => "Failed to update gender."
                ]
            ]
        ];
    }

    // Encode the response as JSON
    $jsonResponse = json_encode($response);
    echo $jsonResponse;

    $stmt->close();
}

$mysqli->close();