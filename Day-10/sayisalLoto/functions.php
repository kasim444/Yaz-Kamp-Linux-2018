<?php
 // İlk olarak kullanıcının girdiği adet kadar rastgele 6 adet 1 ile 49 arasında rakam oluşturulup kolon veya kolonlar yaratılır.
 
 // Ardından sonuçların yer aldığı 6 adet rakamın old kolon oluşturulur.
 
 // Kazanan rakamlar ile kişinin oynadığı kolondaki sayılar karşılaştırılır.

 // Doğru tutan rakamların arka-planı yeşil değil ise kırmızı olur.


 $oynananKolonlar= array();
 //$oynananKolon[]="Kasim";
 


 //Kolon Oluşturma Fonksiyonu
 function kolonOlustur(){
     $kolon = array();
     do{
         $randomSayi = rand(1,49);
         if ( !in_array($randomSayi, $kolon) ) $kolon[]= $randomSayi;
     } while ( count($kolon)<6 );
     sort($kolon);
     return $kolon;
 }


 //Kolonları Oluşturma Fonksiyonu
 function kolonlariOlustur($dizi,$kolonsayisi){
     for ($i = 0; $i < $kolonsayisi; $i++) {
         $kolon=kolonOlustur();
        $dizi[] = $kolon;
    }
    return $dizi;
 }
 
 
//  $gercekSonuclar = kolonOlustur();

//  echo "<pre>";
//  var_dump($gercekSonuclar);
//  echo "</pre>";

//  echo "<hr>";

//  foreach ($gercekSonuclar as $key => $value) {
//      echo "<span> $value </span>";
//  }
