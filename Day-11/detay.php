<?php
require_once 'data.php';
 //İlk olarak get ile gelmiş indis değerine göre ekrana o indisin value larını yazdıracağız.
 if ( !isset($_GET['indis']) ){
     die("Böyle bir eleman yok");
 }else{
     $id=$_GET['indis'];
     $kontrol = true;
 }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Detay Listesi</title>
 </head>
 <body>
    <?php if($kontrol):?>
        <h1><?=$programlamaDilleri[$id]['isim']?></h1>
        <h3>Bilgisayarın <span style="color:red"><?=$programlamaDilleri[$id]['yer']?></span>'ünde çalışıyor </h3>
        <a href="action.php?action=update&indis=<?=$id?>">Güncelle</a>
        <a href="action.php?action=delete&indis=<?=$id?>" onclick="return confirm('Silmek istediğinize emin misiniz ?');">Sil</a>
    <?php endif;?>
 </body>
 </html>