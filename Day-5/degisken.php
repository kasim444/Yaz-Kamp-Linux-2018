<?php

// Boolean - True-False
// NULL
// Integer - Tam Sayılar
//Float -Ondalık Sayılar
//String - Metin
//Array - Dizi
//Object - Nesne
//Resourse - Kaynak(dış kaynaklar, MySql'den alınan yanıt gibi )
//iterator

//var_dump($hobileri); bir diziyi ekrana yazdırmak istersek bu fonksiyonu kullanmaktayız.
$ogrenciMi = true;
$maas = null;
$yas = 19;
$kardesininYasi = 4.5;
$isim = "Kasim";
$hobileri = ["Kitap Okumak","Bisiklet ile takılmak", "Sinema"];

echo $isim;
echo "<hr>";
$isim = "Uğur ARICI";
echo $isim;
echo "<hr>";
var_dump($hobileri);
echo "<hr>";
echo 1+2;
echo "<hr>";
$sacmaBirToplam ="2 ile toplam" +  5 ;
echo "Saçma bir toplama işlemi = " + $sacmaBirToplam;
echo "<hr>";

$yas++;
echo $yas;
echo "<hr>";
$yas;
echo $yas;
echo "<hr>";
$meyveler = array('karpuz','erik','çilek','muz','kiraz');
var_dump($meyveler);
echo "<hr>";
$sebzeler = ['prasa','brokolü','ıspanak','fasulye'];
var_dump($sebzeler);
echo "<hr>";
echo($sebzeler[0]);
echo "<hr>";
$sebzeler[4]='kereviz';
echo ($sebzeler[4]);
echo "<hr>";
var_dump($sebzeler);
echo "<hr>";
$sebzeler[4]="X";
echo $sebzeler[4];
echo "<hr>";
echo "Hello";
echo "<hr>";
echo "<pre>";
var_dump($ogrenciMi);
echo"</pre>";

echo "<hr>";
echo"<pre>";
var_dump($kardesininYasi);
echo "</pre>";

echo "<hr>";
$sinifinAdi = "#OYK2016 PHP Sınıfı";
$veri = "2233";
(int)$veri; //Typecasting sadece o anlık kullanım için veri tipi dönüşümü olur.
echo"<pre>";
var_dump($sinifinAdi);
echo "</pre>";
echo "<hr>";
$katilimciHobileri = array ("Konuşmak","Yemek yemek");
echo "<pre>";
var_dump($katilimciHobileri);
echo"</pre>";
echo "<hr>";
$katilimciOkullari = [
    "isim" => "Kasim ŞEN",
    "okul_ismi" => "ege üniversitesi",
    "sinif" => 2
];
echo $katilimciOkullari['sinif'];


echo "<hr>";

$katilim = [
    "ilkokul" => [
        "isim" => "Kasim",
        "soyisim" => "ŞEN",
        "diplomoNotu" => 84.5
    ],
    "lise" => "Halit",
    "universite" => "Ege"
];

echo $katilim['ilkokul']['isim'] . "<hr>";

echo "<pre>" . var_dump($katilim) . "</pre>";

echo "<hr>";
echo "<pre>";
var_dump($katilim);
echo "</pre>";

echo "<hr>";

$objeTipindeKatilim = (object)$katilim;

echo "<pre>";
var_dump($objeTipindeKatilim);
echo "</pre>";

echo "<hr>";

// echo $objeTipindeKatilim->ilkokul->isim ;