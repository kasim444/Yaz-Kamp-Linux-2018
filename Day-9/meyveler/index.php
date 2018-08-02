<?php
 $meyveler = array ('elme', 'armut', 'çilek', 'ŞEFTALİ', "erik" );

 foreach ($meyveler as $key => $meyve){
     echo "<a href='index.php?id=$key'>$meyve</a><br>" ;
 }

 echo "<hr>";

 if (isset($_GET['id']) && isset($meyveler[$_GET['id']])){
 echo $meyveler[$_GET['id']];
 echo "<hr>";
 }