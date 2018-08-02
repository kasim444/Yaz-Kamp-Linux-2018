<?php 
//index sayfasında sadece başlıklar.hangisine tıklanırsa onun 
//detayını görmek istiyoruz.
//detail.php sayfasında ise o başlık ve içeriği olacak.
require_once "data.php";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Haber Sayfası</title>
</head>
<body>
    <h1>Haber Başlıkları</h1>
    <ul>
        <?php foreach ($articles as $key => $article) : ?>
            <li>
                <a href='details.php?id=<?=$key?>'>
                <?=$article['title']?>
                </a>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>