<form action="" method="post">
<input type="text" name="first">
<input type="text" name="last">
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["btn"]))
{
    session_start();
    $_SESSION["name"]=$_POST["first"];
    $_SESSION["city"]=$_POST["last"];
}
?>
<!-- //after this open home.php -->