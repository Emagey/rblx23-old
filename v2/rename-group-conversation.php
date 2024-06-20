<?php
require_once('site.php');



      $username = $usr['username']; 
try {
    // Retrieve the request payload
    $payload = file_get_contents('php://input');

    // Decode the JSON payload
    $data = json_decode($payload, true);

    // Extract the conversationId and newTitle from the decoded payload
    $conversationId = $data['conversationId'];
    $newTitle = $data['newTitle'];



    // Prepare the SQL statement to update the conversation title
    $statement = $db->prepare("UPDATE conversations SET title = :newTitle WHERE id = :conversationId");

    // Bind the values to the placeholders in the SQL statement
    $statement->bindParam(':newTitle', $newTitle, PDO::PARAM_STR);
    $statement->bindParam(':conversationId', $conversationId, PDO::PARAM_INT);

    // Execute the prepared statement
    $statement->execute();
$statementr = $db->prepare("INSERT INTO messages (id, conversationId, senderType, sent, `read`, messageType, decorators, senderTargetId, content) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$messageId = uniqid(); // Generate a unique ID for the message
$message= "{System} $username Changed group name got changed to $newTitle";
// Bind the values to the placeholders in the SQL statement
$statementr->execute([$messageId, $conversationId, 'User', gmdate("Y-m-d H:i:s"), true, 'PlainText', json_encode([]), 0, $message]);

    // Close the database connection
    $db = null;

    // Prepare the response data
    $response = [
        'conversationTitle' => $newTitle,
        'resultType' => 'Success',
        'title' => [
            'titleForViewer' => $newTitle,
            'isDefaultTitle' => false
        ],
        'statusMessage' => 'Successfully changed the title of the conversation'
    ];

    // Set the Content-Type header to application/json
    header('Content-Type: application/json');

    // Output the JSON response
    echo json_encode($response);
} catch (PDOException $e) {
    // Handle any database errors
    $response = [
        'resultType' => 'Error',
        'statusMessage' => 'Failed to change the title of the conversation',
        'errorMessage' => $e->getMessage()
    ];

    // Set the Content-Type header to application/json
    header('Content-Type: application/json');

    // Output the JSON response
    echo json_encode($response);
}
?>
