<?php

$message= "PHP Badwords";

var_dump($_GET);

$paragraph= "$_GET[paragraph]";
$swear_word= "$_GET[swear_word]"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1><?php echo $message ?></h1>

    <form action="" method="get">
        <textarea name="paragraph" placeholder="Inserisci un paragrafo" cols="30" rows="10"></textarea>
        <input type="text" name="swear_word" placeholder="Inserisci il tuo insulto peggiore">
        <button type="submit">Clicca per inviare</button>
    </form>

    <p><?php echo $paragraph ?></p>
    <span>Il paragrafo è lungo <?php echo str_word_count($paragraph) ?> parole</span>
    <p><?php echo $swear_word ?></p>
</body>
</html>