<?php
// Inizia o ripristina la sessione
session_start();

// Inizializza i contatori per hamburger, bevande e dolci
$contator_hamb = 0;
$contator_bevand = 0;
$contator_dolce = 0;

// HAMBURGER
$quantita_hamburger_1 = isset($_SESSION["quantita_hamburger_1"]) ? $_SESSION["quantita_hamburger_1"] : 0;
$quantita_hamburger_2 = isset($_SESSION["quantita_hamburger_2"]) ? $_SESSION["quantita_hamburger_2"] : 0;
$quantita_hamburger_3 = isset($_SESSION["quantita_hamburger_3"]) ? $_SESSION["quantita_hamburger_3"] : 0;
$quantita_hamburger_4 = isset($_SESSION["quantita_hamburger_4"]) ? $_SESSION["quantita_hamburger_4"] : 0;

// Calcola il totale per gli hamburger
$contator_hamb = (8.99 * $quantita_hamburger_1) + (6.99 * $quantita_hamburger_2) + (10 * $quantita_hamburger_3) + (9.50 * $quantita_hamburger_4);

// BEVANDE
$quantita_bevanda_1 = isset($_SESSION["quantita_bevanda_1"]) ? $_SESSION["quantita_bevanda_1"] : 0;
$quantita_bevanda_2 = isset($_SESSION["quantita_bevanda_2"]) ? $_SESSION["quantita_bevanda_2"] : 0;
$quantita_bevanda_3 = isset($_SESSION["quantita_bevanda_3"]) ? $_SESSION["quantita_bevanda_3"] : 0;
$quantita_bevanda_4 = isset($_SESSION["quantita_bevanda_4"]) ? $_SESSION["quantita_bevanda_4"] : 0;

// Calcola il totale per le bevande
$contator_bevand = (2.99 * $quantita_bevanda_1) + (2.99 * $quantita_bevanda_2) + (4.00 * $quantita_bevanda_3) + (4.00 * $quantita_bevanda_4);

// DOLCI
$quantita_dolce_1 = isset($_SESSION["quantita_dolce_1"]) ? $_SESSION["quantita_dolce_1"] : 0;
$quantita_dolce_2 = isset($_SESSION["quantita_dolce_2"]) ? $_SESSION["quantita_dolce_2"] : 0;
$quantita_dolce_3 = isset($_SESSION["quantita_dolce_3"]) ? $_SESSION["quantita_dolce_3"] : 0;
$quantita_dolce_4 = isset($_SESSION["quantita_dolce_4"]) ? $_SESSION["quantita_dolce_4"] : 0;

// Calcola il totale per i dolci
$contator_dolce = (8.99 * $quantita_dolce_1) + (15.99 * $quantita_dolce_2) + (10.00 * $quantita_dolce_3) + (9.50 * $quantita_dolce_4);

// Calcola il totale complessivo
$total = $contator_hamb + $contator_bevand + $contator_dolce;

// Salva il totale nella sessione per l'elaborazione successiva
$_SESSION["total"] = $total;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Riepilogo delle selezioni</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <!-- Hamburger Section -->
    <div style="text-align:center;" class="animate__animated animate__fadeIn animate__delay-1s">
        <h1 style="color:blue; font-size:60px">HAMBURGER</h1>
        <?php 
        // Visualizza la quantità e il totale per ciascun tipo di hamburger
        if ($quantita_hamburger_1 >= 1) {
            echo "<h2>Quantità Hamburger del Mese: $quantita_hamburger_1</h2>";
        }
    
        if ($quantita_hamburger_2 >= 1) {
            echo "<h2>Quantità Hamburger Classico: $quantita_hamburger_2</h2>";
        }
    
        if ($quantita_hamburger_3 >= 1) {
            echo "<h2>Quantità Hamburger al Formaggio: $quantita_hamburger_3</h2>";
        }
    
        if ($quantita_hamburger_4 >= 1) {
            echo "<h2>Quantità Hamburger con Bacon: $quantita_hamburger_4</h2>";
        }
    
        // Visualizza il totale per gli hamburger
        echo "<h2 style='color:red; font-size:35px'>Totale Hamburger: $contator_hamb €</h2>";
        ?>
    </div>

    <!-- Bevande Section -->
    <div style="text-align:center;" class="animate__animated animate__fadeIn animate__delay-1s">
        <h1 style="color:blue; font-size:60px">BEVANDE</h1>
    
        <?php 
        // Visualizza la quantità e il totale per ciascun tipo di bevanda
        if ($quantita_bevanda_1 >= 1) {
            echo "<h2>Quantità Acqua Naturale: $quantita_bevanda_1</h2>";
        }
    
        if ($quantita_bevanda_2 >= 1) {
            echo "<h2>Quantità Acqua Frizzante: $quantita_bevanda_2</h2>";
        }
    
        if ($quantita_bevanda_3 >= 1) {
            echo "<h2>Quantità Coca-Cola: $quantita_bevanda_3</h2>";
        }
    
        if ($quantita_bevanda_4 >= 1) {
            echo "<h2>Quantità Fanta: $quantita_bevanda_4</h2>";
        }
    
        // Visualizza il totale per le bevande
        echo "<h2 style='color:red; font-size:35px'>Totale Bevande: $contator_bevand €</h2>";
        ?>
    </div>

    <!-- Dolci Section -->
    <div style="text-align:center;" class="animate__animated animate__fadeIn animate__delay-1s">
        <h1 style="color:blue; font-size:60px">DOLCI</h1>
        <?php 
        // Visualizza la quantità e il totale per ciascun tipo di dolce
        if ($quantita_dolce_1 >= 1) {
            echo "<h2>Quantità Torta al Cioccolato: $quantita_dolce_1</h2>";
        }
    
        if ($quantita_dolce_2 >= 1) {
            echo "<h2>Quantità Torta alle Fragole: $quantita_dolce_2</h2>";
        }
    
        if ($quantita_dolce_3 >= 1) {
            echo "<h2>Quantità Tiramisù: $quantita_dolce_3</h2>";
        }
    
        if ($quantita_dolce_4 >= 1) {
            echo "<h2>Quantità Cannolo al Pistacchio: $quantita_dolce_4</h2>";
        }
    
        // Visualizza il totale per i dolci
        echo "<h2 style='color:red; font-size:35px'>Totale Dolci: $contator_dolce €</h2>";
        ?>
    </div>

    <!-- Totale Complessivo Section -->
    <div style="text-align:center;" class="animate__animated animate__fadeDown animate__delay-1s">
        <h1 style="color:blue; font-size:60px">TOTALE COMPLESSIVO</h1>
        <h2 style="color:red; font-size:30px">Totale Ordine: <?php echo $total; ?>€</h2>
    </div>

</body>
</html>
?>
