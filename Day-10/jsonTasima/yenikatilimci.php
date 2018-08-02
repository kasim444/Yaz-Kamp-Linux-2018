 <!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>jsonIleVeriKayıtEtme</title>
 </head>
 <body>
     <h1>Yeni Kullanıcı Kaydı</h1>
     <form action="ekle.php" method="post">
         <label for="tc">Tc Kimlik Numarası Giriniz</label>
         <input type="number" name="tc"><br>
         <label for="isim">Ad</label>
         <input type="text" name="isim"><br>
         <label for="soyisim">Soyisim</label>
         <input type="text" name="soyisim"><br>
         <label for="yaş">Yaş</label>
         <input type="number" name="yaş"><br>
         <label for="boy">Boy</label>
         <input type="text" name="boy"><br>
         <input type="submit">
     </form>
 </body>
 </html>