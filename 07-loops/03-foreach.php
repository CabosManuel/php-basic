<?php

$coffees = array(
	"Latte" => 12,
	"Hecho ayer" => 3,
	"Americano" => 7,
	"Cappuccino" => 15,
	"Expreso" => 5,
);

foreach ($coffees as $coffee => $price) {
	echo "Café $coffee: $price USD \n";
}

foreach ($coffees as $coffee => $price) {
	echo "- $coffee\n";

	if ($coffee == "Hecho ayer")
		continue;
	
	if ($coffee == "Cappuccino"){
		echo "Si hay café Cappuccino, esta rico.\n";
		break;
	}
}