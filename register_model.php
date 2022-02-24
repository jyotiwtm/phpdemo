<?php include('./connection.php'); ?>

<?php 
if(isset($_POST['submit'])){

$name = tres($_POST['name']);
$email = tres($_POST['email']);
$password = tres($_POST['password']);

 
 $sql = "INSERT INTO `user` (`name`,`email`,`password`) VALUES ('". $name ."','". $email ."','". $password ."') ";
 	$insert = mysqli_query($connection,$sql);
 	print_r($sql);
 	exit;
 	if($insert){
 		echo"data save sucessfully";
 	}

}

 ?>