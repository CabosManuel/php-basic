<?php

function get_pokemon()
{
    $random_number = rand(1, 3);
    $pokemon = "";

    switch ($random_number) {
        case 1: $pokemon = "Pikachu\n"; break;
        case 2: $pokemon = "Squirtle\n"; break;
        case 3: $pokemon = "Ekans\n"; break;
        default: $pokemon = "No se encontró.\n";
    }

    return $pokemon;
}

echo get_pokemon();
