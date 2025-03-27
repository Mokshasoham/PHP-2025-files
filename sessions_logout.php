<?php
session_start();
echo "Welcome". $_SESSION["username"];
echo "<br> Your favourite category is ". $_SESSION["category"];
echo "<br> you have been logged out";
?>