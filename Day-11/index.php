<?php
 // İlk olarak data.php deki verileri buraya çekmeliyiz.
 require_once "data.php";

 //Ardından dizimizdeki başlıkları ekrana bastırtmalıyız.
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listeleme Ekranı</title>
</head>
<body>
<h1>Programlama Dilleri</h1>
    <ul>
    <?php foreach( $programlamaDilleri as $id => $diller ): ?>
        <li><a href="detay.php?indis=<?=$id?>"><?=$diller["isim"]?></a></li>
    <?php endforeach; ?>
    </ul>
    <a href="action.php?action=yeni">Yeni Dil Ekle</a>
</body>
</html>