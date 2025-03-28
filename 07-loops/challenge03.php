<?php
/* En un array de tamaño x-1, encontrar las posibles combinaciones: de valores 1 o 2
en cualquier posición y que su suma de valores sea igual a x-1. */

$store = 5;
//readline( "Ingrese el nro de la tienda quiere ir: " );

$nCombinations = 0;

for ( $i = 1; $i <= $store; $i++ ) {
	$nCombinations += 2 ** $i;
	echo 2 ** $i . "\n";
}

echo "nCombinations = $nCombinations\n";

$allCombinations = [];
$rightCombinations = [];

while ( count($allCombinations) < $nCombinations ) {

	// $combination = [];
	array_push($allCombinations, rand(1,2));

	if ( !in_array($combination, $rightCombinations) ) {
		array_push($allCombinations, $combination);
	}

}

// foreach ($ddd as $combination) {
// 	foreach ($nCombination as ) {
// 		echo implode(', ', $combination) . "\n";
// 	}
// }