<?php
include __DIR__ . '/str_rand.php';
function create_gen($str) {
    return str_rand(strlen($str));
}
