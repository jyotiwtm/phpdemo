<?php 
function factorialofnumber($num){

  if($num==0){
  	return 1;
  }
  else{
  	return $num * factorialofnumber($num-1);
  }
  
}

print_r(factorialofnumber(4)."\n");

 ?>

