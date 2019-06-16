<?php
//se manda llamar la conexion
include("../sesiones/verificar_sesion.php");
$id_usuario =  $_SESSION["idUsuario"];

$idPersona = $_POST["idPersona"];
$idCarrera = $_POST["idCarrera"];
$noControl = $_POST["noControl"];

$noControl = trim($noControl);
$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");
mysql_query("SET NAMES utf8");
$cadena_verificar = mysql_query("SELECT id_persona FROM alumnos
	WHERE no_control = '$noControl'",$conexion);
	$existe = mysql_num_rows($cadena_verificar);
	if($existe == 0){
 		$insertar = mysql_query("INSERT INTO alumnos 
 								(
 								id_persona,
 								id_carrera,
 								no_control,
 								id_registro,
 								fecha_registro,
 								hora_registro,
 								activo
 								)
							VALUES
								(
 								'$idPersona',
 								'$idCarrera',
 								'$noControl',
 								'$id_usuario',
 								'$fecha',
 								'$hora',
 								'1'
								)
							",$conexion)or die(mysql_error());
 		echo "ok";
	}else{
		echo "duplicado";
	}
?>