<?php
# Array asociativo
$ages = array(
	"Manuel" => 22,
	"Rich" => 26,
	"Juan" => 50,	// trailing comma: Coma al final para agregar más, no da error
);

echo "Edad de Manuel: " . $ages["Manuel"];
echo "\n";

# Imprimir Array en cadena de texto
$coffees = array(
	"Cappuccino" => 15,
	"Americano" => 7,
	"Expreso" => 5
);

echo "Precio café Cappuccino: s/.{$coffees['Cappuccino']}";
echo "\n";

# Array en array
$people = array(
	"Manuel" => array(
		"age" => 20,
		"lastName" => "Cabos",
		"skill" => "Developer"
	),
	"Rich" => array(
		"age" => 26,
		"lastName" => "MC",
		"skill" => "Minecraft"
	)
);

echo "Rich: " . $people["Rich"]["age"] . ", "
	. $people["Rich"]["lastName"] . ", "
	. $people["Rich"]["skill"];
echo "\n";