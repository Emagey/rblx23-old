<?php
include_once('site.php');

$userId = $_GET['id'];

$query = $db->prepare("SELECT Robux, Tickets FROM accounts WHERE id = :userId");
$query->execute([':userId' => $userId]);
$userData = $query->fetch();

if ($userData) {
    $robux = $userData['Robux'];
    $tix = $userData['Tickets'];

    $data = array(
        "robux" => $robux,
        "tix" => $tix
    );

    $json = json_encode($data);
    echo $json;
} else {
    echo "User data not found.";
}
header('Content-Type: application/json');
?>
