<?php
function selection($populasi) {
    $fitness_data = [];
    foreach ($populasi as $i => $data) {
        $fitness_data[$i] = $data['fitness'];
    }

    $parent1 = $populasi[array_search(max($fitness_data), $fitness_data)];
    unset($populasi[array_search(max($fitness_data), $fitness_data)]);
    unset($fitness_data[array_search(max($fitness_data), $fitness_data)]);

    $parent2 = $populasi[array_search(max($fitness_data), $fitness_data)];
    unset($populasi[array_search(max($fitness_data), $fitness_data)]);
    unset($fitness_data[array_search(max($fitness_data), $fitness_data)]);

    return [$parent1, $parent2];
}