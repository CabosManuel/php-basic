<?php

switch ($i) {
	case 0:
		echo "i es igual a 0";
		break;
	case 1:
		echo "i es igual a 1";
		break;
	case 2:
		echo "i es igual a 2";
		break;
}

# Switch usando strings
switch ($i) {
	case "manzana":
		echo "i es una manzana";
		break;
	case "barra":
		echo "i es una barra";
		break;
	case "pastel":
		echo "i es un pastel";
		break;
}

# Switch sentencias vacías
switch ($i) {
	case 0:
	case 1:
	case 2:
			echo "i es menor que 3 pero no negativo";
			break;
	case 3:
			echo "i es 3";
}