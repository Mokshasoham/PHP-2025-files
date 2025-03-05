<?php
$name = $email = $message= "";
function sanitize_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = filter_var($_POST["name"], FILTER_SANATIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANATIZE_EMAIL);
    $message = filter_var($_POST["message"], FILTER_SANATIZE_SPECIAL_CHARS);
}
?>
<h2>PHP Form with Sanatization</h2>
<form method="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?> "><br><br>
    Email: <input type="email" name="email" value = "<?php echo $email; ?>"><br><br>
    Message: <textarea name="message" rows="5" cols="40"><?php echo $message; ?></textarea><br><br>
    <input type= "submit" value ="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Sanitized Input:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";
}
?>