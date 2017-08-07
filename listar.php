<?php
$db_host = "rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
     $db_name = "n3ycfw3efefiynuy";
     $db_user = "g1wbv4e6yvi6e710";
     $db_password = "t2z30tum76qfgrzd";
    
     $connection = mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
    
mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
    @mysql_query("SET NAMES 'utf8'");
if(isset($_POST["numero_identif"])){

$numero_identif = $_POST["numero_identif"];
$sql_query = "SELECT * FROM servicio where numero_identif=$numero_identif;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}else
{
	echo "No existe el supe";
mysql_close($connection);
}
?>