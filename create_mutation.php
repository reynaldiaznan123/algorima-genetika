<?php
function mutation($data, $speed = 1) {;
    for ($i = 0; $i < strlen($data['gen']); $i++) {
        if (rand(0, 10) <= $speed) {
            $data['gen'][$i] = chr(random_int(32, 126));
        }
    }
    return $data;
}