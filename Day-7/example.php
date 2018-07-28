<?php
 //öğrenci notları adlı diziyi 4 buton ile sıralayıp ekrana yazdırma
$dizi = [
    "Kasim" => 80,
    "Halit" => 70,
    "Ulaş" => 90 
];


switch ($_GET['siralama']) {
    case 'keyaz':
        foreach (ksort($dizi) as $isim => $not) {
            echo "İsim => " . $isim . " , Not => " . $not; 
        }
        break;

    case 'keyza';
        foreach (ksort($dizi) as $isim => $not) {
        echo "İsim => " . $isim . " , Not => " . $not;
        }
        break;
        
    case 'notbk';
        foreach (ksort($dizi) as $isim => $not) {
        echo "İsim => " . $isim . " , Not => " . $not;
        }
        break;

    case 'notkb';
        arsort($dizi);
        break;
        
    default:
        arsort($dizi);
        break;
}

?>

 <a href="?siralama=keyaz">İsme Göre Sıralama(A-Z)</a>
 <a href="?siralama=keyza">İsme Göre Sıralama(Z-A)</a>
 <a href="?siralama=notbk">Nota Göre Büyükten Küçüğe Sıralama</a>
 <a href="?siralama=notkb">Nota Göre Küçükten Büyüğe Sıralama</a>