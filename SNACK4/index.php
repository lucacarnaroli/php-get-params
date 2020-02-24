<!-- //Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<!-- https://pastebin.com/CkX3680A. -->
<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      .grey{
        background-color: grey;
      }
      .green{
        background-color: green;
      }
    </style>
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <div class='grey'>
      <?php
        
       ?>
    </div>
    <div class='green'>

    </div>
  </body>
</html>
