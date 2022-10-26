<?php

$numbers = [1, 2, 5, 6, 2, 11, 2, 7];

var_dump(getOddNumbers($numbers));
function getOddNumbers($numbers): array {
    #return list of odd numbers
    $oddNumbers = [];
    foreach ($numbers as $number) {
        if ($number % 2 == 1) {
            $oddNumbers[] = $number;
        }
    }
    return $oddNumbers;

}