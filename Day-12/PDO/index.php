<?php
/* 
//query sorgusunu tanımlıyoruz
 $articles = $connection->query("SELECT * FROM articles");


//  //article ları ekrana dizi olarak yazdırıyoruz
//  foreach ($articles as $article){
//      var_dump($article);
//      die();
//  }

    //exec metodu direk çalıştırır ve kaç satıra etki ettiği sayıyı döndürür.
//  $silinenler = $connection->exec("DELETE FROM articles"); 

//  echo $silinenler;



//Sorguyu prepare ile hazırlıyoruz
/* $silmeSorgusu = $connection->prepare("DELETE FROM articles WHERE id=?"); */



//Yukarıdaki sorgu ile bu paramatre ile çalıştır dediğimizde. Soru işareti yerine execure metodu içersindeki değer yazılır.
/* $silmeSonucu = $silmeSorgusu->execute(array(1)); */
// DELETE FROM articles WHERE id=1




// "SELECT * FROM users WHERE id=" . $_GET['user_id'] . "; => Bu sorguda kötü niyetliler sql injection yapabilirler


/* $sayisiniGetir = $connection->query("SELECT * FROM articles");

$sayisiniGetirmeYaniti = $sayisiniGetir->fetch();

var_dump($sayisiniGetirmeYaniti); */


$page = 1;
if (isset($_GET['page']) && $_GET['page'] > 0) {
    $page = (int) $_GET['page'];
}

$takePerPage = 5;

$limitPass = ($page - 1) * $takePerPage;

//1.Yol
$//articles = $connection->query("SELECT * FROM articles ORDER BY id DESC LIMIT $limitPass,$takePerPage");

//1.Yol
$articleQuery = $articles->prepare("SELECT * FROM articles ORDER BY id DESC LIMIT :pass,:take");

$articles->bindValue(':pass',$limitPass,PDO::PARAM_INT);
$articles->bindValue(':take',$takePerPage,PDO::PARAM_INT);
$articles->execute();

?>
<ul>
    <?php foreach($articles->fetchAll(PDO::FETCH_OBJ) as $article ): ?>
        <li>
            <a href="article.php?id<?=$article->id?>"> <?=$article->title?> </a>
        </li>
    <?php endforeach; ?>
</ul>