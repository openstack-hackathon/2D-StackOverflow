<?php 
include_once "connection.php";
include_once "queries.php"; 

$PKCita = $_POST["cita"];
$PKU = $_COOKIE["pkusuario"]; 
$cita = $_POST["fechacita"]; 

$r = SaveCitaUsuario($PKCita, $PKU, $cita);

if($r==1){

	header("Location: ../homeU.php?v=h&g=v");	
}
else{
	header("Location: ../homeU.php?v=h&g=f");
}



?>