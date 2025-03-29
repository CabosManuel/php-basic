<?php

$coffees_prices = [12,11,7,8,15,13];

usort($coffees_prices, function ($a, $b){
    return $a <=> $b;
});

print_r($coffees_prices);
/*
Array
(
    [0] => 7
    [1] => 8
    [2] => 11
    [3] => 12
    [4] => 13
    [5] => 15
)
*/
