<?php
session_start();
$_SESSION["username"] = "John";
$_SESSION["category"] = "Books";
echo "we have saved your session";
?>