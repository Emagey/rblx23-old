<?php
header("Content-Type: application/json");

$response = array();

// Configurazione di connessione al database
$servername = 'mysql0.serv00.com';
$dbname = 'm35828_RBLX16';
$username = 'm35828_root';
$password = '7w!8Dc-86pW<+TWdj4Qes9QKK7hJtS';

// Creazione della connessione al database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se la connessione al database ha avuto successo
if (!$conn) {
    $response["status"] = "error";
    $response["message"] = "Connessione al database fallita: " . mysqli_connect_error();
    echo json_encode($response);
    exit;
}

// Verifica se l'ID dell'utente è un numero
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $userId = $_GET['id'];

    // Query per ottenere lo stato online/offline dell'utente dal database
    $sql = "SELECT `online` FROM `accounts` WHERE `id` = $userId";
    $result = mysqli_query($conn, $sql);

    // Verifica se la query ha restituito risultati
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $onlineStatus = $row['online'];

        $response["status"] = "success";
        $response["data"]["online"] = $onlineStatus;
    } else {
        $response["status"] = "error";
        $response["message"] = "Stato online/offline non disponibile per l'utente.";
    }
} else {
    $response["status"] = "error";
    $response["message"] = "ID utente non valido.";
}

// Chiudi la connessione al database
mysqli_close($conn);

// Restituisci la risposta JSON
echo json_encode($response);
?>
