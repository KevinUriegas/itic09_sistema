<?php
	include("../conexion/conexion.php");
	
	$fecha=date("Y-m-d"); 
	$hora=date ("H:i:s");

	$matricula = $_POST['matricula'];

	$cadena = mysql_query("SELECT
							id_alumno,
							CONCAT(
								personas.nombre,
								' ',
								personas.ap_paterno,
								' ',
								personas.ap_materno
							),
							no_control,
							(
								SELECT
									nombre
								FROM
									carreras
								WHERE
									carreras.id_carrera = alumnos.id_carrera
							),
							personas.sexo
						FROM alumnos
						INNER JOIN personas ON personas.id_persona = alumnos.id_persona
						WHERE alumnos.activo = '1'
						AND no_control = '$matricula'",$conexion);
	$row = mysql_fetch_array($cadena);
	$existe = mysql_num_rows($cadena);
	if($existe != 0){
		$foto ='../images/'.$row[2].'.jpg';
		if (file_exists($foto)){
			$imagen=$foto;
		}else{
			if ($row[4]=='M') {
				$imagen='../images/hombre.jpg';
			}else{
				$imagen='../images/mujer.jpg';
			}
		}
		$array = array($row[0],$row[1],$row[2],$row[3],$imagen);
		echo json_encode($array);
	}else{
		echo "no";
	}
?>