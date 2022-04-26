<?php 
include '../connection.php';
include '../header.php';

$query = "SELECT sum(remaining_amount) AS wallet FROM `transaction` WHERE uid=100 and txn_mode = 0";

$result = mysqli_query($connection,$query);

if(mysqli_num_rows($result) > 0){

$row = mysqli_fetch_object($result);
if(!empty($row->wallet)){
	echo "Wallet = $row->wallet ";	
} else {
	echo "Wallet = 0 ";
}

}
 ?>