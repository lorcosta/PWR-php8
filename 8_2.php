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
        if (empty($_REQUEST["num1"])) {
          echo "<p>Errore: primo numero non ricevuto</p>";
        }else if (empty($_REQUEST["num2"])) {
          echo "<p>Errore: secondo numero non ricevuto</p>";
        } else {
          $num1=$_REQUEST["num1"];
          $num2=$_REQUEST["num2"];
          echo "<p>Somma: $num1+$num2=".($num1+$num2)."</p>";
        }
        echo "<p><a href='8_2.html'>Torna alla pagina iniziale</a></p>";
       ?>
  </body>
</html>
