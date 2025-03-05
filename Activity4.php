<?php
$a = array(
    array('User',"Math","Science","Eng","Average"),
    array("User 1",90,40,60,(50+40+60)/3),
    array("User 2",50,10,95,(0+10+5)/3),
    array("User 3",60,70,60,(60+60+60)/3),
);

echo "<h3>Score Card</h3>";
echo "<table border='1' cellpadding='10'>";
for ($i = 0; $i < count($a); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($a[$i]); $j++) {
        echo "<td>" . $a[$i][$j] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>