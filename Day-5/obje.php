<?php
$katilim = [
    "ilkokul" => [
        "isim" => "Kasim",
        "soyisim" => "ŞEN",
        "diplomoNotu" => 84.5
    ],
    "lise" => "Halit",
    "universite" => "Ege"
];
$objeTipindeKatilim = (object)$katilim;

class Katilimci{
    private $isim;
    var $dogumTarihi;
    var $okuduguOkullari;
    public function setIsım($isim){
        $this->isim = $isim;
    }
}

$birKatilimci = new Katilimci;
$birKatilimci->setIsım("Kasim ŞEN");
$birKatilimci->dogumTarihi = 1996;
$birKatilimci->okuduguOkullari = $objeTipindeKatilim;

echo "<pre>";
var_dump($birKatilimci);
echo "</pre>";

echo "<hr>";

echo $birKatilimci->dogumTarihi;
echo $birKatilimci->isim;
