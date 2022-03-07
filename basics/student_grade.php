<?php 
$marks = $_GET['marks'];

if($marks>=90 && $marks<=100)
{
	echo" student pass the A+ grade";

}
elseif($marks>=80 && $marks<90){
    echo" student pass the A grade";
}
elseif($marks>=70 && $marks<80){
    echo" student pass the B+ grade";
}
elseif($marks>=60 && $marks<70){
    echo" student pass the B grade";
}
elseif($marks>=50 && $marks<60){
    echo" student pass the C+ grade";
}
elseif($marks>=40 && $marks<50){
    echo" student pass the C grade";
}
else{
	echo"student marks minimum 40 than fail";
}

 ?>
