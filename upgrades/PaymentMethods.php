<?php
include_once('../site.php');

// Verifica se l'utente è loggato e ottieni l'ID dell'utente
$userId = $usr['id'];

// Funzione per ottenere le informazioni sul prodotto Robux selezionato
function getRobuxInfo($db, $id)
{
    $sql = "SELECT * FROM robux WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $robuxInfo = $stmt->fetch(PDO::FETCH_ASSOC);

    return $robuxInfo;
}

// Funzione per aggiornare il numero di Robux nell'account utente
function updateRobuxQuantity($db, $userId, $quantity)
{
    $sql = "UPDATE accounts SET robux = robux + :quantity WHERE id = :userId";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    $stmt->execute();
}

// Verifica se è stato fornito un parametro 'ap' nella richiesta GET
if (isset($_GET['ap'])) {
    $productId = $_GET['ap'];

    // Ottenere le informazioni sul prodotto Robux selezionato
    $robuxInfo = getRobuxInfo($db, $productId);

    if ($robuxInfo) {
        // Verifica se è stato fornito un parametro 'userId' nella richiesta GET
        if (isset($userId)) {
            $quantity = str_replace('.', '', $robuxInfo['amount']);

            // Aggiorna il numero di Robux nell'account utente
            updateRobuxQuantity($db, $userId, $quantity);

            // Restituisci una risposta JSON con un messaggio di successo
            $response = [
                'success' => true,
                'message' => 'Robux quantity updated successfully.'
            ];
        } else {
            // Restituisci una risposta JSON con un messaggio di errore
            $response = [
                'success' => false,
                'message' => 'User ID is missing in the request.'
            ];
        }
    } else {
        // Restituisci una risposta JSON con un messaggio di errore
        $response = [
            'success' => false,
            'message' => 'Invalid Robux product ID.'
        ];
    }
} else {
    // Restituisci una risposta JSON con un messaggio di errore
    $response = [
        'success' => false,
        'message' => 'Product ID is missing in the request.'
    ];
}

// Imposta il tipo di contenuto della risposta come JSON
header('Content-Type: application/json');

// Restituisci la risposta JSON
echo json_encode($response);

// Reindirizza alla pagina precedente
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>
