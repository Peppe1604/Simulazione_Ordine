<?php
// Inizializza la sessione
session_start();

// Verifica se la richiesta è di tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera le quantità di bevande dal modulo
    $quantita_bevanda_1 = isset($_POST["quantita_bevanda_1"]) ? $_POST["quantita_bevanda_1"] : 0;
    $quantita_bevanda_2 = isset($_POST["quantita_bevanda_2"]) ? $_POST["quantita_bevanda_2"] : 0;
    $quantita_bevanda_3 = isset($_POST["quantita_bevanda_3"]) ? $_POST["quantita_bevanda_3"] : 0;
    $quantita_bevanda_4 = isset($_POST["quantita_bevanda_4"]) ? $_POST["quantita_bevanda_4"] : 0;

    // Memorizza le quantità nelle sessioni
    $_SESSION["quantita_bevanda_1"] = $quantita_bevanda_1;
    $_SESSION["quantita_bevanda_2"] = $quantita_bevanda_2;
    $_SESSION["quantita_bevanda_3"] = $quantita_bevanda_3;
    $_SESSION["quantita_bevanda_4"] = $quantita_bevanda_4;

    // Reindirizza l'utente alla pagina principale
    header("Location: ../index.html");
    exit();
}
?>
