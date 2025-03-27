<?php
$words = ["apple", "banana", "grape", "apricot", "blueberry"];
$pattern = "/^a/";
$matched_wrods = preg_grep($pattern, $words);
echo "words starting with 'a':" . implode(", ", $matched_wrods);
?>