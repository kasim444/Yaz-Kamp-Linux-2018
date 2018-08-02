<?php
 //json_encode($m); bir değişkeni(arrayde olabilir) json türüne dönüştürmeye yarıyor
 //json_decode($d,true);
 $meyveler = array("elma","armut");
 $meyvelerJson = json_encode($meyveler);
 echo "Meyveler dizisi(var_dumplı hali) = " ; 
 var_dump($meyveler);

 echo "<hr>";

 echo "Meyveler dizisini json'a çevirip ekrana echo ile yazdırılırsa = " . $meyvelerJson . "<br>";

 echo "<hr>";

 echo "meyvelerJson değişkenin var dumplı hali(var_dumplı hali) = ";
 var_dump($meyvelerJson);

 echo "<hr>";
 $meyvelerDecode=json_decode($meyvelerJson,true);
 var_dump($meyvelerDecode); 