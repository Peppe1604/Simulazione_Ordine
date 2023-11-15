<?php
// Inizializzazione della sessione
session_start();

// Recupero del totale dalla sessione, se presente
if (isset($_SESSION["total"])) {
    $total = $_SESSION["total"];
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadati del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONFERMA ORDINE ~GM</title>

    <!-- Stili CSS incorporati -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }

        .h1-pag {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        .container-pag {
            max-width: 900px;
            height: 200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .button-pag {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 30px;
            border-radius: 5px;
            text-transform: uppercase;
            cursor: pointer;
            text-decoration: none;
        }

        .button-pag-2 {
            background-color: #4d80df;
            color: #fff;
            border: none;
            padding: 10px 30px;
            border-radius: 5px;
            text-transform: uppercase;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Intestazione della pagina -->
    <h1 class="h1-pag">Conferma Ordine</h1>

    <!-- Contenitore principale -->
    <div class="container-pag">
        <?php
        // Verifica se la richiesta è di tipo POST e se è stato inviato il campo "tableNumber"
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tableNumber"])) {
            $tableNumber = $_POST["tableNumber"];
            // Verifica se il totale è diverso da zero
            if ($total != 0) {
                // Messaggio di conferma dell'ordine
                echo '<p>Ordine confermato per il tavolo numero ' . $tableNumber . '</p>';
                echo '<p style="text-decoration:underline; color: green; font-weight: bold;">Si prega di procedere al pagamento in cassa.</p>';
            } else {
                // Messaggio di avviso se il totale è zero
                echo '<p>Ordine non confermato per il tavolo numero ' . $tableNumber . '</p>';
                echo '<p style="text-decoration:underline; color: red; font-weight: bold;">Si prega di inserire dei prodotti.</p>';
            }
        } else {
            // Messaggio di errore in caso di problema con il modulo
            echo "<p>Errore nell'invio del modulo.</p>";
        }
        ?>

        <!-- Link per tornare alla home -->
        <br>
        <a href="./distruggi.php" class="button-pag">Clicca per tornare alla home</a>

        <!-- Altri link, ad esempio, per ricevere offerte -->
        <br><br><br>
        <a href="./OFFERT/index.html" class="button-pag-2">Clicca per ricevere offerte</a>
    </div>
</body>

</html>
