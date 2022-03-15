<?php 
 $array = array(5,3,879861,4,86, 44, 87, 90, 93, 98, 37);

 foreach ($array as $value) {
	echo isprimenumber($value) ? "This is prime number" : "This is not a prime number";
   
 	
 }
function isprimenumber($number)
{
	$is_prime_number = true;
	for($i=2;$i<$number; $i++){
		echo " $number % $i ".$number % $i." == 0 <br/>";
		if($number % $i == 0 ){
			$is_prime_number = false;
			break;
		}
	}
	return $is_prime_number;
}

$number1 = $_GET['num'];
// $number1 = 51;

 ?>
