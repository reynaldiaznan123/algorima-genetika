<?php
function crossover($parent) {
    $child = $parent;

    // crossover point
    $cp = ceil(strlen($parent[0]['gen']) / 2);

    $child[0]['gen'] = str_replace(substr($child[0]['gen'], 0, $cp), substr($parent[1]['gen'], 0, $cp), $child[0]['gen']);
    $child[1]['gen'] = str_replace(substr($child[1]['gen'], 0, $cp), substr($parent[0]['gen'], 0, $cp), $child[1]['gen']);

    return $child;
}
