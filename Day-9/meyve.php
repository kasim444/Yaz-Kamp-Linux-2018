<?php 
 require_once "data2.php";
 $meyve = $meyveler[(int)$_GET['id']];
 ?>

 <!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Meyve Detay</title>
 </head>
 <body>
     <h1>Meyve : </h1>
     <p><?=$meyve['meyve'];?></p>
     <a href="index.php">Ana Sayfaya Dön</a>
 </body>
 </html>