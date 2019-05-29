<?php

	include("../conexion/conexion.php");

	$usuario = $_POST['usuario'];
	$pass    = $_POST['vContra1'];
	$pass    = md5($pass);

	$cadena = mysql_query("SELECT contra,id_usuario,pvez FROM usuarios WHERE usuario = '$usuario'",$conexion);
	$row_contra = mysql_fetch_array($cadena);

	if($row_contra[0] == $pass){
		echo "repetida";
	}else{
		$cadena_actualizar = mysql_query("UPDATE usuarios SET contra = '$pass', pvez = '0' WHERE id_usuario = '$row_contra[1]'",$conexion);
		echo "ok";
	} 
?>