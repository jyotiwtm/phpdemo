<?php 
$fees = array("jyoti"=>400,"pragati"=>400,"priyanka"=>400,"roshni"=>400);

$keys = array_keys($fees,400);

for ($i=0; $i < 4 ; $i++) { 
	echo $keys[$i] ."<br>";
}

 ?>