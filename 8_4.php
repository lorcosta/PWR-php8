<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 8_4</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <?php
        if (empty($_REQUEST["prezzo"])) {
          echo "<p>Errore: non hai inserito il prezzo da calcolare</p>";
        } else if(empty($_REQUEST["iva"])){
          echo "<p>Errore: non hai scelto quale regime fiscale utilizzare</p>";
        }else {
          $prezzo=$_REQUEST["prezzo"];
          $iva=(int)$_REQUEST["iva"];
          //printf("%d ",$iva);
          switch ($iva){
            case (4):
              printf("<p>Aggiungendo l'iva del 4% al prezzo di $prezzo, si ottiene %.2f </p>",($prezzo*1.04));
              $tot=$prezzo*1.04;
              echo "<p>Aggiungendo l'iva del 4% al prezzo di $prezzo, si ottiene un totale di $tot </p>";
              break;
            case (10):
              printf("<p>Aggiungendo l'iva del 10% al prezzo di $prezzo, si ottiene %.2f </p>",($prezzo*1.1));
              $tot=$prezzo*1.1;
              echo "<p>Aggiungendo l'iva del 10% al prezzo di $prezzo, si ottiene un totale di $tot </p>";
              break;
            case (22):
              printf("<p>Aggiungendo l'iva del 22% al prezzo di $prezzo, si ottiene %.2f </p>",($prezzo*1.22));
              $tot=$prezzo*1.22;
              echo "<p>Aggiungendo l'iva del 22% al prezzo di $prezzo, si ottiene un totale di $tot </p>";
              break;
            default:
              printf("<p>Errore: qualcosa &egrave andato storto</p>");
              break;
          }
        }
        echo "<p><a href='8_4.html'>Torna alla pagina iniziale</a></p>";
       ?>
  </body>
</html>
