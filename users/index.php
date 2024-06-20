<?php
// index.php

// Controlla se la richiesta corrisponde al percorso "/users/{user_id}/profile/"
if ($_SERVER['REQUEST_URI'] === '/users/userid/profile/') {
    // Ottieni l'ID dell'utente dall'URL
    $urlParts = explode('/', $_SERVER['REQUEST_URI']);
    $userId = $urlParts[2];

    // Reindirizza alla pagina User.aspx con il parametro ID
    $redirectUrl = "User.aspx?ID=$userId";
    header("Location: $redirectUrl");
    exit;
}
