<?php
$theme = 'dark'; // Imposta il tema predefinito su "dark"

// Se è presente un cookie per il tema, sovrascrivi il valore predefinito
if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
}

// Funzione per convertire il tema
function convertTheme($text) {
    global $theme;
    
    if ($theme === 'dark') {
        // Esegui qui la tua logica per la conversione del tema da dark a dark
        // Ad esempio, puoi utilizzare str_replace() o altre funzioni di manipolazione del testo
        $text = str_replace('dark', 'dark', $text);
    }
    
    return $text;
}
?>