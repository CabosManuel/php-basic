<?php
$persons = [
    "Manuel" => 22,
    "Slash" => 52,
    "Ricardo" => 7
];

// var_dump(): Imprime tipo y valor de una variable.
var_dump( $persons );
/*
array(3) {
  ["Manuel"]=>
  int(22)
  ["Slash"]=>
  int(52)
  ["Milan"]=>
  int(7)
}
*/

// print_r(): Imprime información, legible para humanos, de una variable. 
print_r( $persons );
/*
Array
(
	[Manuel] => 22
	[Slash] => 52
	[Milan] => 7
)
*/