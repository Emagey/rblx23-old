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
    // Retrieve the birthdate from the "accounts" table
    $query = "SELECT birthMonth, birthDay, birthYear FROM accounts WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $userId);
    $stmt->execute();

    // Fetch the result
    $result = $stmt->get_result();

    if ($result === false) {
        echo "Failed to fetch data from the database.";
    } else {
        $row = $result->fetch_assoc();

        // Check if the row exists and the birthdate fields are not null
        if ($row && isset($row["birthMonth"]) && isset($row["birthDay"]) && isset($row["birthYear"])) {
            $birthMonth = $row["birthMonth"];
            $birthDay = $row["birthDay"];
            $birthYear = $row["birthYear"];
        } else {
            $birthMonth = null;
            $birthDay = null;
            $birthYear = null;
        }

        // Prepare the response data
        $data = [
            "birthMonth" => $birthMonth,
            "birthDay" => $birthDay,
            "birthYear" => $birthYear,
        ];

        // Encode the data as JSON
        $json = json_encode($data);
        echo $json;
    }

    $stmt->close();
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the birthdate from the form parameters
    $birthMonth = $_POST['birthMonth'];
    $birthDay = $_POST['birthDay'];
    $birthYear = $_POST['birthYear'];

    // Update the birthdate in the "accounts" table
    $query = "UPDATE accounts SET birthMonth = ?, birthDay = ?, birthYear = ? WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("iiii", $birthMonth, $birthDay, $birthYear, $userId);
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
                    "message" => "Failed to update birthdate.",
                    "userFacingMessage" => "Failed to update birthdate."
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