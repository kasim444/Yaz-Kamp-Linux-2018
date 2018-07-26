<?php
 for($i=0;$i<10;$i++){
     echo $i ."<br>";
 }
 echo "<hr>";
 echo $i;
 echo "<hr>";

//foreach
$yazAylari = ["Haziran", "Temmuz", "Ağustos"];

echo "<h1>Yaz Ayları</h1>";
foreach ($yazAylari as $yazAyi){
    echo $yazAyi . "<br>";
}
echo "<hr>";
echo $yazAyi;
echo "<hr>";

$notlar = array (
    "Uğur" => 99,
    "Ahmet" => 85,
    "Sezer" => 66
);
//Örnek 2
echo "<h1>Notlar</h1>";

foreach ($notlar as $ogrenci => $notlar) {
    echo "<strong>Öğrenci ismi = </strong>" . $ogrenci . ", <strong>Notu =</strong> ". $notlar.".<br>";
}
echo "<hr>";
//Örnek 3
$ogrenciNotlari = array (
    "Uğur" => ["not" => 90],
    "Seda" => ["not" => 80],
    "Mehmet" => ["not" => 70]
);

echo "<pre>";
var_dump($ogrenciNotlari);
echo "</pre>";

echo "<hr>";

foreach ($ogrenciNotlari as $ogrenciAdi => $notBilgisi){
    if($notBilgisi['not']>45):
        $ogrenciNotlari[$ogrenciAdi]['basariliMi'] = true; 
        //!!!!!!!!! Not : Eğer dizide olmayan bir atama yapıyor isek  $notBilgisi['basariliMi] ile yaparsak $ogrenciNotlari adlı dizimize kayıt olmaz.
        //!!!!!!!!! Not : Foreach ile dizimize olmayan bir atama yapacaksak eğer value değeri ile atama yapmamamız gerekiyor. Atama işlemini dizinin nthininci indisi ile atama yapmamız gerek. $ogrenciNotlari[$ogrenciAdi]['basariliMi']
        echo $ogrenciAdi . " - " . $ogrenciNotlari[$ogrenciAdi]['basariliMi'] . "<br>";
    endif;
}

echo "<hr>";

echo "<pre>";
var_dump($ogrenciNotlari);
echo "</pre>";

echo "<hr>";

//do while örneği
do{
    $r = rand(0,1000);
    echo $r. "<br>";
} while ( $r%12 != 0 );

echo "<hr>";
echo "<h1>Break Örneği</h1>";

for ($i=1;$i<5000;$i++){
    echo $i . "<br>";
    if ($i%13==0) break;
}

echo "<hr>";
echo "<h1>Continue Örneği</h1>";
for ($i = 1; $i < 10; $i++) {
    
    if ($i % 2 == 0) continue;
    echo $i . "<br>";

}
