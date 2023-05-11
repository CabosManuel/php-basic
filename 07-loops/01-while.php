<?php

# while
$i = 0;

while ($i < 10) {
	$j = $i;
	echo $i." ";
	while ($j > 0) {
		echo "*";
		$j--;
	}
	echo "\n";
	$i++;
}

/*
0 
1 *
2 **
3 ***
4 ****
5 *****
6 ******
7 *******
8 ********
9 *********
*/

# do while
$usernames = ["Kboss", "kboss", "KbossMC"];

do {
	$username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");
	echo "\n";
} while( in_array($username, $usernames) );