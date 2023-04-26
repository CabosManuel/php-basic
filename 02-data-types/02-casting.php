<?php

// String a int -------------
$number = "5";
var_dump( $number );

$number = (int) $number;
var_dump( $number );

// float a int --------------
$days = 30.4;
$days = (int) $days;
var_dump( $days );

// int a bool ---------------
$flag = "a";
var_dump( (bool) $flag );

echo "\n";