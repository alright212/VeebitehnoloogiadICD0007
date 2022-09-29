<?php

$inputList = [1, 4, 2, 0];

$listAsString = join(', ', $inputList);
$restoredList = explode(', ', $listAsString);
$restoredList = array_map(fn($each)=> intval($each), $restoredList);
var_dump($restoredList);
print var_dump($restoredList===$inputList);
