<?php
//se manda llamar la conexion
// include("../conexion/conexion.php");
include("../sesiones/verificar_sesion.php");
$id_usuario =  $_SESSION["idUsuario"];

$noControl = $_POST["noControl"];
$idCarrera = $_POST["idCarrera"];
$ide       = $_POST["ide"];

$noControl = trim($noControl);
$idCarrera = trim($idCarrera);
$ide       = trim($ide);

$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");

mysql_query("SET NAMES utf8");
$cadena_verificar = mysql_query("SELECT id_persona FROM alumnos
	WHERE no_control = '$noControl'",$conexion);
$existe = mysql_num_rows($cadena_verificar);

if($existe == 0){
	$insertar = mysql_query("UPDATE alumnos SET
							no_control='$noControl',
							id_carrera='$idCarrera',
							id_registro='$id_usuario'
							WHERE id_alumno='$ide'",$conexion)or die(mysql_error());
	echo "ok";
}else{
	echo "duplicado";
}
?>