<?php

$part1orig = $part1;
$part1 = ['goodbye','you','how','hello'];
$s =  ['a','c','b', 'd', 'e', 'hello','how','are','you','goodbye','see you'];
uasort(
    $part1,
    function ($a, $b) use ($s) {
        return array_search($a, $s) <=> array_search($b, $s);
    }
);

print_r($part1);