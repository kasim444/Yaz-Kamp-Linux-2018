<?php
//Kişiden kolon sayısı al


 $oynanacakKolonSayisi = 5 ;
 $oynanmisKolonlar = [];

 function kolonYarat(){
     $kolon = [];
     do{
        $yeniEleman = rand(1,49); //1 ila 49 arasında Random bir integer sayı ürettik
        if ( !in_array($yeniEleman,$kolon)) $kolon[]=$yeniEleman;
     }while(count($kolon)<6);//While ile yapmamızın amacı kolonda aynı sayı denk gelirse ise while
     sort($kolon);
     return $kolon ;
 }

 for ($i=0; $i<$oynanacakKolonSayisi; $i++){
     $oynanmisKolonlar[] =kolonYarat();
 }

 echo "<pre>";
 var_dump($oynanmisKolonlar);
 echo "</pre><hr>";

 function tkl($oynanmisKolonlar){
     echo "<ul>";
    foreach ($oynanmisKolonlar as $key => $value) {
        if (is_array($value)){
        echo "<li>" . $sayac . " Kolon";
        tkl($value);
        echo "</li>";
        }else{
        echo "<li>";
        echo $value . "</li>";
        }
    }
    echo "</ul>";
 }
 tkl($oynanmisKolonlar);