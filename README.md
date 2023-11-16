<h1 align="center" > :diamond_shape_with_a_dot_inside: Simulazione Ordine :diamond_shape_with_a_dot_inside: </h1>

Benvenuto nel repository del progetto Simulazione Ordine. Questo progetto offre una piattaforma di simulazione interattiva per la creazione di ordini personalizzati su un sito web. L'obiettivo principale è fornire agli sviluppatori e agli utenti interessati uno strumento flessibile e intuitivo per comprendere il processo di ordinazione online.

## Descrizione :loudspeaker:

Il progetto Simulazione Ordine è progettato per offrire un'esperienza di simulazione avanzata e coinvolgente. Per ulteriori dettagli sulla sua implementazione e le funzionalità offerte, consulta la sezione [Spiegazione Codice](#Spiegazione-del-Codice).

## Contatti :page_facing_up:
- Instagram: _ giuseppemaglione _ *(senza spazio tra i trattini)*
- Email: giuseppemaglione1604@gmail.com

## Spiegazione-del-Codice


## ***index.html*** (_CREA IL TUO ORDINE ~GM_) :grinning:
#### :bangbang: HEAD :bangbang:
La sezione :heavy_exclamation_mark: "**head**" :heavy_exclamation_mark: in un documento HTML contiene i metadati e le informazioni di importanza generale per la pagina web. Di seguito, una breve descrizione degli elementi presenti nella "**head**".
     <br>
     
   ```HTML
    <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadati del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Collegamento ai fogli di stile CSS -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Titolo della pagina -->
    <title>CREA IL TUO ORDINE ~GM</title>
</head>

   ``` 
* Codifica dei Caratteri: UTF-8 per supportare un vasto insieme di caratteri e lingue.:small_red_triangle:

* Viewport Mobile: Ottimizza la visualizzazione su dispositivi mobili con una larghezza di viewport basata sul dispositivo e uno zoom iniziale di 1.0.:small_red_triangle:

* Foglio di Stile Locale: Collegamento al foglio di stile locale "style.css" per la formattazione della pagina.:small_red_triangle:

* Foglio di Stile Esterno (animate.min.css): Collegamento a un foglio di stile esterno dalla libreria "animate.css" per animazioni predefinite.:small_red_triangle:

* Titolo della Pagina: "CREA IL TUO ORDINE ~GM" visualizzato nella barra del titolo del browser.
<br><br>
#### :bangbang: BODY :bangbang:
La sezione :heavy_exclamation_mark: "**body**" :heavy_exclamation_mark: in un documento HTML contiene il contenuto effettivo visualizzato sulla pagina web. Ecco una breve descrizione degli elementi tipicamente presenti nella sezione "**body**":
<br>

```HTML
<body>
    <!-- Sezione del titolo -->
    <div class="title">
        <h1 class="animate__animated animate__lightSpeedInRight">CREA IL TUO ORDINE</h1>
    </div>

    <!-- Sezione delle card (categorie di prodotti) -->
    <div class="card-container">
        <!-- Card per gli hamburger -->
        <div class="card  animate__animated animate__fadeInLeft ">
            <img src="./HAMBURGER/hamb_1.jpg" alt="Hamburger">
            <h2>Hamburger</h2>
            <a href="./HAMBURGER/index.html">PER GLI HAMBURGER</a>
        </div>

        <!-- Card per le bevande -->
        <div class="card animate__animated animate__fadeInRight">
            <img src="./BEVANDE/bevand_4.jpg" alt="Bevande">
            <h2>Bevande</h2>
            <a href="./BEVANDE/index.html">PER LE BEVANDE</a>
        </div>

        <!-- Card per i dessert -->
        <div class="card animate__animated animate__fadeInDown">
            <img src="./DESSERT/tort_2.jpg" alt="Dessert">
            <h2>Dessert</h2>
            <a href="./DESSERT/index.html">PER I DESSERT</a>
        </div>
    </div>

    <!-- Sezione del riepilogo tramite iframe -->
    <iframe src="riepilogo.php" width="100%" height="500px"></iframe>

    <!-- Form per la conferma dell'ordine -->
    <form method="post" action="conferma_ordine.php">
        <!-- Input per il numero del tavolo -->
        <label for="tableNumber">Inserisci il numero del tavolo:</label>
        <input type="number" id="tableNumber" name="tableNumber" required>
        <!-- Pulsante di conferma dell'ordine -->
        <input type="submit" value="Conferma ordine">
    </form>
</body>
</html>
   ``` 
