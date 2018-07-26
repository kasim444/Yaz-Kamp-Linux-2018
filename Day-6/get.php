<?php
//Süper globeller php ye yeni bir talep geldiğinde siz farkında olmadan oluşturulan ve bütün etki alanlarından(scope) erişilibilen değişkenlerdir.
$isim= $_GET['isim'];
$soyisim=$_GET['soyisim'];
 echo "Selam. Hoşgeldin " . $isim . " " . $soyisim;