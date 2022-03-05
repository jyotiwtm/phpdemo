<?php 

// boolean expression ? "HI" : "BYE";

$is_sunday = $_GET['p1'];

$str = $is_sunday == "true" ? "Today is sunday" : "Today is weekdays";

echo $str;




 ?>