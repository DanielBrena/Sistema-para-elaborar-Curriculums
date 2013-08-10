<?php 
include 'configuracion.php';
/*
$servidor = 'localhost';
$usuario = 'root';
$contrasena = 'danielbrena2';
$baseDeDatos = 'curriculum';

$conexion = mysql_connect($servidor,$usuario,$contrasena);

if(!$conexion){
	die("Error".mysql_error());
}

mysql_select_db($baseDeDatos,$conexion);
*/
$nombre = $_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$carrera = $_POST['carrera'];
$ultimogrado = $_POST['ultimogrado'];
$egresado = $_POST['egresado'];
$nacionalidad = $_POST['nacionalidad'];
$estadocivil = $_POST['estadocivil'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$celular = $_POST['celular'];

$habilidades = $_POST['habilidades'];
$capacidades = $_POST['capacidades'];

//obtener el ultimo id
$rs = mysql_query("SELECT MAX(id_p) AS id FROM personas");
if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]) + 1;
}


if($nombre != "" && $apellido_p != "" && $apellido_m != "" &&  $correo != ""){

	$crear = mysql_query("INSERT INTO  personas (id_p,nombre,apellido_p,apellido_m,correo,telefono,carrera,ultimogrado,egresado,nacionalidad,estadocivil,municipio,estado,ciudad,direccion,celular)
	VALUES ('$id','$nombre','$apellido_p','$apellido_m','$correo','$telefono','$carrera','$ultimogrado','$egresado','$nacionalidad','$estadocivil','$municipio','$estado','$ciudad','$direccion','$celular')");
	$crear2 = mysql_query("INSERT INTO capacidades (id_cap, descripcion2, capid_fk) VALUES (null, '$capacidades', '$id')");

	$crear3 = mysql_query("INSERT INTO habilidades (id_hab, descripcion3, habid_fk) VALUES (null,'$habilidades', '$id')");

	echo " <div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><h4>Exito!</h4>Se ha creado con Exito! Se redireccionara..</div><script>function re(){location.href='home.php'} setTimeout('re()',3000)</script>";
}else{
	echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button><h4>Error</h4>Oops! No se pudo Crear</div>";
}




mysql_close($conexion);
//header('location:../create.php');




 ?>