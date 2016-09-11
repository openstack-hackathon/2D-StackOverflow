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


function GetCitasHospital(){	
	$x = new createConnection();
	$x -> connectToDatabase();
	$resultado = mysqli_query($x->myconn,
	"SELECT C.Cita,U.Nombre,U.Apellidos,U.Usuario,T.TipoDeSangre,U.PKUsuario,C.PKCita
	FROM Citas C 
	INNER JOIN Usuario U ON U.PKUsuario = C.FKUsuario
	INNER JOIN TipoDeSangre T ON T.PKTipoDeSangre = U.FKTipoDeSangre
	WHERE C.status = 1
	AND C.FKInstitucion = ".$_GET["idins"]);																
	return $resultado;
}


function GetDonadorByID($PK){
	$x = new createConnection();
	$x -> connectToDatabase();
	$resultado = mysqli_query($x->myconn,"SELECT CONCAT(Nombre,' ',Apellidos) AS Nombrecompleto FROM Usuario WHERE PKUsuario=$PK");
	$valido = mysqli_num_rows($resultado);
	$row = mysqli_fetch_row($resultado); 
	return $row[0];	
}

function SaveCita($Comentarios, $PKCita, $Donacion){
	$x = new createConnection();
	$x -> connectToDatabase();
	$resultado = mysqli_query($x->myconn,"UPDATE Citas SET comentario = '$Comentarios', donacionexitosa = $Donacion, status=3 WHERE PKCita = $PKCita");
	return $resultado;
}


function CancelarCita($PK){
	$x = new createConnection();
	$x -> connectToDatabase();
	$resultado = mysqli_query($x->myconn,"UPDATE Citas SET status = 2 WHERE PKCita = $PK");
	return $resultado;
}



?>