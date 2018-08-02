<?php
 // Ödevdeki diziyi json dosyasına taşımak gerekiyor. json encode edip dosyaya yazacağız

//  $myClassJson = json_encode($myClass);
 
//  $dosyaYolu = "data.json";
 
//  $dt=fopen($dosyaYolu,"w+");
 
//  fwrite($dt,$myClassJson);
 
//  fclose($dt);
 
 $data_json = file_get_contents("data.json");
 $data_decodeJson = json_decode($data_json,true); 

 //Json tipindeki verileri bir diziye dönüştürmek istersek json_decode($data_json,true) kullanmamız gerek.

//  echo "<pre>";
//  var_dump($data_decodeJson);
//  echo "</pre><hr>";


//Yeni katılımcı isminde bir buton ile diziye bir öğrenci ekleyeceğiz.

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jsonIleVeriGuncelleme</title>
</head>
<body>
    <a href="yenikatilimci.php">Yeni Katılımcı</a>
    <ul>
    <?php foreach ($data_decodeJson as $key => $value): ?>
        <li><span><?=$value['isim']." ".$value['soyisim'];?></span></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>

