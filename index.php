<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <!--DESCRIZIONE:
    Creare una variabile con assegnato un testo per popolare un paragrafo.
    Visualizzare a schermo il paragrafo.
    Visualizzare a schermo la lunghezza di testo del paragrafo.
    Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi,
    ottenere il suo valore con GET in PHP e sostituire ogni ricorrenza di questa parola, all'interno del testo creato da voi sopra, con tre *.
    Stampare a schermo il paragrafo con il testo censurato.-->
    <!--INTRO PHP-->
    <?php 
    $text = 'Ciao come va';
    $length = strlen($text);
    ?>
   <header>
    <h1>Benvenuto</h1>
    <p>Welcome is text normal <?php echo $text; ?> and <?php echo $length; ?></p>
   </header>

    <?php
     $badword_text = $_GET['badword'];
    ?>

    <!--Passaggio di dati con metodo GET -->
    <h3>Ciao <?php echo $badword_text; ?></h3>
     
</body>
</html>