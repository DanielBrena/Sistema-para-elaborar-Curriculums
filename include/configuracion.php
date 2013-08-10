<?php 

$servidor = 'localhost';
$usuario = 'root';
$contrasena = 'danielbrena2';
$baseDeDatos = 'bd_curriculum';

$conexion = mysql_connect($servidor,$usuario,$contrasena);

if(!$conexion){
	die("Error".mysql_error());
}

mysql_select_db($baseDeDatos,$conexion);




 ?>