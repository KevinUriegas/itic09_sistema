<?php

$bd_host     = "localhost";
$bd_usuario  = "root";
$bd_password = "kevinalexis";
$bd_base     = "utltic2019";

$conexion = mysql_connect($bd_host,$bd_usuario,$bd_password) ;
mysql_select_db($bd_base,$conexion)or die (mysql_error());
date_default_timezone_set('America/Monterrey');
?>