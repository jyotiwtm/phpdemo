<?php
$count_array = array(10,20,36,54,57,64,77,87,97,11);

$sum_array = array();
foreach($count_array  as $my_key=> $my_value){
    echo " $my_key=> $my_value, ";
   $sum_array[] =  $my_value +5;
 if($my_value % 2 == 0){  
 echo "$my_value is even number .<br>";  
}
else{
 echo "$my_value is odd number .<br>"; 
}
}
//print_r($sum_array);


?>

