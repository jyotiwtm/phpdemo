<?php 

$tshirt_size = $_GET['size'];

switch ($tshirt_size) {
	case 'S':
		echo "Tshirt size is small ";
		break;
	case 'M':
		echo "Tshirt size is medium ";
		break;	
		case 'L':
		echo "Tshirt size is Larg ";
		break;	
		case 'XL':
		echo "Tshirt size is extralareg ";
		break;	
		case 'XXL':
		echo "Tshirt size is large ";
		break;	
	
	default:
		echo "invlaid size";
		break;
}



 ?>