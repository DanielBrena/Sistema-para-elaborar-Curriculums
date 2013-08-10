<?php 
include 'configuracion.php';

$id_p = $_POST['id_p'];
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


if($nombre != "" && $apellido_p != "" && $apellido_m != "" &&  $correo != ""){

	$actualizar = mysql_query("UPDATE personas SET nombre = '$nombre', apellido_p = '$apellido_p', apellido_m = '$apellido_m', correo = '$correo', telefono= '$telefono',carrera = '$carrera',ultimogrado = '$ultimogrado',egresado ='$egresado',nacionalidad='$nacionalidad',estadocivil='$estadocivil',municipio='$municipio',estado='$estado',ciudad='$ciudad',direccion='$direccion',celular='$celular' WHERE id_p ='$id_p'");
	
	$actualizar2 = mysql_query("UPDATE capacidades SET descripcion2 ='$capacidades' WHERE  capid_fk= '$id_p'");

	$actualizar3 = mysql_query("UPDATE habilidades SET descripcion3='$habilidades' WHERE habid_fk='$id_p'");

	echo " <div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><h4>Exito!</h4>Se ha Actualizado! Se redireccionara..</div><script>function re(){location.href='home.php?usuario=".$id_p."'} setTimeout('re()',3000)</script>";
}else{
	echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button><h4>Error</h4>Oops! No se pudo Actualizar</div>";
}




mysql_close($conexion);
//header('location:../create.php');




 ?>