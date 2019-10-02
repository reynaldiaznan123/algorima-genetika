<?php
function create_population($str, $n) {
    $populasi = [];
    for ($i = 0; $i < $n; $i++) {
        $gen = create_gen($str);
        $fitness = calculate_fitness($str, $gen);
        $populasi[$i] = [
            'gen' => $gen,
            'fitness' => $fitness,
        ];
    }
    return $populasi;
}
