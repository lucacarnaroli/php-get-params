<!-- SNACK 1 -->
<!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->
<?php
$password = $_GET["password"];
if ($password == 'Boolean') {
  $class = 'green';
  $messaggio = 'Benvenuto';
}else {
  $class = 'red';
  $messaggio = 'Non autorizzato';
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <style media="screen">
     .green {
       color: green;
     }
     .red {
       color: red;
     }

     </style>
     <link rel="stylesheet" href="style.css">
     <title>snack1</title>
   </head>
   <body>
     <p class=<?php echo $class ?>><?php echo $messaggio ?> </p>
   </body>
 </html>
