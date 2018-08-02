<?php require_once 'data2.php'; ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Meyve Listesi</title>
 </head>
 <body>
     <h1>Meyve Listesi</h1>
     <ul>
     <?php  foreach ($meyveler as $key => $meyve) : ?>
        <a href="meyve.php?id=<?=$key?>" > <?=$meyve?> </a><br>
     <?php endforeach; ?>
     </ul>
 </body>
 </html>