<?php

# Pecedencia

// Asociatividad izquierda
echo 1 - 2 - 3 - 4; // -8
// (1 - 2) - 3 - 4;
// (1 - 2 - 3) - 4;

// Asociatividad derecha
$b = 5;
$c = 10;
$a = $b = $c;
// $a = ($b = $c;)

echo $a;