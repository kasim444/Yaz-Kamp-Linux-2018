<?php 
//  $programlamaDilleri = array(
//      ["isim" => "Html", "yer" => "Ön Yüz"],
//      ["isim" => "Css", "yer" => "Ön Yüz"],
//      ["isim" => "Php", "yer" => "Arka Yüz"]
//  );

//  $dataJson = json_encode($programlamaDilleri,JSON_FORCE_OBJECT);
//  print_r($dataJson);
//  file_put_contents("data.json",$dataJson);

$jsonData= file_get_contents("data.json");
$programlamaDilleri = json_decode($jsonData,TRUE);