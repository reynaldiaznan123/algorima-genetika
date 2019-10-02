<?php
function termination($populasi) {
    $isLoop = true;
	$best = selection($populasi);
	// echo $best[0]['gen'] . ' | ' . $best[0]['fitness'] . "\n";
	// echo $best[1]['gen'] . ' | ' . $best[1]['fitness'] . "\n";
	if ($best[0]['fitness'] === 100) {
		$isLoop = false;
    }
    
    return ['loop' => $isLoop, 'solusi' => $best[0]];
}