<?php
/* En un array de tamaño x-1, encontrar las posibles combinaciones: de valores 1 o 2
en cualquier posición y que su suma de valores sea igual a x-1. */

$store = 5;
//readline( "Ingrese el nro de la tienda quiere ir: " );

$nCombinations = 0;

for ($i=1; $i <= $store; $i++) { 
	$nCombinations += 2 ** $i;
	//echo 2 ** $i . "\n";
}

echo "nCombinations = $nCombinations\n";

$rightCombinations = [];

while (count($rightCombinations) < $nCombinations) { 
	$array = [];
	
	while (!in_array($array, $rightCombinations)) {
		
		while (!(count($array) <= $store && array_sum($array) == $store)) {
			array_push($array, rand(1, 2));
	
			if (array_sum($array) > $store) {
				$array = [];
			}
		}

	}

	array_push($rightCombinations, $array);

	//echo implode(",", $array)."\n";
	
	/*
	foreach ($rightCombinations as $i => $value) {
		$rightCombinationsArrays[] = implode(",", $value);
	}
	*/
	

}