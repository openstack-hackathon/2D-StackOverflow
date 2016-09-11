<?php 
include_once "connection.php";
include_once "queries.php"; 

$PKU = $_COOKIE["pkusuario"]; 
$PKA = $_POST["pka"]; 
$Cantidad = $_POST["puntosatransferir"]; 

$s = RestaPuntos($PKU, $Cantidad);
$r = SumaPuntos($PKA, $Cantidad);

echo $r;

if($r==1){
	header("Location: ../transferirpuntos.php?v=d&idam=$PKA&g=v");	
}
else{
	header("Location: ../transferirpuntos.php?v=d&idam=$PKA&g=f");
}



?>