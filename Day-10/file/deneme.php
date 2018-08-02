<?php

// file_get_contents($dosya_yolu) => bu fonksiyon ile birlikte ilgili dökümandaki tüm verileri string olarak içeriye alabiliyoruz.

//json verisini çekmek için kullanılabilir.


 //$deneme = file_get_contents("deneme.txt");
 //echo $deneme;

 
// file_put_contents($dosya_yolu, $icerik) => bu fonk ile yolu belirtilen dosyaya belirttiğimiz içeriği yazabilir.
//$icerik="Kasim ŞEN";
//file_put_contents("deneme.txt",$icerik);
//echo $deneme;


//fopen("dosyanin_yolu.txt","dosyanın açma modu");
$dosyaYolu = "deneme.txt";

$dt = fopen($dosyaYolu, "r+"); // r+ hem dosyanın okunması hem de yazması için kullanıyoruz.
echo $dt;

echo "<hr>";

var_dump($dt);

echo "<hr>";
// fread(acilmisdosyakaynağı,uzunluğu)
var_dump(fread($dt,filesize($dosyaYolu)));


echo "<hr>";

//fwrite($acilmisdosyakaynağı,$icerik)
var_dump(fwrite($dt,"rickrickrickrickrick"));

echo "<hr>";

//fclose($dosyakaynağı)
fclose($dt);