* Sezione del Titolo: Utilizza una div con classe ***"title"*** per raggruppare il titolo principale.
Il titolo principale, animato con l'effetto *"lightSpeedInRight"* della libreria "animate.css", è **"CREA IL TUO ORDINE"**.
:small_red_triangle:
* Sezione delle **Card** (Categorie di Prodotti): Una div con classe *"card-container"* contiene diverse card per le categorie di prodotti.
* Ogni categoria *(Hamburger, Bevande, Dessert)* è rappresentata da una div con classe *"card"* e un'animazione di entrata *(fadeInLeft, fadeInRight, fadeInDown)*.:small_red_triangle:<br>
##### Ogni card contiene:
* Un'**immagine rappresentativa** della categoria.:small_red_triangle:
* Un **titolo** identificativo della categoria** (Hamburger, Bevande, Dessert).:small_red_triangle:
* Un **link** che reindirizza a una pagina specifica per quella categoria (es. "./HAMBURGER/index.html").:small_red_triangle:

* Sezione del Riepilogo tramite ***iframe***: Utilizza un iframe per incorporare il contenuto della pagina *"riepilogo.php"*.
L'iframe ha larghezza al 100% della larghezza della pagina e un'altezza fissa di 500px.

* Form per la ***Conferma dell'Ordine***: Utilizza un form con metodo di invio *"post"* e azione *"conferma_ordine.php"* per gestire la conferma dell'ordine.
Include un **input** di tipo numero per inserire il numero del tavolo, con etichetta associata.
Contiene un pulsante di conferma dell'ordine.
<br>

## ***riepilogo.php*** (_CREA IL TUO ORDINE ~GM_) :grinning:

<br>

```PHP
<?php
// Inizia o ripristina la sessione
session_start();

// Inizializza i contatori per hamburger, bevande e dolci
$contator_hamb = 0;
$contator_bevand = 0;
$contator_dolce = 0;
```
<br>

* Inizia la sessione PHP e inizializza i contatori per le diverse categorie di prodotti.:small_red_triangle:
  
<br>

#### Controllo Hamburger :hamburger:

```PHP
// HAMBURGER
$quantita_hamburger_1 = isset($_SESSION["quantita_hamburger_1"]) ? $_SESSION["quantita_hamburger_1"] : 0;
$quantita_hamburger_2 = isset($_SESSION["quantita_hamburger_2"]) ? $_SESSION["quantita_hamburger_2"] : 0;
$quantita_hamburger_3 = isset($_SESSION["quantita_hamburger_3"]) ? $_SESSION["quantita_hamburger_3"] : 0;
$quantita_hamburger_4 = isset($_SESSION["quantita_hamburger_4"]) ? $_SESSION["quantita_hamburger_4"] : 0;

// Calcola il totale per gli hamburger
$contator_hamb = (8.99 * $quantita_hamburger_1) + (6.99 * $quantita_hamburger_2) + (10 * $quantita_hamburger_3) + (9.50 * $quantita_hamburger_4);

```
<br>

* Recupera le quantità selezionate per ciascun tipo di hamburger dalla sessione.:small_red_triangle:

* Calcola il totale per gli hamburger in base alle quantità e ai prezzi.:small_red_triangle:

<br>

#### Controllo Bevande :tropical_drink:

```PHP
// BEVANDE
$quantita_bevanda_1 = isset($_SESSION["quantita_bevanda_1"]) ? $_SESSION["quantita_bevanda_1"] : 0;
$quantita_bevanda_2 = isset($_SESSION["quantita_bevanda_2"]) ? $_SESSION["quantita_bevanda_2"] : 0;
$quantita_bevanda_3 = isset($_SESSION["quantita_bevanda_3"]) ? $_SESSION["quantita_bevanda_3"] : 0;
$quantita_bevanda_4 = isset($_SESSION["quantita_bevanda_4"]) ? $_SESSION["quantita_bevanda_4"] : 0;

// Calcola il totale per le bevande
$contator_bevand = (2.99 * $quantita_bevanda_1) + (2.99 * $quantita_bevanda_2) + (4.00 * $quantita_bevanda_3) + (4.00 * $quantita_bevanda_4);

```
<br>

* Recupera le quantità selezionate per ciascun tipo di bevanda dalla sessione.:small_red_triangle:
  
* Calcola il totale per le bevande in base alle quantità e ai prezzi.:small_red_triangle:
  
<br>

#### Controllo Dolci :cake:

```PHP
// DOLCI
$quantita_dolce_1 = isset($_SESSION["quantita_dolce_1"]) ? $_SESSION["quantita_dolce_1"] : 0;
$quantita_dolce_2 = isset($_SESSION["quantita_dolce_2"]) ? $_SESSION["quantita_dolce_2"] : 0;
$quantita_dolce_3 = isset($_SESSION["quantita_dolce_3"]) ? $_SESSION["quantita_dolce_3"] : 0;
$quantita_dolce_4 = isset($_SESSION["quantita_dolce_4"]) ? $_SESSION["quantita_dolce_4"] : 0;

// Calcola il totale per i dolci
$contator_dolce = (8.99 * $quantita_dolce_1) + (15.99 * $quantita_dolce_2) + (10.00 * $quantita_dolce_3) + (9.50 * $quantita_dolce_4);


```
<br>

