<?php

$ages = [19, 13, 60, 35];

// count(): Contar cantidad de items del array
echo count($ages);
echo "\n";

// array_push(): Agregar al final del array un dato
array_push($ages, 16);
var_dump($ages);

// is_array(): Validar si es array
$noArray = "";
var_dump(is_array($noArray));

// explode(): Convertir string a array
$fruitList = "mandarina,naranja,fresa";
$fruitArray = explode(",", $fruitList);
var_dump($fruitArray);

// implode(): 
$fruitList = ["mandarina","naranja","fresa"];
$fruitArray = implode("; ", $fruitList);
var_dump($fruitArray);