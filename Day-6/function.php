<?php
 echo selamVer();
 function selamVer(){
     return "Selam<br>";
 }
 echo "<hr>";
$isim ="Halit"; //Küresel etki alanı 
 function ismeSelamVer($isim="Uğur"){ // Fonksiyonun etki alanındaki $isim
     return "Selam etki alanı fonksiyondaki isim = $isim<br>Selam etki alanı fonksiyondaki isim = " . $GLOBALS['isim'] . "<br>";
 }
echo ismeSelamVer("Uğur");
 echo "<hr>";
echo ismeSelamVer($isim);
//Fonksiyon scope'ları genel etki alanları ile küresel etki alanı ile kesişmez. Bir fonksiyonun parametre olarak sahip olduğu değişken adı sadece o fonksiyonun etki alanında kullanılabilir. Küresel etki alanında $isim değişken olsa dahi bir fonksiyonu tanımlarken $isim bir parametre beklediğimizi belirtebilir ve fonk içinde sadece orada geçerli olacak şekilde bu değişken adını kullanabiliriz.