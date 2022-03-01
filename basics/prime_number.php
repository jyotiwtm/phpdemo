<?php 

function isprimenumber($number)
{
	$is_prime_number = true;
	for($i=2;$i<$number; $i++){
		if($number % $i == 0 ){
			$is_prime_number = false;
			break;
		}
	}
	return $is_prime_number;
}
$number1 = $_GET['num'];
// $number1 = 51;
echo isprimenumber($number1) ? "This is prime number" : "This is not a prime number";

 ?>
