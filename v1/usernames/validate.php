<?php
include_once('feeddb.php');

// Funzione per controllare se un username è già in uso
function checkUsernameAvailability($db, $username)
{
    $sql = "SELECT COUNT(*) FROM accounts WHERE username = :username";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    return $count > 0 ? true : false;
}

// Verifica se è stato fornito un payload valido nella richiesta POST
$payload = json_decode(file_get_contents('php://input'), true);

if (isset($payload['username']) && isset($payload['context'])) {
    $username = $payload['username'];


    // Controlla se l'username è già in uso
    $isUsernameInUse = checkUsernameAvailability($db, $username);

    // Creazione della risposta JSON
    if ($isUsernameInUse) {
        $response = [
            'code' => 1,
            'message' => 'Username is already in use'
        ];
    } else {
        $response = [
            'code' => 0,
            'message' => 'Username is valid'
        ];
    }
} else {
    // Restituisci una risposta JSON con un messaggio di errore
    $response = [
        'error' => 'Invalid payload. Username, context, or birthday is missing.'
    ];
}

// Imposta il tipo di contenuto della risposta come JSON
header('Content-Type: application/json');

// Restituisci la risposta JSON
echo json_encode($response);
?>
