<?php 
$b = 5;
$c = 6;
$d = 7;
$a = [$b,$c,$d,mt_rand(0,6)];

unset($a[3]);

print_r($a);

echo round(end($a));