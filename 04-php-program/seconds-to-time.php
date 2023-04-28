<?php
echo "CONVERTIDOR DE SEGUNDOS A TIEMPO\n";
echo "--------------------------------\n";
$seconds = readline( "Ingrese el tiempo en segundos: " );

$hours = (int) ($seconds / 3600);
$seconds = $seconds % 3600;
$minutes = (int) ($seconds / 60);
$seconds = (int) ($seconds % 60);

echo "H:" . $hours . " M:" . $minutes . " S:" . $seconds . "\n";