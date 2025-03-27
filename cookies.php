<?php
function setMyCookie($name, $value, $expiry = 3600) {
    setcookie($name, $value, time() + $expiry, "/");
}
setMyCookie("moksha", "hero", 5);
setMyCookie("Hello", "mad", 7);
setMyCookie("anna", "hello", 9);
print_r($_COOKIE);
?>