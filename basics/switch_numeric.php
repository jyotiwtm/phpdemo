<?php 
$income_type = $_GET['num'];

switch ($income_type) {
	case 1:
		echo"this is single leg income";
		break;
		case 2:
		echo"this is  Refferal income";
		break;
		case 3:
		echo"this is dowline income";
		break;
		case 4:
		echo"this is binary income";
		break;
		case 5:
		echo"this is  cto income";
		break;
	
	default:
		echo "income not found";
		break;
}

 ?>