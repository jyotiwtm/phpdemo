<html>
<head>
<title>PHP Program To find the Fibonacci series of a given number</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="num1" value="" placeholder="Enter a number"/> </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/> </td>
</tr>
</table>
</form>
<?php
function Fibonacci($number)
{
// if and else if to generate first two numbers
if ($number == 0)
return 0;
else if ($number == 1)
return 1;
// Recursive Call to get the upcoming numbers
else
return (Fibonacci($number-1) + Fibonacci($number-2));
}

if(isset($_POST['submit']))
{
$n = $_POST['num1'];
echo "Fibonacci series of $n is :"."
";
for ($counter = 0; $counter < $n; $counter++)
{
echo Fibonacci($counter),'   ';
}
return 0;
}
?>
</body>
</html>