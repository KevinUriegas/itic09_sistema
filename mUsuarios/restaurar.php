<?php
	//se manda llamar la conexion
	include("../conexion/conexion.php");
    
    $ide     = $_POST["idUsuario"];
	
	$fecha=date("Y-m-d"); 
	$hora=date ("H:i:s");

	mysql_query("SET NAMES utf8");
	$insertar = mysql_query("UPDATE usuarios SET
								contra='12345'
							WHERE id_usuario='$ide'",$conexion)or die(mysql_error());

?>