<?php
 require_once "myexample.php";

 if (isset($_GET['indis']) && $progDilleri[$_GET['indis']]) {
     echo "<hr>";
     echo "<h1>" . $progDilleri[$_GET['indis']] . "</h1>";
     echo "<p></p>";
 }