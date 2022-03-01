<?php 
if(isset($_POST['submit'])){
	$number = $_POST['number'];
	if($number%2 == 0){
		echo"$number is even number";
	}
	else{
		echo "$number is  odd number";
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
	<table>
	<form method="POST">
		<tr>
			<td>
				enter number
			</td>
			<td>
				<input type="text" name="number">
			</td>

		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="submit">
			</td>
		</tr>
		
	</form>
    </table>
</body>
</html>