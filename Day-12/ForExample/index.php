<?php
 
 // veritabanındaki article ları listeleyen bir uygulamada

 require_once "init.php";

// tüm yzıları sondan ilke göre bir sayfada 5 tane olacak şek,lde sıralayacağım.

$page = 1;
if (isset($_GET['page']) && $_GET['page']>0) $page = (int)$_GET['page'];

$takePerPage = 5;

$limitPass = ($sayfa-1)*$takePerPage;

$articleQuery = $connection->prepare("SELECT * FROM articles ORDER BY id DESC LIMIT   :pass,:take");
