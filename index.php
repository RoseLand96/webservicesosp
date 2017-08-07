<?php 
        define('HOST','rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');
      	define('USER','g1wbv4e6yvi6e710');
      	define('PASS','t2z30tum76qfgrzd');
		define('DB','n3ycfw3efefiynuy');
	 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$username = $_POST['numero_identif'];
		
	$password = $_POST['password'];
	$sql = "SELECT * FROM supervisor WHERE numero_identif='$username' AND password='$password'";
	
	$result = mysqli_query($con,$sql);
	$check = mysqli_fetch_array($result);
	
	if(isset($check))
	{
	echo "success";
	}
	else{
	echo "failure";
	}
		mysqli_close($con);
	}

?>