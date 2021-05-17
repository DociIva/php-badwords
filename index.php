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
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, 
    eveniet sint quis similique repellat vel debitis rem veniam nostrum perspiciatis corporis perferendis architecto, 
    expedita aut illo. Magni vitae doloremque magnam.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    Debitis dolorem nesciunt inventore autem iusto ipsam repellendus error pariatur assumenda in fuga, repellat, necessitatibus labore ad cum, quod architecto sint. Maxime.' ;
    $length = strlen($text);
    ?>
   <header>
    <h1>Benvenuto</h1>
    <p>Is normal text <?php echo $text; ?> la lunghezza <?php echo $length; ?></p>
   </header>

    <?php
     $badword_text = $_GET['badword'];
     //CAMBIO della parola con str_replace
     $replace = str_replace($badword_text, '***', $text);
    ?>

    <!--Passaggio di dati con metodo GET -->
    <h3>Ciao <?php echo $badword_text; ?></h3>
    <!---stampa text censurato-->
    <p><?php echo$replace; ?></p>

    
    
    
     
</body>
</html>