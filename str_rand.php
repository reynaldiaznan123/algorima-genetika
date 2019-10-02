<?php
function str_rand($length = 5) {
    $char = null;
    $i = 1;
    while ($i <= $length) {
	$char .= chr(rand(32, 126));
	$i++;
    }
    return $char;
}
