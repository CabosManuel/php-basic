<?php
function encontrarCombinaciones($x) {
  $combinaciones = [];
  
  for ($i = 1; $i <= 2; $i++) {
    encontrarCombinacionesRecursivo($x - 1, [$i], $combinaciones);
  }
  
  return $combinaciones;
}

function encontrarCombinacionesRecursivo($n, $combinacionActual, &$combinaciones) {
  if ($n == 0) {
    $combinaciones[] = $combinacionActual;
    return;
  }
  
  for ($i = 1; $i <= 2; $i++) {
    if ($i <= $n) {
      $nuevaCombinacion = array_merge($combinacionActual, [$i]);
      encontrarCombinacionesRecursivo($n - $i, $nuevaCombinacion, $combinaciones);
    }
  }
}

$x = 5; // Tamaño del array (x-1)

$combinaciones = encontrarCombinaciones($x);

// Imprimir las combinaciones encontradas
foreach ($combinaciones as $combinacion) {
  echo implode(', ', $combinacion) . "\n";
}
?>
