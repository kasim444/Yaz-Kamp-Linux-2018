<?php
 
 // Kişiye bu bilgilerin saklanması istenip istenmediğini sorar. Eğer bu bilgilerin tutulmasına istiyor ise data.json'a tc numarası ile kaydı tutarız. 
 
 // Data.json bu bilgileri kayıt etmek için dizi indisi olarak tc si ni valuesu olarak ise isim,soyisim,kazanan kolonları, kişinin oynadığı kolonları, tutan sayıları ve son olarak kişinin oynadığı zamana göre bunları bir dizi içerisinde saklayarak data.json'a kayıt ederiz.
 
 //Kolon oluşturma fonksiyonu tamamdır.
 require_once('functions.php');
 

 //Kullanıcının girdiği kolon sayısı kadar kolonları oluşturup ekrana yazdırtma işlemini yapalım.
 
 if( isset($_GET['kolonSayisi']) && $_GET['kolonSayisi']<=10 ){
     $kolonlariGoster=true;
     $kolonSayisi = (int) $_GET['kolonSayisi'];
     //Function.php'den girilen kolon sayısı kadar kolon oluşturulup geri döndürüldü.
     $olusturulanKolonlar = kolonlariOlustur($oynananKolonlar,$kolonSayisi);
     $sonuc = kolonOlustur();
 }else{
     $kolonlariGoster=false;
 }

 ?>

 <!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Sayısal Loto</title>
     <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 <!--  Kazanan sayılar ile kişinin oynadığı kolonlar ekrana basılır. -->
     <!-- Eğer Get ile kolon sayısı girilmedi ise form gösterilip değer beklenecek. --> 
     <?php if( !$kolonlariGoster ): ?>
     <div class="container">
     <h1>Sayısal Loto</h1>
     <form method="get">
         <label for="kolonSayisi">Kolon Sayısı</label>
         <input type="number" name="kolonSayisi" min="0" max="10">
         <input type="submit" value="Oyna ve Sonucu Göster">
     </form>
     </div>

     <!-- Eğer Get ile kolon sayısı geldi ise ekrana kolonlar listelenecek. -->
     <?php else: ?>
     <div class="container">
     <h2 >Kazanan Sayılar</h2>
     <?php foreach($sonuc as $value): ?>
      <span class="box win"><?=$value?></span>
     <?php endforeach; ?>
     <h2 class="oynanan">Oynanan Kolonlar</h2>
     <?php foreach($olusturulanKolonlar as $sira => $kolon):  ?>
     <div class="kolon"><?=($sira+1)?>. Kolon
     <?php foreach ($kolon as $key => $value): ?>
     <!-- Eğer value değer kazanan arrayin içerisinde var ise span classına win verdirteceğiz -->
     <div class="box <?php if(in_array($value,$sonuc)) echo 'win'; ?> " > <?=$value?> </div>
     <?php endforeach; ?>
     </div>
     <?php endforeach;?>
     </div>
     <?php endif;?>
 </body>
 </html>