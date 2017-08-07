<?php
define('HOST','rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');
      	define('USER','g1wbv4e6yvi6e710');
      	define('PASS','t2z30tum76qfgrzd');
		define('DB','n3ycfw3efefiynuy');
	 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	

if(isset($_POST["numero_identif"])){

$numero_identif = $_POST["numero_identif"];
$sql_query = "SELECT * FROM servicio where numero_identif=$numero_identif;";
$result = mysqli_query($con,$sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}else
{
	echo "No existe el supe";
mysqli_close($con);
}
?>
