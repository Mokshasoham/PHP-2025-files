<?php
session_start();
if(isset($_SESSION["name"]))
{
    echo $_SESSION["name"];
    echo "<br>";
    echo $_SESSION["city"];
}
else{
    echo "Session Data Not set";
}
// after this open modify.php