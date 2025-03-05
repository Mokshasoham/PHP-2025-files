<!-- Q1. Two palayers rolls a 6 sided dice.
The player with the higher roll wins. 
If both rolls are the same, its a tie.
Use PHP operators to determine the winner. -->

<!-- Q2. Each player rolls teo dice insted of one.
The total score for each player is the sum of both dice rolls.
Determine the winner based on the highest total.
If the totals are the same, print "its a draw". -->
<?php
$a=rand(1,6);
$b=rand(1,6);
echo "Player 1 rolled";
echo "<br>";
echo "Player 2 rolled";
echo "<br>";
echo "<br>";
if($a>$b){
    echo "player 1 wins!";
}else if($b>$a){
    echo "player 2 wins!";
}else{
    echo "it is a tie";
}
?>