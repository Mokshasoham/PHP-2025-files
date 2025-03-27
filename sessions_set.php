<?php
session_start();
if (isset($_SESSION["username"])){
    echo "Welcome". $_SESSION["username"];
    echo "<br> Your favourite category is ". $_SESSION["category"];
    echo "<br>";
}else{
    echo "Please login to continue";
}
?>