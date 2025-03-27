<!-- <?php
$result=array(
    array("Manoj",7.8,"pass"),
    array("Aditya",8.5,"pass"),
    array("Anuj",4.9,"fail")
);
for($row=0;$row<3;$row++){
    echo"<h4>Row number $row</h4>";
    foreach($result[$row] as $value){
        echo $value . "<br>";
    }
    
}
echo "<br/>";
echo "<br/>";
?> -->

<!-- array_chunk -->

<?php
$courses=array("PHP","Laravel","Node js","HTML","CSS","ASP.NET");
$courses=array("a"=>"PHP","b"=>"Laravel","c"=>"Node js","d"=>"HTML","e"=>"CSS","f"=>"ASP.NET");
print_r(array_chunk($courses,2, true));
echo "<br/>";
echo "<br/>";
?>

<!-- array_diff -->

<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"magenta","i"=>"seagreen");
$result=array_diff($a1,$a2);
print_r($result);
echo "<br/>";
echo "<br/>";
?>

<!-- array_flip -->

<?php
$a1=array("red","green","blue","yellow");
$result=array_flip($a1);
print_r($result);
echo "<br/>";
echo "<br/>";
?>

<!-- array_intersect -->
<!-- it compares two or more arrays and it returs thr matches values -->
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("red","blue");
// $result=array_intersect($a1,$a2,$a3);
$result=array_intersect($a1,$a2);
// $result=array_intersect($a3,$a2,$a1);
print_r($result);
echo "<br/>";
echo "<br/>";
?>

<!-- array_merge -->
<!-- its merges one or more arrays into one array. -->
<?php
// $a1=array("a"=>"red","b"=>"green");
// $a2=array("c"=>"blue","b"=>"yellow");
// $a3=array("c"=>"orange","b"=>"megenta");
$a1=array("red","green","blue");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
// print_r(array_merge($a1,$a2,$a3));
echo "<br/>";
echo "<br/>";
?>

<!-- array_reverse -->
<?php
// $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
// print_r(array_reverse($a,false));
$a=array("Volvo","BMW","Toyota");
print_r(array_reverse($a,false));
echo "<br/>";
echo "<br/>";
?>

<!-- array_search() -->
<!-- it searches an array for a value and returns the key -->
<!-- <?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
?> -->
<!-- <?php
$a=array("a"=>"1","b"=>1,"c"=>"1");
echo array_search(1,$a,true);
echo "<br/>";
echo "<br/>";
?> -->

<!-- array_slice() -->
<!-- it returns selected parts of an array. -->
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
print_r(array_slice($a,1,2));
echo"<br>";
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,0,2));
?>
<!-- array_column() -->
