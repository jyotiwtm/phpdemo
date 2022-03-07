<?php 
$firstname = "jyoti";
$lastname = "yadav";

//echo "Hi ".$firstname." ".$lastname;

echo "Hi '$firstname' ";

// select * from user where login_id = 'superuser'

//$login_id = "superuser";

$sql = "select * from user where login_id = '".$_REQUEST['login_id']."'";
echo $sql; 

 ?>