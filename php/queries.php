<?php 
//include_once "connection.php";

function GetEstablecimientoByID($ID){
	$x = new createConnection();
	$x -> connectToDatabase();
	$resultado = mysqli_query($x->myconn,"SELECT Nombre FROM Institucion WHERE PKInstitucion=$ID");
	$valido = mysqli_num_rows($resultado);
	$row = mysqli_fetch_row($resultado); 
	return $row[0];
}

function GetInstituciones(){
	$x = new createConnection();
	$x -> connectToDatabase();
	$resultado = mysqli_query($x->myconn,"SELECT I.PKInstitucion,I.Nombre,I.Direccion FROM Institucion I INNER JOIN UsuarioInstitucion U ON U.FKInstitucion = I.PKInstitucion WHERE U.FKUsuario = ".$_COOKIE["pkusuario"]." AND I.status =1 AND U.status =1");																
	return $resultado;
}


?>