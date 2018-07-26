<?php
class Garson {
    var $isim;
    var $yasi;
    var $iseBaslamaSaati;
    var $istenAyrilmaSaati;
    var $calismaGunleri;
    function menuVer(){
        echo "Buyrun efendim, menümüz.<br>";
    }
    function siparisAl($urun){
        echo $urun." ürününüz için siparişinizi aldım efendim.<br>";
    }
    function teslimEt($urun){
        echo $urun." ürününüz teslim edildi efendim<br>";
    }
}

//$ahmet = new Garson;
//$ahmet->isim = "Kasim";
//$ahmet->yasi = 25;
//$ahmet->iseBaslamaSaati=9;
//$ahmet->istenAyrilmaSaati=5;
//$ahmet->calismaGunleri=["Pazartesi","Salı","Çarşamba","Perşembe","Cuma"];
//$ahmet->menuVer();
//$ahmet->siparisAl("Hamburger");
//$ahmet->teslimEt("Hamburger");

$ahmet = new Garson;
$ahmet->isim ="Mehmet";
$ahmet->yasi=24;
$ahmet->iseBaslamaSaati=9;
$ahmet->istenAyrilmaSaati=17;
$ahmet->calismaGunleri=[0,1,2,3,4,];
echo "<pre>";
var_dump($ahmet);
echo "</pre><hr>";
$musteriGeldiMi = true;
if($musteriGeldiMi){
    $ahmet->menuVer();
}
echo "<hr>";

