<?php
echo "CONVERTIDOR DE TIEMPO A SEGUNDOS\n";
echo "--------------------------------\n";

$hours = readline("Ingrese las horas: ");
$minutes = readline("Ingrese las minutos: ");
$seconds = readline("Ingrese las segundos: ");

$minutes += $hours * 60;
$seconds += $minutes * 60;

echo "\n" . $seconds ." segundos\n";
