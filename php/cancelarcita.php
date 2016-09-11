<?php 
include_once "connection.php";
include_once "queries.php"; 

$PK = $_POST["pkc"]; 

$r = CancelarCita($PK);


?>