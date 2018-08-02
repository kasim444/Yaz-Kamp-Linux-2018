<?php
 $versionJson = file_get_contents("phpreleases.json");

 $releases = json_decode($versionJson,true);
// echo "<pre>";
//  var_dump($releases);
//  echo "</pre>";

 ?>
 <!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Json Version</title>
     <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
     <h1 class="ana-baslik">PHP Yayınları</h1>
     <ul>
     <?php foreach($releases as $version => $details) : ?>
     <li>
     <!-- Version -->
     <h2 class="ikinci-baslik">Php Version <?=$version;?></h2>

     <!-- Announcement -->
     <!-- <h4><?=$details['announcement'];?></h4> -->

     <!-- Source -->
     <h3 class="ucuncu-baslik">Source</h3>
     <?php foreach($details['source'] as $key => $value): ?>
     <ul>
         <li>
     <h5 class="alt-baslik"><?=$value['filename'];?></h5>
     <h5><?=$value['name'];?></h5>
     <h5><?=$value['sha256'];?></h5>
     <h5><?=$value['date'];?></h5>
</li>
</ul>
     <?php endforeach; ?>

     <!-- Version -->
     <h3 class="ucuncu-baslik">Version <?=$details['version'];?></h3>
     </li>
     <hr class="alt-cizgi" data-content="j">
     <?php endforeach; ?>
     </ul>
 </body>
 </html>
