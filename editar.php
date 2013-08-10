<?php 


session_start();
if (empty($_SESSION["admin"])) 
  {
 
       header("Location: index.php");
  }

@$logout = $_GET['q'];
if($logout == 'logout'){
	session_destroy();
	header('location:index.php');
}

//usuarios


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <style type="text/css">
  
   #info_usuario
   {
    margin-left: 200px;
      max-width: 800px;
        padding:19px 29px 29px;
       
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
        text-align: center;

   }
   #editar{
    float: right;
    width: 50px;
    height: 20px;
    background-color:#f5f5f5;
    color: #a3a9ad;
   }
  
  
   </style>
  <?php 
  include 'include/header.inc';
   ?>




 <style type="text/css">
      body{
            background-color:#f5f5f5; 
      }
      .form-inline {
        max-width: 455px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
        }

</style>


      <?php 
      

      include "include/configuracion.php";
      if($_GET){
         @$usuario = $_GET['usuario'];

        //$sql = mysql_query("SELECT * FROM personas WHERE id_p= '$usuarios'");
         $sql = mysql_query("SELECT * FROM personas WHERE id_p='$usuario'");
         while($fila = mysql_fetch_array($sql)){
            extract($fila);

         }
           $sql2 = mysql_query("SELECT * FROM capacidades WHERE capid_fk='$usuario'");
         while($fila2 = mysql_fetch_array($sql2)){
            extract($fila2);
             
         }

         $sql3 = mysql_query("SELECT * FROM habilidades WHERE habid_fk='$usuario'");
         while($fila3 = mysql_fetch_array($sql3)){
            extract($fila3);
            

         }
      
      
      	echo '<div class="container">
       <div id="alerta"></div>
        <form class="form-inline" action="" method="POST">
		<h2 class="form-signin-heading">Editar</h2>
    	<div class="control-group">
    	<input type="hidden" id="id_p" value="'.$id_p.'">
        <input type="text" id="nombre" placeholder="*Nombre" class="input-large" value="'.$nombre.'">
        <input type="text" id="apellido_p" placeholder="*Apellidos paterno" class="input-large" value="'.$apellido_p.'">
    	</div>

    	<div class="control-group">
        <input type="text" id="apellido_m" placeholder="*Apellidos materno" class="input-large" value="'.$apellido_m.'">
        <input type="email" id="correo" placeholder="*Correo" class="input-large" value="'.$correo.'">
        </div>
    <div class="control-group">
       <input type="text" id="telefono" placeholder="Telefono" class="input-large" value="'.$telefono.'">
       <input type="text" id="celular" placeholder="*Celular" class="input-large" value="'.$celular.'">
    </div>
    <div class="control-group">
    <input type="text" id="carrera" placeholder="*Carrera" class="input-block-level" value="'.$carrera.'">

    </div>
    <div class="control-group">
       <input type="text" id="egresado" placeholder="*Escuela de Egreso" class="input-large" value="'.$egresado.'">
       <input type="text" id="ultimogrado" placeholder="*Ultimo grado de estudios" class="input-large" value="'.$ultimogrado.'">
    </div>
    <div class="control-group">
       <input type="text" id="nacionalidad" placeholder="Nacionalidad" class="input-large" value="'.$nacionalidad.'">
       <input type="text" id="estadocivil" placeholder="Estado Civil" class="input-large" value="'.$estadocivil.'">
    </div>
    <div class="control-group">
       <input type="text" id="municipio" placeholder="*Municipio" class="input-large" value="'.$municipio.'">
       <input type="text" id="estado" placeholder="Estado" class="input-large" value="'.$estado.'">
    </div>
    <div class="control-group">
       <input type="text" id="ciudad" placeholder="*Ciudad" class="input-large" value="'.$ciudad.'">
       <input type="text" id="direccion" placeholder="*Direccion" class="input-large" value="'.$direccion.'">
    </div>

    <div class="control-group">
       <textarea id="capacidades" rows="5" placeholder="*Capacidades" >'.$descripcion2.'</textarea>
        <textarea id="habilidades" rows="5" placeholder="*Habilidades" value="">'.$descripcion3.'</textarea>
    </div>

    <button id="actualizar" type="button" class="btn btn-primary" data-loading-text="Creando...">Actualizar</button>
	  <button id="cancelar" type="button" class="btn" data-loading-text="Creando...">Cancelar</button>

     </form>
      		
</div>';

	echo "<script src='js/actualizar.js'></script>";

    }
		?>


<?php
include 'include/script.inc';
 ?>
</body>
</html>