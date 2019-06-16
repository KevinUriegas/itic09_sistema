<?php
	//se manda llamar la conexion
	include("../sesiones/verificar_sesion.php");
	$id_usuario =  $_SESSION["idUsuario"];

	$nombre      = $_POST["nombre"];
	$abreviatura = $_POST["abreviatura"];

	$nombre      = trim($nombre);
	$abreviatura = trim($abreviatura);

	$fecha=date("Y-m-d"); 
	$hora=date ("H:i:s");

	mysql_query("SET NAMES utf8");
	$cadena_verificar = mysql_query("SELECT id_carrera FROM carreras
	WHERE (nombre = '$nombre' OR abreviatura = '$abreviatura')",$conexion);
	$existe = mysql_num_rows($cadena_verificar);
	if($existe == 0){
		$insertar = mysql_query("INSERT INTO carreras 
									(
									nombre,
									abreviatura,
									id_registro,
									fecha_registro,
									hora_registro,
									activo
									)
								VALUES
									(
									'$nombre',
									'$abreviatura',
									'$id_usuario',
									'$fecha',
									'$hora',
									'1'
									)",$conexion)or die(mysql_error());
		echo "ok";
	}else{
		echo "duplicado";
	}

?>