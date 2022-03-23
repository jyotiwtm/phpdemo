<?php 
$number = 5;
$i = $number;
$fact=$number;
do {

	$fact = $fact * ($i-1);

	echo "<br/> $fact = $fact * ($i-1) ";
	$i--;

} while ($i > 1);

echo "factorials of $number is $fact";

 ?>