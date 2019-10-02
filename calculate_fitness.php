<?php
include __DIR__ . '/str_sum.php';
function calculate_fitness($str, $hash) {
    return (str_sum($str, $hash) / strlen($str)) * 100;
}
