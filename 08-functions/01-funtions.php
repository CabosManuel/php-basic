<?php

function getPokemon() {

	$numeroAleatorio = rand(1,5);

	switch ($numeroAleatorio) {
		case 1: echo "Pikachu"; break;
		case 2: echo "Squirtle"; break;
		case 3: echo "Ekans"; break;
		default: echo "No se encontró.";
	}
}

getPokemon();