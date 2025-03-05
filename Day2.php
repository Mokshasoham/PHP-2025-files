<?php
/*Array operators 
+  --> union --> $x+$y --> union of $x and $y.*/
$a = array("INT219" => "Front End Web", "INT219" => "PHP", "INT221" => "Laravel");
$b = array("INT222" => "Node js", "CSE316" => "Operating System");
$c=($a+$b);
var_dump($c);
echo "<br>";
print_r($c);
echo "<br>";
var_dump($a==$b);
echo "<br>";
var_dump($a===$b);
echo "<br>";
var_dump ($a != $b);
echo"<br>";
var_dump ($a<>$b);
echo "<br>";
var_dump($a!==$b);
echo "<br>";
echo "Array Operators:<br>";
$arr1=["a"=>"Apple", "b"=> "Baana"];
$arr2=["c"=>"Cherry","d"=>"Apricot"];
$union =$arr1+$arr2;
print_r($union);
?>