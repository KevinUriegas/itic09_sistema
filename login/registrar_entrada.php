<?php
	include("../conexion/conexion.php");
	
	$fecha=date("Y-m-d"); 
	$hora=date ("H:i:s");

	$matricula = $_POST['matricula'];

	$cadena = mysql_query("SELECT id FROM registros WHERE matricula = '$matricula' AND fecha_ingreso = '$fecha'",$conexion);
	$existe = mysql_num_rows($cadena);

	if($existe == 0){
		$cadena1 = "INSERT INTO registros (id_alumno,matricula,fecha_ingreso,hora_ingreso,activo)
					VALUES('')"
	}else{

	}

	if($row_contra[0] == $pass){
		echo "repetida";
	}else{
		$cadena_actualizar = mysql_query("UPDATE usuarios SET contra = '$pass', pvez = '0' WHERE id_usuario = '$row_contra[1]'",$conexion);
		echo "ok";
	} 
?>