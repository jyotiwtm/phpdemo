<?php
include('./connection.php'); 
include('./function_lib.php'); 
include './header.php';


if(isset($_POST['submit'])){
print_r($_POST);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$mobile = trim($_POST['mobile']);

$error_messages = [];
if(empty($name)){
   $error_messages['name'] = "Name is required"; 
}
else{
  // checking for min 3 char name
  $name_length = strlen($name);
  if($name_length < 3){

   $error_messages['name'] = "Name must be of 3 char long"; 
  }
}
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if(empty($email)){
   $error_messages['email'] = "Email is required"; 
}
if(!preg_match ($pattern, $email)){
    $error_messages['email'] = "Email Id format is incorrect"; 
}
if(empty($password)){
 $error_messages['password'] = "password is requerd";
}

else{
  $password_length = strlen($password);
  if($password_length<6){
   $error_messages['password'] = "password must be 6 character length";
  }
}

// if there are no error
if(count($error_messages) == 0 ){

$sql = "INSERT INTO `user` (`name`,`email`,`password`) VALUES ('". $name ."','". $email ."','". $password ."') ";
    $insert = mysqli_query($connection,$sql);
    // print_r($sql);
    // exit;
    if($insert){
        echo"data save sucessfully";
    }
} 
// otherwise errors
else {
    //redirect("register.php?error");
    

}
 
 

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<section class="vh-100" style="background-color: #eee;">
  <div class="container h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <?php
    //             echo '<ul class="alert alert-danger">';
    // foreach ($error_messages as $key => $value) {
    //     echo "<li>$value</li>";
    // }
    // echo "</ul>";
                ?>
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" method="POST" action="">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c" >Your Name</label>
                      <input type="text" id="form3Example1c" class="form-control" name="name" />

                      <div class="text-danger"><?= !empty($error_messages['name']) ? $error_messages['name'] : '' ?></div>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example3c" class="form-control"  name="email" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="mobile" />
                      <label class="form-label" for="form3Example1c" >Your mobile</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" name="password" />
                      <label class="form-label" for="form3Example4c" >Password</label>
                      <div class="text-danger"><?= !empty($error_messages['password']) ? $error_messages['password'] : '' ?></div>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" name="password" />
                      <label class="form-label" for="form3Example4cd" >Repeat your password</label>
                    </div>
                  </div>

                  <!-- <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in 
                      <a href="#!">Terms of service</a>
                    </label>
                  </div> -->

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" name="submit" value="submit">Register</button>
                  </div>

                </form>

              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>