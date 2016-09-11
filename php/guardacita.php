<?php 
include_once "connection.php";
include_once "queries.php"; 

$Comentarios = $_POST["comentarios"]; 
$Donacion = (ISSET($_POST["donacionexitosa"])? 1:0 ); 
$PKCita = $_POST["cita"]; 

$r = SaveCita($Comentarios, $PKCita, $Donacion);

if($r==1){
header("Location: ../home.php?v=h&g=v");	
}
else{
header("Location: ../home.php?v=h&g=f");	
}



?>