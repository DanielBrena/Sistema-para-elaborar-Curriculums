<?php 
include 'configuracion.php';



function inicio_sesion($usuario,$contrasena){
	$sql = mysql_query("SELECT id_admin FROM admin WHERE admin='$usuario' AND password='$contrasena'");
	$datos = mysql_fetch_array($sql);
	$num_filas = mysql_num_rows($sql);

	if($num_filas == 1){
		$_SESSION['admin'] = $datos['id_admin'];

	}

}



 ?>