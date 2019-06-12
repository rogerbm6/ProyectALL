<?php
session_start();

$usuario = $_POST["email"];
$pass = md5($_POST["pass"]);


include("../includes/admindb.inc.php");



$conex = connectdb("caminodejose");

$logi = mysqli_query($conex,
"SELECT `email` FROM `empleados` WHERE `email` = '".$usuario."'");

if (mysqli_num_rows($logi) == 1){

	$nom = mysqli_query($conex,
	"SELECT `nombre` FROM `empleados` WHERE `email` = '".$usuario."'");
	$nombre = mysqli_fetch_array($nom);

	$logi = mysqli_query($conex,
	"SELECT `passwords` FROM `empleados` WHERE `email` = '".$usuario."'");

	$registro = mysqli_fetch_array($logi);
	$usuario= $nombre["nombre"];
	if ($pass == $registro["passwords"]){

		$_SESSION["usuario"] = $usuario;
		$_SESSION["pass"] = $pass;
		header("Location:inicio/index.php");

	} else{
		header("Location:index.html");
		exit();
	}
} else {

	echo "adios";
	header("Location:index.html");
}


?>
