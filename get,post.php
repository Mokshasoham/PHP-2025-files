<!-- POST -->
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_REQUEST['name'];
    echo "<h3>HELLO, $name! Welcome to PHP.</h3>";
}
?>
<form method="post">
    <label>Enter your name:</lable>
    <input type="text" name="name" required>
    <input type="submit" value="submit">
</form>

<!-- GET -->
<!-- <?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $name=$_REQUEST['name'];
    echo "<h3>HELLO, $name! Welcome to PHP.</h3>";
}
?>
<form method="post">
    <label>Enter your name:</lable>
    <input type="text" name="name" required>
    <input type="submit" value="Submit">
</form> -->