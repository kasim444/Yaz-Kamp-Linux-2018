<?php
setlocale(LC_ALL, 'tr_TR.UTF-8');
//1-Kelimeyi post ile aldık
//2-Elimizdeki kelimenin son harfi ile aldığımız kelimenin ilk harfini karşılaştırdık
$onay="arabA";
if (isset($_POST['kelime'])) {
    $kelime = strtolower($_POST['kelime']);
    if ($kelime[0] == mb_substr("araba", -1)) {
        $result=true;
    } else {
        $result = false;
    }
}
?>

<!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Son Harf Oyunu</title>
 </head>
 <body>
     <?=$onay?> <!-- Php deki bir değişkeni html'e kısaca bu şekilde basabiliriz. -->
     <form method="post">
     <label for="kelime">Yukarıdaki kelimenin son harfi ile bir kelime kurun</label>
        <input type="hidden" value="">
        <input type="text" name="kelime">
        <button type="submit">Gönder</button>
     </form>
     <hr>
     <?php if(isset($result)): ?>
     <?php echo $result ? "Tebrikler" : "Malesef, yanlış kelime!"; ?>
     <!-- Yukarıkdaki ifade if in kısaltılmış halidir.-->
     <?php endif;?>
 </body>
 </html>