<?php
$text = "Hello World! welcome to php programming.";
$pattern = "/world/";
$replacement = "Universe";
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;
?>