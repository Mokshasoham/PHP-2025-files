<?php
setcookie("moksha", "hero", time() + 10);
if(count($_COOKIE)>0){
    echo "Cookies are enabled";
}else{
    echo "Cookies are disabled";
}
?>