<?php
//define a sample email address
$email = "sankabaktulamoksha3soham12@gmail.com";
//Define a regular expression pattern for email validation;
$pattern ="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
if(preg_match($pattern, $email)){
    echo"valid email address";
}else{
    echo "Invalid email address";
}
?>