* Recupera le quantità selezionate per ciascun tipo di dolce dalla sessione.:small_red_triangle:

* Calcola il totale per i dolci in base alle quantità e ai prezzi.:small_red_triangle:
  
<br>

Per ogni tipo di variabile dedicata ai prodotti viene utilizzata la funzione ***isset*** in PHP viene utilizzata per verificare se una variabile è stata inizializzata e se il suo valore non è nullo. In altre parole, restituisce *true* se la variabile esiste ed è diversa da null, altrimenti restituisce *false*.:small_red_triangle:

<br>

   ```PHP
    $quantita_hamburger_1 = isset($_SESSION["quantita_hamburger_1"]) ? $_SESSION["quantita_hamburger_1"] : 0;
   ```

<br>

Quindi, la riga completa assegna a ***$quantita_hamburger_1*** il valore della variabile di sessione *$_SESSION["quantita_hamburger_1"]* se questa esiste ed è diversa da null. In caso contrario, viene assegnato il valore **0**.:small_red_triangle:

<br>

#### Controllo Stampe Dei Prodotti :inbox_tray:

```PHP
  if ($quantita_hamburger_1 >= 1) {
            echo "<h2>Quantità Hamburger del Mese: $quantita_hamburger_1</h2>";
        }
//etc..
if ($quantita_bevanda_1 >= 1) {
            echo "<h2>Quantità Acqua Naturale: $quantita_bevanda_1</h2>";
        }
//etc..
if ($quantita_dolce_1 >= 1) {
            echo "<h2>Quantità Torta al Cioccolato: $quantita_dolce_1</h2>";
        }
//etc..
   ```
<br>

Questo blocco di codice controlla se le variabili $quantita_hamburger_1, $quantita_bevanda_1 e $quantita_dolce_1  sono maggiori o uguale a 1.
Se la condizione è vera, viene visualizzato un elemento **h2** che mostra la quantità del prodotto usando il valore delle variabile; 
per operare con ogni prodotto basta semplicemente ripetere la stessa operazione per ogni variabile.:small_red_triangle:
<br>

## ***conferma_ordine.php*** (_CONFERMA ORDINE ~GM_) :grinning:

<br>

```PHP
<?php
// Inizializzazione della sessione
session_start();

// Recupero del totale dalla sessione, se presente
if (isset($_SESSION["total"])) {
    $total = $_SESSION["total"];
} 
?>
   ```
<br>

La funzione ***session_start()*** inizia una sessione PHP. Le sessioni sono una forma di archiviazione temporanea di dati lato **server** associata a un utente specifico durante la sua visita al sito.:small_red_triangle:
<br><br>
questo blocco di codice controlla se esiste una variabile di sessione chiamata *"total"* e, se presente, recupera il suo valore nella variabile **$total**. Questo è utile per mantenere il totale dell'ordine tra le varie pagine del sito web, consentendo agli utenti di confermare l'ordine e visualizzare il totale corretto.:small_red_triangle:

<br>

```PHP
<?php
        // Verifica se la richiesta è di tipo POST e se è stato inviato il campo "tableNumber"
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tableNumber"])) {
            $tableNumber = $_POST["tableNumber"];
            // Verifica se il totale è diverso da zero
            if ($total != 0) {
                // Messaggio di conferma dell'ordine
                echo '<p>Ordine confermato per il tavolo numero ' . $tableNumber . '</p>';
                echo '<p style="text-decoration:underline; color: green; font-weight: bold;">Si prega di procedere al pagamento in cassa.</p>';
            }
   ```
<br>

*Verifica della Richiesta:

 * Si controlla se i dati del modulo sono stati inviati al server attraverso una richiesta di tipo POST.
* Recupero del Numero del Tavolo:

* Se la richiesta è di tipo POST, il codice estrae il numero del tavolo dai dati inviati tramite il modulo.
* Verifica del Totale dell'Ordine:

* Viene verificato se l'importo totale dell'ordine è diverso da zero, segnalando la presenza di almeno un prodotto selezionato.
* Messaggi di Conferma o Avviso:

* Se l'importo totale è diverso da zero, viene mostrato un messaggio di conferma dell'ordine con il numero del tavolo, accompagnato da istruzioni per procedere al pagamento in cassa.
Nel caso in cui l'importo totale sia zero, viene visualizzato un messaggio di avviso indicando che l'ordine non è stato confermato e suggerendo di aggiungere prodotti.
* Gestione degli Errori:

* In presenza di una richiesta non di tipo POST o se il numero del tavolo non è stato inviato, viene segnalato un messaggio di errore.

