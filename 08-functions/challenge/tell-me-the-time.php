<?php

function get_time() {
    date_default_timezone_set("America/Lima");
    $format = "%I:%M:%S %p";
    return date("h:i:s a");
}

echo "Hello, can you tell me what time it is?\n";
echo "Sure! it's " . get_time() . "\n";

