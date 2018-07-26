<?php
 $ogrencininYasi = 20;
 echo getType($ogrencininYasi);
 settype($ogrencininYasi,"string");
//settype bir değişken üzerinde ki tipini settype ile değiştirebiliyoruz
 echo "<hr>";

 echo getType($ogrencininYasi);
 
echo "<hr>";

 $lolo = (int)"1aa23aasdasd";
 var_dump($lolo);
//()
 echo "<hr>";

 echo $lolo;

 echo "<hr>";

 $a = "b";
 $$a ="c";
 echo $b;


 echo"<hr>";

 $araba = "Mercedes";
 $ev = "Villa";
 echo "Araba Önce : ". $araba;
 echo "<br> Ev önce: ". $ev;

 $yeniVeri = ["degisecek" => "ev","icerik" => "GeceKondu"];
 $degisecek = $yeniVeri['degisecek'];
 $$degisecek = $yeniVeri['icerik'];
 echo "<br>Araba Sonra: " . $araba;
 echo "<br> Ev sonra: ".$ev;

 echo "<hr>";

 $isim = "Uğur";
 $mesaj1 = "Kişinin ismi : $isim" ; //Eğer çift tırnak içerisinde bir değişken yazar isek bu çalışır.
 $mesaj2 = 'Kişinin ismi: '.  $isim ; //Fakat tek tırnak içerisinde değişken yazamıyoruz bunu '.' ile ayırmamız gerekli.
 $mesaj3 = 'Kişinini ismi: $isim'; //Çift tırnak içerisinde değişken kullanabiliyoruz Tek tırnak içerisinde değişken yazamıyoruz.
 echo $mesaj1;
 echo"<hr>";
 echo $mesaj2;
 echo"<hr>";
 echo $mesaj3;
 echo "<hr>";
 



