<?php
// Inizializza la sessione
session_start();

// Verifica se la richiesta è di tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera le quantità di hamburger dal modulo
    $quantita_hamburger_1 = isset($_POST["quantita_hamburger_1"]) ? $_POST["quantita_hamburger_1"] : 0;
    $quantita_hamburger_2 = isset($_POST["quantita_hamburger_2"]) ? $_POST["quantita_hamburger_2"] : 0;
    $quantita_hamburger_3 = isset($_POST["quantita_hamburger_3"]) ? $_POST["quantita_hamburger_3"] : 0;
    $quantita_hamburger_4 = isset($_POST["quantita_hamburger_4"]) ? $_POST["quantita_hamburger_4"] : 0;

    // Memorizza le quantità nelle sessioni
    $_SESSION["quantita_hamburger_1"] = $quantita_hamburger_1;
    $_SESSION["quantita_hamburger_2"] = $quantita_hamburger_2;
    $_SESSION["quantita_hamburger_3"] = $quantita_hamburger_3;
    $_SESSION["quantita_hamburger_4"] = $quantita_hamburger_4;

    // Reindirizza l'utente alla pagina principale
    header("Location: ../index.html");
    exit();
}
?>
