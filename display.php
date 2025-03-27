<form action="" method="post">
    <input type="text" name="data">
    <input type="submit" name="btn" value="ADD COOKIE">
    <br>
    <br>
    <input type="submit" name="del" value="DELETE COOKIE">
    <br>
    <br>
    <input type="submit" name="show" value="Show COOKIES">
</form>
<?php
if(isset($_POST["btn"])){
    $c = $_POST["data"];
    setCookie($c,$c,time() + 10);
}
if(isset($_POST["del"])){
    
}