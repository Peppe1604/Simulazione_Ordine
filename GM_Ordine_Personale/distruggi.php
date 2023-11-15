<?php 
// Inizia o ripristina la sessione
session_start();

// Cancella tutte le variabili di sessione
session_unset();

// Distrugge la sessione corrente
session_destroy();

// Reindirizza l'utente alla pagina index.html
header("Location: ./index.html");

// Interrompe l'esecuzione dello script
exit();
?>
