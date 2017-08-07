
<?php 
header( 'Content-Type: text/html;charset=utf-8' );

          define('HOST','rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');
      	define('USER','g1wbv4e6yvi6e710');
      	define('PASS','t2z30tum76qfgrzd');
		define('DB','n3ycfw3efefiynuy');
	 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	
	$cubrir= $_GET['cubrir'];
	$sin_cubrir= $_GET['sin_cubrir'];
	$fecha_cob= $_GET['fecha_cob'];
	$porcentaje24= $_GET['porcentaje24'];
	$id_servicio= $_GET['id_servicio'];
	$turno_a_cubrir= $_GET['turno_a_cubrir'];
	$dia= $_GET['dia'];
	if($cubrir == '' || $sin_cubrir== '' || $porcentaje24 == '' || $fecha_cob== '' || $dia== '' || $id_servicio == '' || $turno_a_cubrir=='')
		{
	
		echo 'please fill all values';
		}
		else{
	$sql = "INSERT INTO cobertura24 (cubrir,sin_cubrir,fecha_cob,dia,porcentaje24,id_servicio,turno_a_cubrir) VALUES('$cubrir','$sin_cubrir','$fecha_cob','$dia','$porcentaje24','$id_servicio','$turno_a_cubrir')";
	
	if(mysqli_query($con,$sql)){
			echo 'successfully registered';
	
	    }
		mysqli_close($con);
	}

?>
