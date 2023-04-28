<?php
$br = "\n";

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == igual
//var_dump( $a == $b );		// true
//var_dump( $a == $b2 );	// true

// === idéntico
//var_dump( $a === $b );		// true
//var_dump( $a === $b2 );		// false

// != diferente
//var_dump( $a != $b );		// false
//var_dump( $a != $b2 );		// false

// !== no idéntico
//var_dump( $a !== $b );		// false
//var_dump( $a !== $b2 );		// true

// OPERADORES ESPECIALES --------------------------
// <=> Nave espacial
$x = 10;
$y = 5;
$z = 5;
echo $y <=> $x; // -1
echo $br;
echo $y <=> $z; // 0
echo $br;
echo $x <=> $y; // 1
echo $br;

// == Fusión de null
$age1 = 22;
$age3 = 23;
$ageNull = null;

echo $age2 ?? $age1;		// no existe, elige $age1
echo $ageNull ?? $age1; // es null, elige $age1
echo $age3 ?? $age1;		// elige $age3

echo $br;