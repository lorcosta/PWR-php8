<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 8_1</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <?php
        if (!empty($_REQUEST["testo"])) {
          echo "<p>Testo ricevuto!</p>";
          echo "<p>$_REQUEST["testo"] </p>";
        }else {
          echo "<p> Testo non ricevuto, qualcosa è andato storto</p>";
        }
       ?>
  </body>
</html>
