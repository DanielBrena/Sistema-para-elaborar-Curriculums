<?php 
session_start();

if (empty($_SESSION["admin"])) 
  {
    //echo "<a href="cerrarsesion.php" title="Cerrar sesión">Bienvenid@</a>" . 
       header("Location: index.php");
  }

@$logout = $_GET['q'];
if($logout == 'logout'){
	session_destroy();
	header('location:index.php');
}

?>


 

<!DOCTYPE html>
<html lang="en">
	
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


      
      
      
      		<div class="container">
            <div id="alerta"></div>

  <form class="form-inline" action="" method="POST">
    <h2 class="form-signin-heading">Crear</h2>
    <div class="control-group">
        <input type="text" id="nombre" placeholder="*Nombre" class="input-large">
        <input type="text" id="apellido_p" placeholder="*Apellidos paterno" class="input-large">
    </div>
		<div class="control-group">
        <input type="text" id="apellido_m" placeholder="*Apellidos materno" class="input-large">
        <input type="email" id="correo" placeholder="*Correo" class="input-large">
        </div>
    <div class="control-group">
       <input type="text" id="telefono" placeholder="Telefono" class="input-large">
       <input type="text" id="celular" placeholder="*Celular" class="input-large">
    </div>
    <div class="control-group">
    <input type="text" id="carrera" placeholder="*Carrera" class="input-block-level">

    </div>
    <div class="control-group">
       <input type="text" id="egresado" placeholder="*Escuela de Egreso" class="input-large">
       <input type="text" id="ultimogrado" placeholder="*Ultimo grado de estudios" class="input-large">
    </div>
    <div class="control-group">
       <input type="text" id="nacionalidad" placeholder="Nacionalidad" class="input-large">
       <input type="text" id="estadocivil" placeholder="Estado Civil" class="input-large">
    </div>
    <div class="control-group">
       <input type="text" id="municipio" placeholder="*Municipio" class="input-large">
       <input type="text" id="estado" placeholder="Estado" class="input-large">
    </div>
    <div class="control-group">
       <input type="text" id="ciudad" placeholder="*Ciudad" class="input-large">
       <input type="text" id="direccion" placeholder="*Direccion" class="input-large">
    </div>

    <div class="control-group">
       <textarea id='capacidades' rows="5" placeholder="*Capacidades"></textarea>
        <textarea id='habilidades' rows="5" placeholder="*Habilidades"></textarea>
    </div>

    <button id="crear" type="button" class="btn btn-primary" data-loading-text="Creando...">Crear</button>
	  <button id="cancelar" type="button" class="btn" data-loading-text="Creando...">Cancelar</button>

     </form>
      		
</div>
      	
      <!--Body content-->
        

      


<?php 
include 'include/script.inc';
 ?>
</body>
</html>