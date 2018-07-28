<?php

//Sort örneğinin 2. çözüm yolu
$ogrenciBilgileri = array(
    "Kasim" => 90,
    "Halit" => 80,
    "Ulaş" => 70,
    "Serhat" => 70,
    "Akın" => 75,
    "Uğur" => 100,
    "Müge" => 80,
);

switch ($ogrenciBilgileri) {
    case 'isimaz':
        ksort($ogrenciBilgileri);
        break;
    case 'isimza':
        krsort($ogrenciBilgileri);
        break;
    case 'notenb':
        asort($ogrenciBilgileri);
    case 'notenk':
        arsort($ogrenciBilgileri);
    default:
        asort($ogrenciBilgileri);
}

?>
  <a href="?sirala=isimaz">İsme Göre Sıralama A-Z</a>
  <a href="?sirala=isimza">İsme Göre Sıralama Z-A</a>
  <a href="?sirala=notenb">Nota Göre Sıralama Büyükten Küçüğe</a>
  <a href="?sirala=notenk">Nota Göre Sıralama Küçükten Büyüğe</a>

  <ul>
  <?php foreach ($ogrenciBilgileri as $isim => $not): ?>
    <li><?=$isim?> - <?=$not?></li>
  <?php endforeach;?>
  </ul>
  <hr>