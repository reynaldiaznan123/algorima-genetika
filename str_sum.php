<?php
function str_sum($str, $hash) {
    $length = strlen($str);
    $i = 0;
    $number = 0;
    if ($length === strlen($hash)) {
	while ($i < $length) {
	    if ($str[$i] === $hash[$i]) $number += 1;
	    $i++;
	}

	return $number;
    } else {
        return $number;
    }
}
