<?php
//Articles'ları ekrana basma uygulaması gerçekleştireceğiz

//İlk olarak database bağlantısını gerçekleştirmemiz gerekli.
try{
$db = new PDO ("mysql:host=localhost;dbname=oop-blog;charset=utf8","root","root");
}catch (PDOException $e){
    echo $e->getMessage();
}

//Ardından pdo vasıtası ile sorgumuzu hazırlayıp gelen sonuc ile bu verileri ekrana bastıracağız.
$rows = $db->query("SELECT * FROM posts LIMIT  2",PDO::FETCH_ASSOC);


if($rows>0){
    foreach($rows as $row){
        echo $row['title']."<br>";
        echo $row['content']."<br>";
    }
}
