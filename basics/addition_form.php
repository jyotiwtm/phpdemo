<?php

if(isset($_POST['submit'])){
	$number1 = $_POST['number1']; 
    $number2 = $_POST['number2']; 
    $result = $number1+$number2;

    echo "sume of", " . $result .";

} 

 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body><table>
	<form method="POST">
		
			<tr>
				<td>
					number1:
				</td>
				<td><input type="text" name="number1"></td>
			</tr>
			<tr>
				<td>
					number2:
				</td>
				<td><input type="text" name="number2"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>


		</table>
		
		</form>
	
</body>
</html>