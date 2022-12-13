<?php

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt maiores, laudantium, error nobis suscipit mollitia alias quibusdam qui laborum commodi molestias assumenda sunt quas aliquid eos voluptatem fuga blanditiis a.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt maiores, laudantium, error nobis suscipit mollitia alias quibusdam qui laborum commodi molestias assumenda sunt quas aliquid eos voluptatem fuga blanditiis a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt maiores, laudantium, error nobis suscipit mollitia alias quibusdam qui laborum commodi molestias assumenda sunt quas aliquid eos voluptatem fuga blanditiis a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt maiores, laudantium, error nobis suscipit mollitia alias quibusdam qui laborum commodi molestias assumenda sunt quas aliquid eos voluptatem fuga blanditiis a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt maiores, laudantium, error nobis suscipit mollitia alias quibusdam qui laborum commodi molestias assumenda sunt quas aliquid eos voluptatem fuga blanditiis a.';


$bad_word = $_GET['badword'];

$text_2 = str_replace( $bad_word, "***" , $text)

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>la lunghezza del testo è:<?php echo strlen($text)?></h1>
    <p><?php echo $text; ?></p>

    <h1>la lunghezza del testo è:<?php echo strlen($text_2)?></h1>
    <p><?php echo $text_2; ?></p>
  </body>
</html>
