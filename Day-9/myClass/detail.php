<?php
 require_once 'data.php';
 $donenIndis = $_GET['no'];
  if (isset($donenIndis) && isset($myClass[$donenIndis]) ){
      $result = true;
  }else{
      $result = false;
  }
 ?>
 <!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>My Class Detail</title>
     <link rel="stylesheet" href="assets/css/style.css">
 </head>
 <body id="detail">
     <main id="main">
         <?php if ( $result ):?>
         <h1>Php Sınıfındaki <?=$myClass[$donenIndis]['isim']; ?> Adlı Öğrencinin Bilgileri</h1>
         <h2><span class="link">İsim </span> : <?=$myClass[$donenIndis]['isim'];?></h2>
         <h2><span class="link">Soyisim </span> : <?=$myClass[$donenIndis]['soyisim'];?></h2>
         <h2><span class="link">Yaş </span> : <?=$myClass[$donenIndis]['yaş'];?></h2>
         <h2><span class="link">Boy </span> : <?=$myClass[$donenIndis]['boy'];?></h2>
         
         <?php else: ?>
         <h2>Php Sınıfında Böyle Bir Öğrenci Yok</h2>
        <?php endif; ?>
     </main>
 </body>
 </html>