<?php
$run = $_GET['run'];

// $run >= 100 this is boolean expression
echo $run >= 100;

echo $run >= 100 && $run < 200;


if($run>= 100 && $run < 200){
	echo "this is single centuary";
	// $a = $b + $c;
} else if($run>= 200 && $run < 300){
	echo "this is double centuary";
	// $a = $b + $c;
} else {
	echo "this is not centuary";
}


?>

