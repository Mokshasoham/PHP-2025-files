<?php
$date = "hello LPU Student 5837 382";
$pattern = "/[-\W]/";
// $pattern = "/[-\s]/";
// $pattern = "/[-\d]/";
// $pattern = "/[-\D]/";
$components = preg_split($pattern, $date);
print_r($components);
?>