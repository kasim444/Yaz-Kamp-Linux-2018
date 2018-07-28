<!--  ikisi veri doğrumu if girdiği bilgiler gerçekmi ? Burç için bir if  -->
<form action="" method="post">
<input type="date" name="bday" id="bday">
<button type="submit" name="ok">OK</button>
</form>
<?php
if(isset($_POST['ok'])){
    $ay = substr($_POST['bday'], 4, 2);
    $gun = substr($_POST['bday'], 7, 2);
    echo $ay . " " . "$gun";
}
?>