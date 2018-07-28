<?php

//Recursive Functions
 $meyve = array (
     "elma",
     "armut",
     "kel mahmut",
     ['kabaramazsın', 'kel', 'fatma'],
     'sena',
     ['guzel',['sen','çirkin']]
 );

function arrayToList($dizi) {
    echo "<ul>";
    foreach ($dizi as $sonuc):
        echo "<li>";
        if(is_array($sonuc)){
            arrayToList($sonuc);
        }else{
            echo $sonuc;
        }
    echo "</li>";
    endforeach;
    echo "</ul>";
}
arrayToList($meyve);

echo "<hr>";

$lang = ["Türkçe","İngilizce","Fransızca"];
echo "<ul>";
foreach ($lang as $ulus) {
    echo "<li>";
    echo $ulus;
    echo "</li>";
}
echo "</ul>";

echo "<hr>";

$bilSinifi = ["Kasim",
["Ulaş","Halit"],
"ŞEN",
["Mesude","Niyazi"],
"DENİZ",
"KOCAÖZ"
];

function arToList($dizi){
        echo "<ul>";
   foreach ($dizi as $elemanlar):
        echo "<li>";
    if (is_array($elemanlar)):
        arToList($elemanlar);
     else:
        echo $elemanlar;
     endif;
     echo "</li>";
    endforeach;
 echo "</ul>";
}
arToList($bilSinifi);



