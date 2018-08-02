<?php require_once 'data.php'; ?>
    <?php include 'header.php'; ?>
     <h1>Programlama Dilleri</h1>
     <ul>
     <?php foreach($progDilleri as $key => $diller): ?>
        <li><a href="meyve.php?indis=<?=$key?>"><?=$diller['isim']?></a></li>
     <?php endforeach; ?>
     </ul>
    <?php include 'footer.php';
