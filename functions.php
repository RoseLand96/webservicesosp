<?php 
header( 'Content-Type: text/html;charset=utf-8' );


function ejecutarSQLCommand($commando){
 
  $mysqli = new mysqli("rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "g1wbv4e6yvi6e710", "t2z30tum76qfgrzd", "n3ycfw3efefiynuy");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ( $mysqli->multi_query($commando)) {
     if ($resultset = $mysqli->store_result()) {
    	while ($row = $resultset->fetch_array(MYSQLI_BOTH)) {
    		
    	}
    	$resultset->free();
     }
    
   
}



$mysqli->close();
}

function getSQLResultSet($commando){
 
 
  $mysqli = new mysqli("rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "g1wbv4e6yvi6e710", "t2z30tum76qfgrzd", "n3ycfw3efefiynuy");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ( $mysqli->multi_query($commando)) {
	return $mysqli->store_result();
	
     
    
   
}



$mysqli->close();
}


?>
