<?php
// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// !preg_match it means it matches the string; if it does not match the string, it returns false
// preg_match("/[A-Z]/", $password) it means it matches the uppercase letter in the string;
$message= "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if (strlen($password) < 8){
        $message = "Password must be at least 8 characters long";
    }else if(!preg_match("/[A-Z]/", $password)){
    $message = " Password must contain at least one uppercase letter";
    }else if(preg_match("/[@$!%*#?&]/", password)){
        $message = "Password must contain at least one special character";
    }else if($passsword !== $confirm_password){
        $message = " Password do not match.";
    }
    else{
        $message = "Password is valid";
    }
}
?>
<form method="Post">
    <input type="password" name="passsword" placeholder="Enter password" required>
    <input type="password" name="confirm_password" place_holder="Confirm password" required>
    <button type="submit">Submit</button>
</form>
<p><?php echo $message; ?></p>
