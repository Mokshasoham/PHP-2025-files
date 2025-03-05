<?php
function sendmsg(){
    echo "Hey there!";
}
sendmsg();
echo "<br>";
echo "<br>";
function add($a){
    $a=$a+5;
    return $a;
}
$a=10;
add($a);
echo($a);
echo "<br>";
echo "<br>";
function add(string $a,string $b){
    echo $a.$b;
}
add("Bhai","lalla");
?>
