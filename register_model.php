<?php include('./connection.php'); ?>

<?php 
if(isset($_POST['submit'])){

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$mobile = trim($_POST['mobile']);
 
 $sql = "INSERT INTO `user` (`name`,`email`,`password`) VALUES ('". $name ."','". $email ."','". $password ."') ";
 	$insert = mysqli_query($connection,$sql);
 	// print_r($sql);
 	// exit;
 	if($insert){
 		echo"data save sucessfully";
 	}

}

 ?>