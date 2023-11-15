<?php
// Inizializza la sessione
session_start();

// Verifica se la richiesta è di tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controlla se le variabili sono impostate e sono numeri interi positivi
    $quantita_dolce_1 = isset($_POST["quantita_dolce_1"]) ? intval($_POST["quantita_dolce_1"]) : 0;
    $quantita_dolce_2 = isset($_POST["quantita_dolce_2"]) ? intval($_POST["quantita_dolce_2"]) : 0;
    $quantita_dolce_3 = isset($_POST["quantita_dolce_3"]) ? intval($_POST["quantita_dolce_3"]) : 0;
    $quantita_dolce_4 = isset($_POST["quantita_dolce_4"]) ? intval($_POST["quantita_dolce_4"]) : 0;

    // Memorizza le quantità nelle sessioni
    $_SESSION["quantita_dolce_1"] = $quantita_dolce_1;
    $_SESSION["quantita_dolce_2"] = $quantita_dolce_2;
    $_SESSION["quantita_dolce_3"] = $quantita_dolce_3;
    $_SESSION["quantita_dolce_4"] = $quantita_dolce_4;

    // Reindirizza l'utente alla pagina principale
    header("Location: ../index.html");
    exit();
}
?>
