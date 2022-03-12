<?php
//$toys = array("teddy");



//$toys = array();
//$toys[0] = "teddy";


$toys = array();
$toys[0] = "teddy";
$toys[1] = "car";
$toys[3] = "bike";

echo $toys[1];
//$toys = ["teddy"];

print_r($toys);
echo count($toys);
foreach ($toys as $key => $value) {
    echo "<br/> $key => $value ";
}
?>