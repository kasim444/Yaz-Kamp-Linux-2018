<?php
  // İlk olarak 19 kişilik sınıf listesinin yer aldığı myClass isminde içinde datalarımızın olduğu bir dizi yaratacağız.

  // İkinci olarak  bu dizimizi index php de require ile çağırıp 19 kişinin İsim ve Soyisimlerinin yer aldığı listeyi ekrana yazdıracağız.
  
  // Son olarak isim soyismine basıldığında detail.php sayfasına gidip ilgili kişinin isim,soyismini, yaşını ve boyunu detay sayfasına listelettireceğiz. 

  // Ayrıca detail.php sayfasında anasayfaya dön linkimizde olacak.

  require_once 'data.php';?>

  <!DOCTYPE html>
  <html lang="tr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>My Class</title>
      <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
      <main>
       <h1>Php Sınıf Listesi</h1>
       <ul>
      <?php foreach ($myClass as $key => $value): ?>
      <li>
       <a href="detail.php?no=<?=$key;?>" class="link">  <?=$value['isim']." ".$value['soyisim']; ?>  </a>
      </li>
       <?php endforeach; ?>
      </ul>
      </main>
  </body>
  </html>