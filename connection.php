<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";
// Create connection
$Connection = mysqli_connect($servername, $username, $password ,$dbname);

// Check connection
if (!$Connection) {
  die("Connection failed: " . mysqli_connect_error());
}
// else{
//   echo "Connected successfully";

// }

 ?>
