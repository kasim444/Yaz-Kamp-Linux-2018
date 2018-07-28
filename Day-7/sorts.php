<?php
 //Öğrencilerin ismi ve notu eşleştirilmiş olmalı.İsmi göre a-z, z-a, nota göre en büyük, en küçük. bilgi kısmında sınıf ortalaması ve sıtandart sapmasını istiyor.

 $ogrenciBilgileri = array (
 "Kasim" =>90,
 "Halit"=>80,
 "Ulaş"=>70,
 "Serhat"=>70,
 "Akın"=>75,
 "Uğur"=>100,
 "Müge"=>80
);

//Öğrenci Bilgileri
$min = min($ogrenciBilgileri);
$max = max($ogrenciBilgileri);

//Standart Sapma Fonksiyonu
function standard_deviation($aValues)
{
    $fMean = array_sum($aValues) / count($aValues);
    //print_r($fMean);
    $fVariance = 0.0;
    foreach ($aValues as $i) {
        $fVariance += pow($i - $fMean, 2);

    }
    $size = count($aValues) - 1;
    return (float) sqrt($fVariance) / sqrt($size);
}
;

echo "<h1>Öğrenci Bilgileri Hakkında</h1>
<ul>
<li><strong>En yüksek not =</strong> $max</li>
<li><strong>En düşük not =</strong> $min</li>
<li><strong>Sınıfın standart sapması =</strong> " .standard_deviation($ogrenciBilgileri) . "</li>
</ul>";

if (isset($_GET['isim'])) {
    isimSirala($ogrenciBilgileri);
}
if (isset($_GET['isimTers'])) {
    isimSiralaTers($ogrenciBilgileri);
}
if (isset($_GET['not'])) {
    notSirala($ogrenciBilgileri);
}
if (isset($_GET['notTers'])) {
    notSiralaTers($ogrenciBilgileri);
}


//İsme Göre Sıralama Fonksiyonu
 function isimSirala($dizi) {
    ksort($dizi);
    echo "<h1>İsme Göre Sıralama(A-Z)</h1><ul>";
    foreach ($dizi as $key => $value) {
        echo "<li>";
        echo "<b> İsim = </b>". $key . " <b>Notu = </b>" . $value;
        echo "</li>";
    }
    echo "</ul>";
 }

 //İsme Göre Tersten Sıralama Fonksiyonu
 function isimSiralaTers($dizi)
{
    krsort($dizi);
    echo "<h1>İsme Göre Tersten Sıralama(Z-A)</h1><ul>";
    foreach ($dizi as $key => $value) {
        echo "<li>";
        echo "<b> İsim = </b>" . $key . " <b>Notu = </b>" . $value;
        echo "</li>";
    }
    echo "</ul>";
}

//Nota Göre Sıralama Fonksiyonu
function notSirala($dizi)
{
    asort($dizi);
    echo "<h1>Nota Göre Sıralama(Küçükten-Büyüğe)</h1><ul>";
    foreach ($dizi as $key => $value) {
        echo "<li>";
        echo "<b> İsim = </b>" . $key . " <b>Notu = </b>" . $value;
        echo "</li>";
    }
    echo "</ul>";
}

//Nota Göre Tersten Sıralama Fonksiyonu
function notSiralaTers($dizi)
{
    arsort($dizi);
    echo "<h1>Nota Göre Sıralama(Büyükten-Küçüğe)</h1><ul>";
    foreach ($dizi as $key => $value) {
        echo "<li>";
        echo "<b> İsim = </b>" . $key . " <b>Notu = </b>" . $value;
        echo "</li>";
    }
    echo "</ul>";
}


?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="sorts.php" method="get">
    <input type="submit" name="isim" value="İsme Göre Sıralama(A-Z)"/>
    <input type="submit" name="isimTers" value="İsme Göre Tersten Sıralama(Z-A)"/>
    <input type="submit" name="not" value="Nota Göre Sıralama(K-B)"/>
    <input type="submit" name="notTers" value="Nota Göre Sıralama(B-K)"/>
</form>
</body>
</html>