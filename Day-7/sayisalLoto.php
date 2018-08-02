<?php
//Kişiden kolon sayısı al
 $oynanacakKolonSayisi=5;

 $oynanmisKolonlar = [];

 //Kolon üretme fonksiyonu
 function kolonYarat(){
     $kolon = [];
     do{
        $yeniEleman = rand(1,49); //1 ila 49 arasında Random bir integer sayı ürettik
        if ( !in_array($yeniEleman,$kolon)) $kolon[]=$yeniEleman;
     }while(count($kolon)<6);//While ile yapmamızın amacı kolonda aynı sayı denk gelirse ise while
     sort($kolon);
     return $kolon ;
 }

 if (isset($_POST['kackolon'])) {
 //Kaç kolon oynandı ise o kadarlık rastegele kolonlar üretildi.
     $oynanacakKolonSayisi = (int) $_POST['kackolon'];
     for ($i = 0; $i < $oynanacakKolonSayisi; $i++) {
         $oynanmisKolonlar[] = kolonYarat();
     }
     $sonucKolonlar = kolonYarat();

     goster($sonucKolonlar);
     
    sonucGoster($oynanmisKolonlar, $sonucKolonlar);

 }





//Oynanan tüm kolonlar ekrana listelendi
 function goster($oynanmisKolonlar){
     echo "<div style='display: inline-block;width: 320px;vertical-align: top'><ul>";
    foreach ($oynanmisKolonlar as $key => $value) {
        if (is_array($value)){
        echo "<li> Kolon" ;
        goster($value);
        }else{
        echo "<ul><li>";
        echo $value . "</li></ul>";
        }
    }
    echo "</li></ul></div>";
 }

 //Sonuçları karşılaştırma
 function sonucGoster($oynanmisKolonlar,$sonucKolonlar){
    $bilinen = [];
    foreach ($oynanmisKolonlar as $oynanmisKolon) {
        $bilinen = array_intersect($oynanmisKolon,$sonucKolonlar);
        echo "Kolondaki tutan " . count($bilinen);
        echo "<pre>";
        var_dump($bilinen);
        echo "</pre>";
        }
    echo "<hr>";
}


//  echo "<h1>Süper Loto Çekiliş Sonuçları</h1>";
// echo "<h4>Kazanan Kolon</h4><pre>";
// goster($sonucKolonlar);
// echo "</pre>";
// echo"<hr>";
// print_r($oynanmisKolonlar);
// print_r($sonucKolonlar);


// echo"<hr>";

// if (in_array($oynanmisKolonlar, $sonucKolonlar)){
//     echo "Tebrikler";
// }else{
//     echo "Malesef, bir daha ki sefere.";
// }
//  echo "<h1>Oynanan Süper Loto Göstergesi</h1>";
//  echo "<pre>";
//  goster($oynanmisKolonlar);
//  echo "</pre>";

 ?>
 <!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Sayısal Loto</title>
 </head>
 <body>
     <h1>Sayısal Loto</h1>
    <form method="post">
        <label for="kackolon">Kaç kolon oynamak istiyorsunuz ?
       <input type="text" name="kackolon">
       </label>
       <button type="submit">Gönder</button>
       <button type="submit" name="sonucGoster">Sonuçları Göster</button>
    </form>

    
    <?php if( count($oynanmisKolonlar)>0 ): ?>
    <hr>
    <?php foreach ($oynanmisKolonlar as $oynanmisKolon): ?>
    <div class="kolon"><h4>Kolon</h4>
        <ul>
    <?php foreach($oynanmisKolon as $eleman): ?>
    <li>
    <span class="tahmin"><?=$eleman?></span>
    </li>
    <?php endforeach; ?>
    </ul>
    </div>
    <?php endforeach; ?>
    <?php  endif; ?>
    <!-- Sonuçları Gösterdiğimiz yer -->
    <!-- Sonuç kolon sayısını gösterdikten sonra oynanan kolon sayısı kadar sonuç kolon içerisinde in array ile sonuçları karşılaştıracağız ve sonuçkolon içerisinde kaç tanesini tuttuğunu karşılaştıracağız. 
    
    Ve kaç tanesi tuttu ise onları bir diziye aktarıp count ile kaç tanesini tuttuğunu ekrana bastıracağız -->

 </body>
 </html>