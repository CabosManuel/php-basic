<?php
//Fácil
$nombre = "Carlos";		// string
$apellido = "Gómez";	// string
$edad = 18;						// int
$aprobado = true;			// bool

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;				// float
$nombre_completo = $nombre . " " . $apellido;	// string
$presento_examen = (bool) 1;									// bool

var_dump($promedio);
var_dump($nombre_completo);
var_dump($presento_examen);

//Avanzado
$numero_preguntas = 5 + "5";									// int
$numero_respuestas = "5" + 5;									// int
$promedio_maximo = $numero_respuestas / 1.0;	// int ❌ (float ✅)
$michis = 3 + "5 michis";											// int

var_dump($numero_preguntas);
var_dump($numero_respuestas);
var_dump($promedio_maximo);
var_dump($michis);

echo "\n";