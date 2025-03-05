<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Arthematic Operations</h2>
    <form method="POST" action="">
        <label for="num1">First number:</label>
        <input type="text" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Second Number:</label>
        <input type="text" id="num2" name="num2" required>
        <br><br>
        <input type="submit" name="operation" value="ADD"> 
        <input type="submit" name="operation" value="SUB">
        <input type="submit" name="operation" value="DIV">
        <input type="submit" name="operation" value="MUL">
    </form>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        if(!is_numeric($num1) || !is_numeric($num2)){
            echo "<p style = 'color:red;'>Please enter valid numbers</p>";
        }else{
            $num1 = (float)$num1;
            $num2 = (float)$num2;
            switch($operation){
                case 'ADD':
                    $sum = ($num1 + $num2);
                    echo "<h3>The sum of $num1 and $num2 is : $sum</h3>";
                    break;
                case 'SUB':
                    $sub = ($num1 - $num2);
                    echo "<h3>The subraction of $num1 and $num2 is: $sub</h3>";
                    break;
                case 'DIV':
                    if($num2 == 0){
                        echo "<p style = 'color:red;'>Division by zero is not allowed</p>";
                    }else{
                        $div = ($num1 / $num2);
                        echo "<h3>The division of $num1 and $num2 is: $div</h3>";   
                    }
                    break;
                case 'MUL':
                    $mul = ($num1 * $num2);
                    echo "<h3>The multiplication of $num1 and $num2 is: $mul</h3>";
                    break;
                default:
                    echo "<p style = 'color:red;'>operation not found</p>";
            }
        }
    }
    ?>