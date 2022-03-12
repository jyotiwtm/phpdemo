<?php 
first_condition
$ass_array = array("maths"=>45,"science"=>40,"physics"=>35,"biology"=>25,);
print_r ($ass_array);

foreach ($ass_array as $key => $value) {
	echo "$key =>$value .<br>";
}
// second_condition
$ass_array["maths"] = 45;
$ass_array["science"] =35;
$ass_array["english"] = 25;
$ass_array["sankarat"] = 15;
print_r($ass_array);

?>