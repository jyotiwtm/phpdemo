<?php 
$user = array(
);

$user[0] = 
array("username"=>"abc","password"=>"cnsr","accountnumber"=>"1232342","topupdata"=>"1313","mobile"=>"121836478","uid"=>"26426242");
$user[1] = array("username"=>"abc","password"=>"cnsr","accountnumber"=>"1232342","topupdata"=>"1313","mobile"=>"121836478","uid"=>"26426242");

$user[2] = array("username"=>"abc","password"=>"cnsr","accountnumber"=>"1232342","topupdata"=>"1313","mobile"=>"121836478","uid"=>"26426242");

$user[3] = array("username"=>"abc","password"=>"cnsr","accountnumber"=>"1232342","topupdata"=>"1313","mobile"=>"121836478","uid"=>"26426242");


for ($i=0; $i <=  3 ; $i++) { 
 	
foreach ($user[$i] as $key => $value) {


	echo "$key: $value". " | ";
	
}

echo "<br>";

}
echo"<pre>";
print_r($user);
echo"</pre>";

 ?>