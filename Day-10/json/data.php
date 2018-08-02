<?php
$myClass = [
    123 => [
        "isim" => "Kasim",
        "soyisim" => "ŞEN",
        "yaş" => 25,
        "boy" => 1.80,
    ],
    124 => [
        "isim" => "Halit",
        "soyisim" => "KOCAÖZ",
        "yaş" => 23,
        "boy" => 1.70,
    ],
    125 => [
        "isim" => "Ulaş Deniz",
        "soyisim" => "ÇAKMAZEL",
        "yaş" => 22,
        "boy" => 1.73,
    ],
    126 => [
        "isim" => "Akın",
        "soyisim" => "DEMİR",
        "yaş" => 24,
        "boy" => 1.78,
    ],
    127 => [
        "isim" => "Kadir",
        "soyisim" => "BELKUYU",
        "yaş" => 24,
        "boy" => 1.79,
    ],
    128 => [
        "isim" => "Furkan",
        "soyisim" => "SAKAL",
        "yaş" => 22,
        "boy" => 1.69,
    ],
    129 => [
        "isim" => "Kaan Anıl",
        "soyisim" => "SAKALLI",
        "yaş" => 20,
        "boy" => 1.68,
    ],
    130 => [
        "isim" => "Emre",
        "soyisim" => "ÇAKMAK",
        "yaş" => 23,
        "boy" => 1.72,
    ],
    131 => [
        "isim" => "Faruk",
        "soyisim" => "BALTA",
        "yaş" => 26,
        "boy" => 1.83,
    ],
    132 => [
        "isim" => "Ertuğrul",
        "soyisim" => "TÜRKÖZÜ",
        "yaş" => 25,
        "boy" => 1.74,
    ],
    133 => [
        "isim" => "Mahmut",
        "soyisim" => "TUNCER",
        "yaş" => 44,
        "boy" => 1.67,
    ],
    134 => [
        "isim" => "Micheal",
        "soyisim" => "JACKSON",
        "yaş" => 34,
        "boy" => 1.73,
    ],
    135 => [
        "isim" => "Will",
        "soyisim" => "SMITH",
        "yaş" => 37,
        "boy" => 1.84,
    ],
    136 => [
        "isim" => "Deniz",
        "soyisim" => "KADİR",
        "yaş" => 25,
        "boy" => 1.80,
    ],
    137 => [
        "isim" => "Ali",
        "soyisim" => "ERKOÇ",
        "yaş" => 24,
        "boy" => 1.75,
    ],
    138 => [
        "isim" => "Süleyman",
        "soyisim" => "ERKOÇ",
        "yaş" => 22,
        "boy" => 1.83,
    ],
    139 => [
        "isim" => "Ufuk",
        "soyisim" => "BAŞGÖZ",
        "yaş" => 29,
        "boy" => 1.84,
    ],
    140 => [
        "isim" => "Halil",
        "soyisim" => "BAŞGÖZ",
        "yaş" => 30,
        "boy" => 1.85,
    ],
    141 => [
        "isim" => "Mert",
        "soyisim" => "BAŞGÖZ",
        "yaş" => 21,
        "boy" => 1.85,
    ],
];

$myClassJson = json_encode($myClass);

echo $myClassJson;
$geriDonen = '
{"123":{"isim":"Kasim","soyisim":"\u015eEN","ya\u015f":25,"boy":1.8},"124":{"isim":"Halit","soyisim":"KOCA\u00d6Z","ya\u015f":23,"boy":1.7},"125":{"isim":"Ula\u015f Deniz","soyisim":"\u00c7AKMAZEL","ya\u015f":22,"boy":1.73},"126":{"isim":"Ak\u0131n","soyisim":"DEM\u0130R","ya\u015f":24,"boy":1.78},"127":{"isim":"Kadir","soyisim":"BELKUYU","ya\u015f":24,"boy":1.79},"128":{"isim":"Furkan","soyisim":"SAKAL","ya\u015f":22,"boy":1.69},"129":{"isim":"Kaan An\u0131l","soyisim":"SAKALLI","ya\u015f":20,"boy":1.68},"130":{"isim":"Emre","soyisim":"\u00c7AKMAK","ya\u015f":23,"boy":1.72},"131":{"isim":"Faruk","soyisim":"BALTA","ya\u015f":26,"boy":1.83},"132":{"isim":"Ertu\u011frul","soyisim":"T\u00dcRK\u00d6Z\u00dc","ya\u015f":25,"boy":1.74},"133":{"isim":"Mahmut","soyisim":"TUNCER","ya\u015f":44,"boy":1.67},"134":{"isim":"Micheal","soyisim":"JACKSON","ya\u015f":34,"boy":1.73},"135":{"isim":"Will","soyisim":"SMITH","ya\u015f":37,"boy":1.84},"136":{"isim":"Deniz","soyisim":"KAD\u0130R","ya\u015f":25,"boy":1.8},"137":{"isim":"Ali","soyisim":"ERKO\u00c7","ya\u015f":24,"boy":1.75},"138":{"isim":"S\u00fcleyman","soyisim":"ERKO\u00c7","ya\u015f":22,"boy":1.83},"139":{"isim":"Ufuk","soyisim":"BA\u015eG\u00d6Z","ya\u015f":29,"boy":1.84},"140":{"isim":"Halil","soyisim":"BA\u015eG\u00d6Z","ya\u015f":30,"boy":1.85},"141":{"isim":"Mert","soyisim":"BA\u015eG\u00d6Z","ya\u015f":21,"boy":1.85}}';
$geriDonus = json_decode($geriDonen); 
echo "<pre>";
var_dump($geriDonen);