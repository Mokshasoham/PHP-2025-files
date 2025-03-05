<?php
$a="welcome to our channel";
echo str_replace ("our", "us",$a)."<br>";
echo strlen($a)."<br>";
echo strrev($a)."<br>";
echo strpos($a,"our"). "<br>";
echo str_word_count($a). "<br>";
$x="Hello";
$y="World!";
echo $x . $y;
echo "<br>";
$y .= $x;
echo $x;
echo "<br>";
$x .= $y;
echo $x;
echo "<br>";
//Termnary conditional arthematic operators;
echo $status=(empty($user))? "anonymus": $user;
echo "<br>";
$user="Michael";
echo $status=(empty($user))? "anonymus" : $user;
echo "<br>";
$age=15;
echo($age<12)?"Child":"Adult";

?>