<?php
 $ilkSayi= $_GET['ilkSayi'];
 $ikinciSayi = $_GET['ikinciSayi'];
 //Bazı web tarayıcıları adres çubuğundaki veriyi küçük karaktere çevirdiği için
 //adres çubuğundan yolladığımız tüm get verilerini küçük karakterlerle gönderip
 //yakaladığımıza emin olmalıyız.

 echo "<hr>";

 echo "Toplam = " . ($ilkSayi+$ikinciSayi);

 echo "<hr>";

  echo "Çıkarma = " . ($ilkSayi-$ikinciSayi);

 echo "<hr>";

  echo "Çarpım = " . ($ilkSayi*$ikinciSayi);

 echo "<hr>";

 echo "Bölüm = " . ($ilkSayi / $ikinciSayi);

echo "<hr>";

echo "Mod = " . ($ilkSayi % $ikinciSayi);

echo "<hr>";

