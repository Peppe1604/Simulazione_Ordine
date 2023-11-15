<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONFERMA EMAIL ~GM</title>
</head>
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
        height: 100px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .button-pag {
        background-color: #2664eb;
        color: #fff;
        border: none;
        padding: 10px 30px;
        border-radius: 5px;
        text-transform: uppercase;
        cursor: pointer;
        text-decoration: none;
    }
</style>
<body>
    <h1 class="h1-pag">CONFERMA EMAIL</h1>

    <div class="container-pag">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST["email"];
                echo '<p style="text-decoration:none; color: green; font-weight: bold;">Dati inviati correttamente, riceverai preso una risposta su: '. $email. '</p>';
        } else {
            echo "<p>Errore nell'invio del modulo.</p>";
        }
        ?>
        <br>
        <a href="../index.html" class="button-pag">Clicca per tornare alla home</a>
    </div>
</body>

</html>
