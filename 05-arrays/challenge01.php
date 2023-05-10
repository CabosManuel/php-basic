<?php
// Crear un array de michis que tengan nombre, ocupación, color y
// comidas (dentro comida que le gusta y no). Mínimo 3 michis.

$dogs = array(
	[
		"name" => "Poseidón",
		"occupation" => "Rey de los mares",
		"color" => "Azul marino",
		"foods" => array(
			"likes" => ["pescado","caballitos de mar"],
			"dislikes" => ["algas","pollo"]
		)
	],
	[
		"name" => "Zeus",
		"occupation" => "Rey de los recibos de luz",
		"color" => "Amarillo patito",
		"foods" => array(
			"likes" => ["baterías","cargadores tipo C"],
			"dislikes" => ["mouse apple","pescado"]
		)
	],
	[
		"name" => "Kratos",
		"occupation" => "Rey de God of War",
		"color" => "Blanco y rojo",
		"foods" => array(
			"likes" => ["dioses","ambrosia"],
			"dislikes" => ["ares","alfajores"]
		)
	]
);

echo "Comida favorita de Poseidon: " . implode( ", ", $dogs[0]["foods"]["likes"] ) . "\n";
echo "Color de Zeus: {$dogs[1]['color']}"; 