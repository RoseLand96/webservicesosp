<?php
include('functions.php');
$id=$_GET["nombre_servicio"];


if($resultset=getSQLResultSet("SELECT * FROM `servicio` WHERE nombre_servicio='$id'")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}

?>

