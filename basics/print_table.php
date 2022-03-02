<?php 
if(isset($_POST['submit'])){

	$number = $_POST['number'];

	define('NUM', $number);
	for($i=0; $i<10-1; $i--){

		echo $i*NUM;
		echo '<br>';
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
		<form>
			<tr>
				<th>
					table of a number
				</th>
				<td>
					<input type="text" name="number">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</form>
	</table>

</body>
</html>