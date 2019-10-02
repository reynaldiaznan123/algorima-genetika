<?php
include __DIR__ . '/create_gen.php';
include __DIR__ . '/calculate_fitness.php';
include __DIR__ . '/create_population.php';
include __DIR__ . '/create_selection.php';
include __DIR__ . '/create_crossover.php';
include __DIR__ . '/create_mutation.php';
include __DIR__ . '/create_regeneration.php';
include __DIR__ . '/create_termination.php';
$target = 'Saya sedang pergi';
$besar_populasi = 10;
$laju_mutasi = 1; // 1 ~ 10
$populasi = create_population($target, $besar_populasi);

$isLoop = true;
$generasi = 1;
while ($isLoop) {
	$parent = selection($populasi);
	$child = crossover($parent);

	$mutan = [mutation($child[0], $laju_mutasi), mutation($child[1], $laju_mutasi)];
	$mutan[0]['fitness'] = calculate_fitness($target, $mutan[0]['gen']);
	$mutan[1]['fitness'] = calculate_fitness($target, $mutan[1]['gen']);
	$populasi = regeneration($populasi, $mutan);

	$termi = termination($populasi);
	$isLoop = $termi['loop'];
	logging($populasi, $target, $termi['solusi']['gen'], $generasi);
	$generasi++;
}

function logging($populasi, $target, $solusi, $generasi) {
	echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J'; // remove message

	echo sprintf('Target: %s', $target) . "\n";
	echo sprintf('Solusi: %s', $solusi) . "\n";
	echo sprintf('Generasi: %d', $generasi) . "\n";
	echo "\n\n";
	foreach ($populasi as $populasi) {
		echo sprintf('Gen %s | Fitness %d', $populasi['gen'], $populasi['fitness']) . "\n";
	}
}


// var_dump(count($populasi), $regeneration);
