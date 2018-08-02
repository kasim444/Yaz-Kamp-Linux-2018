<?php
//Tüm katılımcılara bu sayfadan erişebilmek için data.json a bu sayfa
require_once 'data.php';

 //Formdan gelen bilgiler yakalanır.

  if ( isset($_POST['tc']) && isset($_POST['isim']) && isset($_POST['soyisim']) && isset($_POST['yaş']) && isset($_POST['boy']) ) {
      $tc = $_POST['tc'];
      $isim = $_POST['isim'];
      $soyisim = $_POST['soyisim'];
      $yaş = $_POST['yaş'];
      $boy = $_POST['boy'];
  }


 //Yeni bir boş katılımcı listesi oluşturulur. $katilimci=[];
 $katilimci=[];

 //Boş katılımcı dizisini formdan gelen bilgilerle doldurucağız.

 $katilimci["isim"]=$isim;
 $katilimci["soyisim"] = $soyisim;
 $katilimci["yaş"] = $yaş;
 $katilimci["boy"]=$boy;

 
 //katilimcilar dizine bu katilimci dizisini yerleştir.
 $data_decodeJson[$tc] = $katilimci;

 //Tüm katılımcılar dizisi jsona çevrilir.
 $yeniJson=json_encode($data_decodeJson);


 //Yeni json degiskenini kaynak veriye eklenir. 
 $dosyaYolu="data.json";
 $dt = fopen($dosyaYolu,"w+");

 if (fwrite($dt,$yeniJson)){
     $result = true;
     fclose($dt);
 }else{
     $result=false;
 }

 //Katılımcı eklendi yada hata mesajı verdirteceğiz.
 //Altına ise anasayfaya dön linki olmalı.

 //posttan gelen tüm verileri daha kodlamaya başlamadan yakalamak için var_dump($_POST)ekrana yazdırıp eğer istediğimiz tüm değişkenler ekrana gelmişse artık kodlamaya başlayabiliriz demektir.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yeni Veri Ekleme Sonuç Sayfası</title>
</head>
<body>
    <?php if($result): ?>
        <h1>Yeni Veri Eklendi</h1>
        <a href="yenikatilimci.php">Yeni Katılım Eklemek İçin Tıklayın</a><br>
        <a href="data.php">Katılımcı Listesini Görüntülemek İçin Tıklayın</a>
    <?php else: ?>
        <h1>Yeni veri eklenirken bir sorun meydana geldi.</h1>
        <a href="yenikatilimci.php">Tekrardan Yeni Katılımcı eklemek için tıklayınız.</a>
    <?php endif; ?>
</body>
</html>