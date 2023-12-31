<h1 align="center" > :diamond_shape_with_a_dot_inside: Simulazione Ordine :diamond_shape_with_a_dot_inside: </h1>

Benvenuto nel repository del progetto Simulazione Ordine. Questo progetto offre una piattaforma di simulazione interattiva per la creazione di ordini personalizzati su un sito web. 
L'obiettivo principale è fornire agli sviluppatori e agli utenti interessati uno strumento flessibile e intuitivo per comprendere il processo di ordinazione online.

<h1 align="center" id="indice-top"> Indice Argomenti :mag_right:</h1>

<div align="center">

| Titolo                                | Descrizione                                           |
| ------------------------------------- | ----------------------------------------------------- |
| [Spiegazione Codice](#Spiegazione-del-Codice)     | Sezione della spiegazione del codice                   |
| [Scelta Delle Bevande](#Scelta-bevande)          | Sezione della spiegazione del codice che gestisce le bevande |
| [Scelta Dei Dessert](#Scelta-dessert)            | Sezione della spiegazione del codice che gestisce i dessert   |
| [Scelta Degli Hamburger](#Scelta-Hamburger)      | Sezione della spiegazione del codice che gestisce gli hamburger  |
| [Form Per i Dati](#Form-Dati)      | Sezione della spiegazione del codice che gestisce l'inserimento dei dati personali  |
</div>


## Descrizione :loudspeaker:

Il progetto Simulazione Ordine è progettato per offrire un'esperienza di simulazione avanzata e coinvolgente. Per ulteriori dettagli sulla sua implementazione e le funzionalità offerte, consulta la sezione [Spiegazione Codice](#Spiegazione-del-Codice).

## Contatti :page_facing_up:
- Instagram: _ giuseppemaglione _ *(senza spazio tra i trattini)*
- Email: giuseppemaglione1604@gmail.com

# Spiegazione del Codice

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
<br>
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
   ``` 
* Sezione del Titolo: Utilizza una div con classe ***"title"*** per raggruppare il titolo principale.
Il titolo principale, animato con l'effetto *"lightSpeedInRight"* della libreria "animate.css", è **"CREA IL TUO ORDINE"**.:small_red_triangle:

* Sezione delle **Card** (Categorie di Prodotti): Una div con classe *"card-container"* contiene diverse card per le categorie di prodotti.
  
* Ogni categoria *(Hamburger, Bevande, Dessert)* è rappresentata da una div con classe *"card"* e un'animazione di entrata *(fadeInLeft, fadeInRight, fadeInDown)*.:small_red_triangle:
<br>

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

* **Verifica della Richiesta:** Si controlla se i dati del modulo sono stati inviati al server attraverso una richiesta di tipo POST.:small_red_triangle:

* **Recupero del Numero del Tavolo:** Se la richiesta è di tipo POST, il codice estrae il numero del tavolo dai dati inviati tramite il modulo.:small_red_triangle:

* **Verifica del Totale dell'Ordine:** Viene verificato se l'importo totale dell'ordine è diverso da zero, segnalando la presenza di almeno un prodotto selezionato.:small_red_triangle:

* **Messaggi di Conferma o Avviso:** Se l'importo totale è diverso da zero, viene mostrato un messaggio di *conferma* dell'ordine con il numero del tavolo, accompagnato da istruzioni per procedere al pagamento in cassa. Nel caso in cui l'importo totale sia zero, viene visualizzato un messaggio di avviso indicando che l'ordine non è stato confermato e suggerendo di aggiungere prodotti.:small_red_triangle:

* **Gestione degli Errori:** In presenza di una richiesta non di tipo POST o se il numero del tavolo non è stato inviato, viene segnalato un messaggio di errore.:small_red_triangle:
 <br>
 

<h2 id="Scelta-bevande"> index.html <i>(SCELTA-BEVANDE ~GM)</i>  :tropical_drink: <a href="#indice-top">Torna all'indice</a></h2>
<br>

#### :bangbang: HEAD :bangbang:
La sezione :heavy_exclamation_mark: "**head**" :heavy_exclamation_mark: in un documento HTML contiene i metadati e le informazioni di importanza generale per la pagina web. Di seguito, una breve descrizione degli elementi presenti nella "**head**".

  <br>
  
```HTML
 <head>
    <!-- Metadati del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Collegamento ai fogli di stile -->
    <link rel="stylesheet" href="./style_bevande.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Titolo della pagina -->
    <title>SCELTA BEVANDE ~GM</title>
</head>

   ```
<br>

* Codifica dei Caratteri: UTF-8 per supportare un vasto insieme di caratteri e lingue.:small_red_triangle:

* Viewport Mobile: Ottimizza la visualizzazione su dispositivi mobili con una larghezza di viewport basata sul dispositivo e uno zoom iniziale di 1.0.:small_red_triangle:

* Foglio di Stile Locale: Collegamento al foglio di stile locale ".style_bevande.css" per la formattazione della pagina.:small_red_triangle:

* Foglio di Stile Esterno (animate.min.css): Collegamento a un foglio di stile esterno dalla libreria "animate.css" per animazioni predefinite.:small_red_triangle:

* Titolo della Pagina: "SCELTA BEVANDE ~GM" visualizzato nella barra del titolo del browser.
<br><br>
#### :bangbang: BODY :bangbang:
La sezione :heavy_exclamation_mark: "**body**" :heavy_exclamation_mark: in un documento HTML contiene il contenuto effettivo visualizzato sulla pagina web. Ecco una breve descrizione degli elementi tipicamente presenti nella sezione "**body**":
<br>

```HTML
<body>
    <!-- Sezione del titolo animato -->
    <div class="title">
        <h1 class="animate__animated animate__lightSpeedInRight">SCEGLI LA BEVANDA</h1>
    </div>

    <!-- Form per la selezione delle bevande -->
    <form action="./process_bevande.php" method="post">
        <!-- Card per la prima bevanda -->
        <div class="bevande-card animate__animated animate__fadeInLeft ">
            <img src="./bevand_1.jpg" alt="Bevanda 1">
            <h2>Acqua Naturale 1L</h2>
            <p>Prezzo: €2.99</p>
            <label for="quantita_bevanda_1">Quantità:</label>
            <input type="number" name="quantita_bevanda_1" id="quantita_bevanda_1" min="0" value="0">
        </div>

        <!-- Card per la seconda bevanda -->
        <div class="bevande-card animate__animated animate__fadeInRight ">
            <img src="./bevand_1.jpg" alt="Bevanda 2">
            <h2>Acqua Frizzante 1L</h2>
            <p>Prezzo: €2.99</p>
            <label for="quantita_bevanda_2">Quantità:</label>
            <input type="number" name="quantita_bevanda_2" id="quantita_bevanda_2" min="0" value="0">
        </div>
<!-- etc... -->
        <!-- Pulsante di submit per procedere -->
        <input type="submit" value="AVANTI" style="font-size: 60px;" class=" animate__animated animate__bounceInUp">
    </form>
</body>
   ``` 
<br>

* Una div con classe *"title"* racchiude il titolo principale "SCEGLI LA BEVANDA".:small_red_triangle:
  
* Il titolo è animato con l'effetto "lightSpeedInRight" di "animate.css".:small_red_triangle:
  
* **Form per la Selezione delle Bevande:** Utilizza un form con metodo "post" e azione *"./process_bevande.php"* per elaborare la selezione delle bevande.
Cards per le Bevande: Ogni bevanda è presentata tramite una "card" con classe "bevande-card". Le bevande sono animate con effetti di entrata come *"fadeInLeft"* e *"fadeInRight"* di *"animate.css"*.:small_red_triangle:

* **Ogni card contiene:** Un'immagine rappresentativa della bevanda. Un titolo identificativo della bevanda *(es. "Acqua Naturale 1L")*. Il prezzo della bevanda. Un campo di input numerico per specificare la quantità desiderata.:small_red_triangle:
  
* **Pulsante di Submit:** Il form include un pulsante di submit con etichetta *"AVANTI"*. Il pulsante è stilizzato con una dimensione del carattere di 60px e animato con *"bounceInUp"* di *"animate.css"*.:small_red_triangle:
<br>

## ***process_bevande.php*** (_SCELTA BEVANDE ~GM_) :grinning:

<br>

```PHP
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

   ```
<br>

* La funzione ***session_start()*** inizia una sessione PHP. Le sessioni sono una forma di archiviazione temporanea di dati lato **server** associata a un utente specifico durante la sua visita al sito.:small_red_triangle:

* **Recupero dei dati delle bevande:** Se la richiesta è di tipo *POST*, nel codice si inizializzano delle variabile per controllare la quantità delle diverse bevande.:small_red_triangle:
  
* **Funzione isset():** Con l'utilizzo della funziona ***isset()*** riusciamo a controllare se la variabile passata tramite la sessione abbia un valore, se è vero gli assegna il valore della variabile, altrimenti assegna il valore 0 alla variabile.:small_red_triangle:

 * **Reindirizzamento alla home:** Con le funzioni header() e exit() si riesce a reindirizzare, dopo il controllo delle variabili, alla pagina home senza che l'utente si accorga dell'elaborazione dei dati.:small_red_triangle:
   
   <br>
   
<h2 id="Scelta-dessert">index.html <i>(SCELTA DESSERT ~GM)</i> :cake:  <a href="#indice-top">Torna all'indice</a></h2>
<br>

#### :bangbang: HEAD :bangbang:
La sezione :heavy_exclamation_mark: "**head**" :heavy_exclamation_mark: in un documento HTML contiene i metadati e le informazioni di importanza generale per la pagina web. Di seguito, una breve descrizione degli elementi presenti nella "**head**".

  <br>
  
```HTML
<head>
    <!-- Metadati del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Collegamento ai fogli di stile -->
    <link rel="stylesheet" href="./style_dolci.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Titolo della pagina -->
    <title>SCELTA DESSERT ~GM</title>
</head>

   ```
<br>

* Codifica dei Caratteri: UTF-8 per supportare un vasto insieme di caratteri e lingue.:small_red_triangle:

* Viewport Mobile: Ottimizza la visualizzazione su dispositivi mobili con una larghezza di viewport basata sul dispositivo e uno zoom iniziale di 1.0.:small_red_triangle:

* Foglio di Stile Locale: Collegamento al foglio di stile locale "style_dolci.css" per la formattazione della pagina.:small_red_triangle:

* Foglio di Stile Esterno (animate.min.css): Collegamento a un foglio di stile esterno dalla libreria "animate.css" per animazioni predefinite.:small_red_triangle:

* Titolo della Pagina: "SCELTA DESSERT ~GM" visualizzato nella barra del titolo del browser.
<br><br>
#### :bangbang: BODY :bangbang:
La sezione :heavy_exclamation_mark: "**body**" :heavy_exclamation_mark: in un documento HTML contiene il contenuto effettivo visualizzato sulla pagina web. Ecco una breve descrizione degli elementi tipicamente presenti nella sezione "**body**":
<br>

```HTML
<body>
    <!-- Sezione del titolo animato -->
    <div class="title">
        <h1 class="animate__animated animate__lightSpeedInRight">SCEGLI IL DOLCE</h1>
    </div>

    <!-- Form per la selezione dei dolci -->
    <form action="./process_dolci.php" method="post">
        <!-- Card per la prima torta -->
        <div class="dolci-card animate__animated animate__fadeInLeft ">
            <img src="./tort_1.jpg" alt="Dolce 1">
            <h2>Torta al Cioccolato</h2>
            <p>Prezzo: €8.99</p>
            <label for="quantita_dolce_1">Quantità:</label>
            <input type="number" name="quantita_dolce_1" id="quantita_dolce_1" min="0" value="0">
        </div>

        <!-- Card per la seconda torta -->
        <div class="dolci-card animate__animated animate__fadeInRight ">
            <img src="./tort_2.jpg" alt="Dolce 2">
            <h2>Torta alle Fragole</h2>
            <p>Prezzo: €15.99</p>
            <label for="quantita_dolce_2">Quantità:</label>
            <input type="number" name="quantita_dolce_2" id="quantita_dolce_2" min="0" value="0">
        </div>
<!-- etc... -->
        <!-- Pulsante di submit per procedere -->
        <input type="submit" value="AVANTI" style="font-size: 60px;" class=" animate__animated animate__bounceInUp">
    </form>
</body>
   ``` 
<br>

* Una div con classe *"title"* racchiude il titolo principale "SCEGLI IL DOLCE".:small_red_triangle:
  
* Il titolo è animato con l'effetto "lightSpeedInRight" di "animate.css".:small_red_triangle:
  
* **Form per la Selezione dei dolci:** Utilizza un form con metodo "post" e azione *".process_dolci.php"* per elaborare la selezione delle bevande.
Cards per le Bevande: Ogni bevanda è presentata tramite una "card" con classe "dolci-card". Le bevande sono animate con effetti di entrata come *"fadeInLeft"* e *"fadeInRight"* di *"animate.css"*.:small_red_triangle:

* **Ogni card contiene:** Un'immagine rappresentativa del dolce. Un titolo identificativo del dolce *(es. "Torta alle Fragole")*. Il prezzo dei dolci. Un campo di input numerico per specificare la quantità desiderata.:small_red_triangle:
  
* **Pulsante di Submit:** Il form include un pulsante di submit con etichetta *"AVANTI"*. Il pulsante è stilizzato con una dimensione del carattere di 60px e animato con *"bounceInUp"* di *"animate.css"*.:small_red_triangle:
<br>

## ***process_dolci.php***  (_SCELTA DESSERT ~GM_) :cake:

<br>

```PHP
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

   ```
<br>

* La funzione ***session_start()*** inizia una sessione PHP. Le sessioni sono una forma di archiviazione temporanea di dati lato **server** associata a un utente specifico durante la sua visita al sito.:small_red_triangle:

* **Recupero dei dati dei dolci:** Se la richiesta è di tipo *POST*, nel codice si inizializzano delle variabile per controllare la quantità dei diversi dolci.:small_red_triangle:
  
* **Funzione isset():** Con l'utilizzo della funziona ***isset()*** riusciamo a controllare se la variabile passata tramite la sessione abbia un valore, se è vero gli assegna il valore della variabile, altrimenti assegna il valore 0 alla variabile.:small_red_triangle:

 * **Reindirizzamento alla home:** Con le funzioni header() e exit() si riesce a reindirizzare, dopo il controllo delle variabili, alla pagina home senza che l'utente si accorga dell'elaborazione dei dati.:small_red_triangle:
<br>
 

<h2 id="Scelta-hamburger"> index.html <i>(SCELTA HAMBURGER ~GM)</i>  :hamburger: <a href="#indice-top">Torna all'indice</a></h2>
<br>

#### :bangbang: HEAD :bangbang:
La sezione :heavy_exclamation_mark: "**head**" :heavy_exclamation_mark: in un documento HTML contiene i metadati e le informazioni di importanza generale per la pagina web. Di seguito, una breve descrizione degli elementi presenti nella "**head**".

  <br>
  
```HTML
 <head>
    <!-- Metadati del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Collegamento ai fogli di stile -->
    <link rel="stylesheet" href="./style_hamburger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Titolo della pagina -->
    <title>SCELTA HAMBURGER ~GM</title>
</head>

   ```
<br>

* Codifica dei Caratteri: UTF-8 per supportare un vasto insieme di caratteri e lingue.:small_red_triangle:

* Viewport Mobile: Ottimizza la visualizzazione su dispositivi mobili con una larghezza di viewport basata sul dispositivo e uno zoom iniziale di 1.0.:small_red_triangle:

* Foglio di Stile Locale: Collegamento al foglio di stile locale ".style_hamburger.css" per la formattazione della pagina.:small_red_triangle:

* Foglio di Stile Esterno (animate.min.css): Collegamento a un foglio di stile esterno dalla libreria "animate.css" per animazioni predefinite.:small_red_triangle:

* Titolo della Pagina: "SCELTA HAMBURGER ~GM" visualizzato nella barra del titolo del browser.
<br><br>
#### :bangbang: BODY :bangbang:
La sezione :heavy_exclamation_mark: "**body**" :heavy_exclamation_mark: in un documento HTML contiene il contenuto effettivo visualizzato sulla pagina web. Ecco una breve descrizione degli elementi tipicamente presenti nella sezione "**body**":
<br>

```HTML
<body>
    <!-- Sezione del titolo -->
    <div class="title">
        <h1 class="animate__animated animate__lightSpeedInRight">SCEGLI L'HAMBURGER</h1>
    </div>

    <!-- Form per la selezione degli hamburger -->
    <form action="./process_hamburger.php" method="post">

        <!-- Primo hamburger -->
        <div class="hamburger-card animate__animated animate__fadeInLeft ">
            <img src="./hamb_6.jpg" alt="Hamburger del Mese - Hamburger 1">
            <h2>Hamburger del Mese</h2>
            <p>Prezzo: €8.99</p>
            <label for="quantita_hamburger_1">Quantità:</label>
            <input type="number" name="quantita_hamburger_1" id="quantita_hamburger_1" min="0" value="0">
        </div>

        <!-- Secondo hamburger -->
        <div class="hamburger-card animate__animated animate__fadeInRight ">
            <img src="./hamb_1.jpg" alt="Hamburger Classico - Hamburger 2">
            <h2>Hamburger Classico</h2>
            <p>Prezzo: €6.99</p>
            <label for="quantita_hamburger_2">Quantità:</label>
            <input type="number" name="quantita_hamburger_2" id="quantita_hamburger_2" min="0" value="0">
        </div>
<!-- etc... -->
        <!-- Pulsante di submit per procedere -->
        <input type="submit" value="AVANTI" style="font-size: 60px;" class=" animate__animated animate__bounceInUp">
    </form>
</body>
   ``` 
<br>

* Una div con classe *"title"* racchiude il titolo principale "SCEGLI L'HAMBURGER".:small_red_triangle:
  
* Il titolo è animato con l'effetto "lightSpeedInRight" di "animate.css".:small_red_triangle:
  
* **Form per la Selezione degli Hamburger:** Utilizza un form con metodo "post" e azione *"./process_hamburger.php"* per elaborare la selezione degli Hamburger.:small_red_triangle:
  
**Cards per degli Hamburger:** Ogni bevanda è presentata tramite una "card" con classe "hamburger-card". Gli hamburger sono animati con effetti di entrata come *"fadeInLeft"* e *"fadeInRight"* di *"animate.css"*.:small_red_triangle:

* **Ogni card contiene:** Un'immagine rappresentativa degli hamburger. Un titolo identificativo degli hamburger *(es. "Hamburger del Mese")*. Il prezzo dell'hamburger. Un campo di input numerico per specificare la quantità desiderata.:small_red_triangle:
  
* **Pulsante di Submit:** Il form include un pulsante di submit con etichetta *"AVANTI"*. Il pulsante è stilizzato con una dimensione del carattere di 60px e animato con *"bounceInUp"* di *"animate.css"*.:small_red_triangle:
<br>

## ***process_hamburger.php*** (SCELTA HAMBURGER ~GM) :grinning:

<br>

```PHP
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

   ```
<br>

* La funzione ***session_start()*** inizia una sessione PHP. Le sessioni sono una forma di archiviazione temporanea di dati lato **server** associata a un utente specifico durante la sua visita al sito.:small_red_triangle:

* **Recupero dei dati delle bevande:** Se la richiesta è di tipo *POST*, nel codice si inizializzano delle variabile per controllare la quantità dei diversi hamburger.:small_red_triangle:
  
* **Funzione isset():** Con l'utilizzo della funziona ***isset()*** riusciamo a controllare se la variabile passata tramite la sessione abbia un valore, se è vero gli assegna il valore della variabile, altrimenti assegna il valore 0 alla variabile.:small_red_triangle:

 * **Reindirizzamento alla home:** Con le funzioni header() e exit() si riesce a reindirizzare, dopo il controllo delle variabili, alla pagina home senza che l'utente si accorga dell'elaborazione dei dati.:small_red_triangle:
   
   <br>
   
<h2 id="Form-Dati">index.html <i>(FORM PER OFFERTE ~GM)</i> :bookmark:  <a href="#indice-top">Torna all'indice</a></h2>
<br>

#### :bangbang: HEAD :bangbang:
La sezione :heavy_exclamation_mark: "**head**" :heavy_exclamation_mark: in un documento HTML contiene i metadati e le informazioni di importanza generale per la pagina web. Di seguito, una breve descrizione degli elementi presenti nella "**head**".

  <br>
  
```HTML
<head>
    <!-- Metadati del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Collegamento ai fogli di stile -->
    <link rel="stylesheet" href="./style-off.css">
    <!-- Titolo della pagina -->
    <title>FORM PER OFFERTE ~GM</title>
</head>
   ```
<br>

* Codifica dei Caratteri: UTF-8 per supportare un vasto insieme di caratteri e lingue.:small_red_triangle:

* Viewport Mobile: Ottimizza la visualizzazione su dispositivi mobili con una larghezza di viewport basata sul dispositivo e uno zoom iniziale di 1.0.:small_red_triangle:

* Foglio di Stile Locale: Collegamento al foglio di stile locale ".style-off.css" per la formattazione della pagina.:small_red_triangle:

* Titolo della Pagina: "FORM PER OFFERTE ~GM" visualizzato nella barra del titolo del browser.:small_red_triangle:
<br><br>
#### :bangbang: BODY :bangbang:
La sezione :heavy_exclamation_mark: "**body**" :heavy_exclamation_mark: in un documento HTML contiene il contenuto effettivo visualizzato sulla pagina web. Ecco una breve descrizione degli elementi tipicamente presenti nella sezione "**body**":
<br>

```HTML
<body>
   <!-- Sezione del titolo -->
    <h3 style="text-align: center;">Scrivi i tuoi dati per ricevere offerte impredibili tramite email.</h3>

 <!-- Form per l'inserimento dei propri dati -->
   <form method="post" action="inv-email.php">
        <!-- Campo Nome -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>

        <!-- Campo Cognome -->
        <label for="cognome">Cognome:</label>
        <input type="text" id="cognome" name="cognome" required>
        <br>

<!-- etc... -->

        <!-- Pulsante di invio del form -->
        <input type="submit" value="Invia">
    </form>

</body>
   ``` 
<br>

* Un titolo con il tag ***h3*** centrato che fornisce una breve istruzione agli utenti sulla finalità del form.".:small_red_triangle:
* Un form HTML con il metodo di invio **POST** e l'azione "inv-email.php". Include campi di input per il nome, cognome, età, email e una selezione del sesso tramite radio button.:small_red_triangle:
  * ***Nome:*** Input per il nome dell'utente.:heavy_check_mark:
  * ***Cognome:*** Input per il cognome dell'utente.:heavy_check_mark:
  * ***Età:*** Input numerico per l'età dell'utente.:heavy_check_mark:
  * ***Email:*** Input per l'indirizzo email dell'utente.:heavy_check_mark:
  * ***Sesso:*** Selezione del sesso tramite radio button (Maschio, Femmina, Altro).:heavy_check_mark:
  * ***Pulsante di Invio:*** Un pulsante di tipo submit che consente agli utenti di inviare il form.:heavy_check_mark:
* Alla ***fine*** si inviano tutti i dati a un'altra pagina PHP.:small_red_triangle:
<br>

```PHP
<body>
    <!-- Intestazione della pagina -->
    <h1 class="h1-pag">CONFERMA EMAIL</h1>

    <!-- Contenitore principale -->
    <div class="container-pag">
        <?php
        // Verifica se la richiesta è di tipo POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recupera l'indirizzo email dalla richiesta POST
            $email = $_POST["email"];
            
            // Messaggio di conferma con l'indirizzo email ricevuto
            echo '<p style="text-decoration:none; color: green; font-weight: bold;">Dati inviati correttamente, riceverai presto una risposta su: '. $email. '</p>';
        } else {
            // Messaggio di errore se il modulo non è stato inviato correttamente
            echo "<p>Errore nell'invio del modulo.</p>";
        }
        ?>
        
        <!-- Link per tornare alla home -->
        <br>
        <a href="../index.html" class="button-pag">Clicca per tornare alla home</a>
    </div>
</body>

   ``` 
<br>

* **Contenitore Principale:** Una div con la classe "container-pag" che racchiude il contenuto principale della pagina.:small_red_triangle:

* **PHP per la Gestione del Modulo POST:** Un blocco di ***PHP*** verifica se la richiesta è di tipo **POST**. Se è così, recupera l'indirizzo email inviato dal modulo POST e mostra un messaggio di conferma con l'indirizzo email ricevuto. *In caso di errore* nell'invio del modulo, viene visualizzato un *messaggio di errore.*:small_red_triangle:

* **Link per Tornare alla Home:** Un link che reindirizza alla pagina principale (index.html) con il testo *"Clicca per tornare alla home".*:small_red_triangle:
