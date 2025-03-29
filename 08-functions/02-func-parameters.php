<?php

function isLegend_student($platziRank)
{
    if ($platziRank >= 20_000) {
        echo "Eres un Legend Student" . "\n";
    } else {
        echo "Todavía no eres Legend Student" . "\n";
    }
}

// do {
//     $platziRankUser = (int) readline("Ingrese su Platzi Rank: ");
//     isLegendStudent($platziRankUser);
// } while ($platziRankUser <= 20_000);

# ------------------------------------------------------------------

// Default values
function sum($a = 0, $b = 0)
{
    echo "$a + $b = " . $a + $b . "\n";
}

// sum(1); // 1 + 0 = 1

# ------------------------------------------------------------------

//Spread Operator
$array1 = [1, 2];
$array2 = [3, 4];

$result = [...$array1, ...$array2];
print_r($result);
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
)
*/

// sum(...$array1); // 1 + 2 = 3
// sum(...$array2); // 3 + 4 = 7

# ------------------------------------------------------------------

function infinite_sum(...$numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    echo $sum . "\n";
}

infinite_sum(1,2);
infinite_sum(1,2,3);
infinite_sum(1,2,3,4,5,6,7,8,9);
