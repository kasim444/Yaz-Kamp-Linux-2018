<?php
session_start();
$_SESSION['isim']="Kasim";
/*Http talebi ile gelen ve PHP tarafından belirli işlemer için belirli verileri saklayan ve PHP yorumlayıcısının dokunduğu her yerden erişilebilen süper değişkenlerdir.SÜPER
 Dizi tipinde dönerler, ilgili alana ilişkin veri barındırırlar.
 *GLOBALS
 $_SERVERS
 $_GET
 $_POST
 $_FILES
 $_COOKIE
 $_SESSION
 $_REQUEST
 $_ENV
 */
 $deneme="değişken";
 echo "GLOBALS: <br><pre>";
 var_dump($GLOBALS);
 echo "</pre><hr>";

 echo "_SERVER: <br><pre>";
 var_dump($_SERVER);
 echo "</pre><hr>";
 echo "_GET : <br><pre>";
 var_dump($_GET);
 echo "</pre><hr>";
 echo "_POST : <br><pre>";
 var_dump($_POST);
 echo "</pre><hr>";
?>
<form method="post" action="?fullname=Ahmet" enctype="multipart/form-data">
 <input type="text" name="fullname" value="Uğur"><br>
 <input type="file" name="dosya"><br>
 <input type="submit" value="Gönder">
</form>
<?php
 echo "_FILES : <br><pre>";
 var_dump($_FILES);
 echo "</pre><hr>";
 echo "_COOKIE : <br><pre>";
 var_dump($_COOKIE);
 echo "</pre><hr>";
 echo "_SESSION : <br><pre>";
 var_dump($_SESSION);
 echo "</pre><hr>";
 echo "_REQUEST : <br><pre>";
 var_dump($_REQUEST);
 echo "</pre><hr>";
 echo "_ENV : <br><pre>";
 var_dump($_ENV);
 echo "</pre><hr>";