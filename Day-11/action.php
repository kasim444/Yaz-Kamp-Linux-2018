<?php
require_once 'data.php';
 $pD = $programlamaDilleri;
 

 if ( $_GET['action'] == 'update' ){
     //Update'e tıklandığında
     $indis = $_GET['indis'];
     $kontrol = "update" ;
     
 }elseif ( $_GET['action'] == 'delete') {
     $indis = $_GET['indis'];
     unset($pD[$indis]);
     $newJson = json_encode($pD);
     file_put_contents("data.json", $newJson);
     $kontrol ="delete";
 }elseif ( $_GET['action'] == 'yeni' ){
    $kontrol = "yeni";
 }



 if( isset($_POST['guncelle'])){
     if( !isset($_POST['isim']) || !isset($_POST['yer']) ){
         die("Güncelleme alanları boş geçilemez.");
     }else{
      $isim=$_POST['isim'];
      $yer=$_POST['yer'];
      $newData['isim']=$isim;
      $newData['yer']=$yer;
      $pD[$indis] = $newData;
      $pDJson = json_encode($pD);
      
      if (file_put_contents("data.json",$pDJson)){  
          echo "<script type='text/javascript'>alert('Güncelleme başarılı');</script>";
      } else {
          die("Güncelleme esnasına bir şeyler ters gitti");
      }
      
     }
 }elseif ( isset($_POST['yeni'])) {
     if (!isset($_POST['isim']) || !isset($_POST['yer'])) {
        die("Alanlar boş geçilemez.");
     } else {
        $isim = $_POST['isim'];
        $yer = $_POST['yer'];
        $newData['isim'] = $isim;
        $newData['yer'] = $yer;
        $pD[] = $newData;
        $pDJson = json_encode($pD);

        if (file_put_contents("data.json", $pDJson)) {
        echo "<script type='text/javascript'>alert('Yeni kayıt eklendi.');</script>";
        } else {
        die("Kayıt ekleme esnasına bir şeyler ters gitti");
        }
     }
 }

 ?>

 <!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Aksiyon İşlemlerinin Yer Aldığı Sayfa</title>
 </head>
 <body>

    <!-- Güncellemenin olacağı yer -->
    <!-- Burada get ile gelmiş id yi form da ilk olarak valuelar ile ekrana bastırmamız gerekli. 
        değişmiş hali ile data.json a kayıt etmemiz gerekli. -->
     <?php if($kontrol == "update"): ?>
        <h1>Güncelleme Alanı</h1>
        <form method="post">
        <label for="isim">Programlama Dili :</label>
        <input type="text" name="isim" value="<?=$programlamaDilleri[$indis]['isim'];?>"><br>
        <label for="yer">Çalışma Alanı :</label>
        <input type="text" name="yer" value="<?=$programlamaDilleri[$indis]['yer'];?>">
        <input type="submit" name="guncelle" value="Güncelle">
        </form>
        <a href="index.php">Listeye Dönmek İçin Tıklayınız</a>
     <?php elseif($kontrol == "delete"): ?>
        <h1>Silme işlemi başarılı.</h1>
        <a href="index.php">Ana sayfaya dönmek için tıklayınız.</a>
    <?php elseif($kontrol == "yeni"): ?>
        <h1>Yeni Progralama Dili Kaydı</h1>
        <form method="post">
        <label for="isim">Programlama Dili :</label>
        <input type="text" name="isim"><br>
        <label for="yer">Çalışma Alanı :</label>
        <input type="text" name="yer"><br>
        <input type="submit" name="yeni" value="Programlama Dilini Kaydet"><br>
        <a href="index.php">Ana sayfaya dönmek için tıklayınız.</a>
        </form>
     <?php endif; ?>
 </body>
 </html>