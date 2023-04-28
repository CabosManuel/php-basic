<?php
// Suponiendo estas variables
$es_un_gato_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// ¿Cuál es el resultado?
$es_un_gato_grande && $le_gusta_comer	// true
$es_un_gato_grande || $sabe_volar			// true
$sabe_volar || $tiene_2_patas					// false
!$le_gusta_comer											// false
!$le_gusta_comer || $es_un_gato_grande	// true