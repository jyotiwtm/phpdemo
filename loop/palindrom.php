<?php 
$text = 'Madam';
$new_text = '';


$text_length = strlen($text);
echo " text_length: $text_length ";

for ($i= $text_length-1; $i >= 0; $i--) { 
	// code...
	// echo $text[$i];
	$new_text .= $text[$i];
}

echo " text: $text  new_text: $new_text ";

if($text == $new_text){
	echo "Given string $text is a palindrome";
}
else {
	echo "Given string $text is a not palindrome";
}

 ?>