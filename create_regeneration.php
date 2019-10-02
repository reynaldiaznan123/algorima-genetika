<?php
function regeneration($populasi, $children) {
    $fitness_data = [];
	foreach ($populasi as $i => $data) {
		$fitness_data[$i] = $data['fitness'];
	}

	for ($i = 0; $i < count($children); $i++) {
		$idx = array_search(min($fitness_data), $fitness_data);
		unset($populasi[array_search(min($fitness_data), $fitness_data)]);
		unset($fitness_data[array_search(min($fitness_data), $fitness_data)]);
		
		$populasi[$idx] = $children[$i];
	}
    sort($populasi);
    return $populasi;
}