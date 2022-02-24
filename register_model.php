<?php include('./connection.php'); ?>

<?php 
if(isset($_POST['submit'])){

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

 
 $sql = "INSERT INTO `user` (`name`,`email`,`password`) VALUES ('". $name ."','". $email ."','". $password ."') ";
 	$insert = mysqli_query($Connection,$sql);
 	
 	if($insert){
 		echo"data save sucessfully";
 	}
    else{
        echo"data save sucessfully";
    }
  
}

}
