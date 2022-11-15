<?php 
$a = [0,6866,354,6, 0.898, true, false, null, 'test', 'good'];

$ajson = json_encode($a,JSON_NUMERIC_CHECK);

return $ajson;