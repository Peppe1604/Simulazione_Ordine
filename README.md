# :diamond_shape_with_a_dot_inside: Simulazione Ordine :diamond_shape_with_a_dot_inside:

Benvenuto nel repository del progetto Simulazione Ordine. Questo progetto offre una piattaforma di simulazione interattiva per la creazione di ordini personalizzati su un sito web. L'obiettivo principale è fornire agli sviluppatori e agli utenti interessati uno strumento flessibile e intuitivo per comprendere il processo di ordinazione online.

## Descrizione :loudspeaker:

Il progetto Simulazione Ordine è progettato per offrire un'esperienza di simulazione avanzata e coinvolgente. Per ulteriori dettagli sulla sua implementazione e le funzionalità offerte, consulta la sezione [Spiegazione Codice](#Spiegazione-del-Codice).

## Contatti
- Instagram: _giuseppemaglione_
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
Contiene un pulsante di conferma dell'ordine.<br>
