<?php
# Usar switch con Twitch, a partir de 100 USD puedes retirar
# dinero de las donaciones (100 bits = 1 USD)

$bits = readline("Ingrese la cantidad de bits que tiene: ");
$money = $bits / 100;

if ( $money < 100 ) {
	echo "Ud. tiene $money USD. Necesita 100 USD para retirarlo.";
} else {
	echo "Ya puedes retirar $money USD.";
}
	