<?php

$availableSeats = 6;

if($availableSeats == 0) {
	echo "No hay asientos disponibles.";
} elseif ($availableSeats > 1) {
	echo "Hay $availableSeats asientos disponibles.";
} else {
	echo "Hay $availableSeats asiento disponible.";
}

if ($a > $b):
	echo $a." es mayor que ".$b;
elseif ($a == $b):
	echo $a." igual ".$b;
else:
	echo $a." no es ni mayor ni igual a ".$b;
endif;