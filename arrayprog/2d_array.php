<?php 

$plan_type_income_rate_array = array(
	0=>array(0=>12,1=>13,2=>14,3=>11,4=>22,5=>32,6=>50,7=>51,8=>53,9=>54,),
	1=>array(0=>10,1=>15,2=>16,3=>18,4=>20,5=>31,6=>51,7=>56,8=>58,9=>55,),
);

$plan_type_income_rate_array[0] = 

//print_r($plan_type_income_rate_array[0]);
 // get value from array
//  $num =  $plan_type_income_rate_array[1][0][3];
// echo $num;

// $plan_type_income_rate_array[1][0][3] = 78;
// echo $plan_type_income_rate_array [1][0][3];


$plan_type = 1 ;
$downline_level = 4;
$package_amount = 500;
// (500 * 20)/100
$income_amount = ($package_amount * $plan_type_income_rate_array[$plan_type][$downline_level])/100 ;

echo "income_amount: $income_amount ";

 ?>