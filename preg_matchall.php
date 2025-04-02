<?php
$text = "Contact us at info@example.com, support@example.net, or sales@example.org";
$pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
preg_match_all($pattern, $text, $matches);
if(!empty($matches[0])) {
    echo "Found email addresses: " . implode(", ", $matches[0]);
} else {
    echo "No email addresses found.";
}
?>