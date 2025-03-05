<?php
$emp = array(
    array("hero", "super", "jai"),
    array("mad", "code","hacker"),
    array("hlo","bro","namaste")
);
echo "<table border='1'>";
for($i=0;$i<3;$i++){
    echo "<tr>";
    for($j=0;$j<3;$j++){
        echo "<td>" . $emp[$i][$j]."</td>";
    }
    echo"</tr>";
}
echo"</table>";
echo "<br>";
// index array
$courses = array("PHP","Laravel","Node js");
$courseslength = count($courses);
for($x=0; $x < $courseslength; $x++){
    echo $courses[$x] . "<br>";
}
echo "<br>";
//assosiativeloop
$courses=array("INT220"=>"PHP","INT221"=>"Laravel", "INT222"=>"Node js");
foreach($courses as $courses=>$value){
    echo "Key=".$courses.","."Value=".$value;
    echo "<br>";
}

?>