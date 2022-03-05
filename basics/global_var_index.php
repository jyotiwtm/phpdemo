<?php 
$x=10;
$y=5;

function mytest(){
	$GLOBALS['y'] = $GLOBALS['x']+$GLOBALS['y'];

}
mytest();
echo $y;

 ?>