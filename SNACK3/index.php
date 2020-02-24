<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un nuovo paragrafo. -->

<?php
  $text = "Dall’arrivo di nuove blockchain a quello della cripto-filantropia, con le startup del settore diventate ricche e pronte a reinvestire i loro utili in modo solidale. Sono alcune delle previsioni di cosa avverrà nel 2020 nel settore delle criptovalute secondo Brian Armstrong, amministratore delegato di Coinbase, uno dei maggiori scambi di criptovalute al mondo. Armostrong ha affidato un dodecalogo al suo blog su Medium, nel quale si lancia in una serie di vaticini, compreso quello che potrebbe succedere se il bitcoin nel 2020 raggiungesse il valore monstre auspicato da alcuni esperti.";
  $paragrafo = explode(".",$text);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <?php
        for ($i=0; $i < count($paragrafo); $i++) {
          echo "<p>$paragrafo[$i]</p>";
      }
      ?>
    </div>

  </body>
</html>
