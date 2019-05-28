<?php

function connectdb($db){
	$con = mysqli_connect("localhost","root","majada");
	mysqli_select_db($con,$db);

	return $con;
}

?>
