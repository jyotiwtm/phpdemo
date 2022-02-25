<?php include('./connection.php'); ?>
<?php 
if (emptyempty ($_POST["name"])) {  
    $errMsg = "Error! You didn't enter the Name.";  
             echo $errMsg;  
} else {  
    $name = $_POST["name"];  
}  

  if (emptyempty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = input_data($_POST["mobileno"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    }  
$email = $_POST ["Email"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Email is not valid.";  
            echo $ErrMsg;  
} else {  
    echo "Your valid email address is: " .$email;  
}  
?>
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
