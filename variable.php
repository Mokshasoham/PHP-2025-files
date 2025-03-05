<!-- global variable -->

<?php
$lang="PHP";
function mytest(){
    global $lang;
    echo $lang;
    echo"<br>";
}
mytest();
echo $lang;
echo "<br>";
?>

<?php 
$num1 = 5;
$num2 = 13;
function global_var(){
    $sum =$GLOBALS['num1']+$GLOBALS['num2'];
    echo "sum of the global variables is: ".$sum;
}
global_var();
?>