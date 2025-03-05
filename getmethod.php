<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eample of PHP GET method</title>
</head>
<body>
   <?php
   if(isset($_GET["name"])){
    echo "<p>Hi, ".$_GET["name"]. "</p>";
   }
   ?>
   <form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</lable>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
    </form>  
</body>
</html>
