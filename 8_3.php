<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 8_3</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <?php
        if (empty($_REQUEST["numero"])) {
          echo "<p>Errore: campo scelto non ricevuto</p>";
        } else {
          $num=$_REQUEST["numero"];
          echo "<table><th>Numero scelto</th><th>Quadrato</th><th>Cubo</th>";
          for($i=1;$i<=$num;$i++){
            echo "<tr><td>$i</td><td>".($i*$i)."</td><td>".($i*$i*$i)."</td></tr>";
          }
          echo "</table>";
        }
        echo "<p><a href='8_3.html'>Torna alla pagina iniziale</a></p>";
       ?>
  </body>
</html>
