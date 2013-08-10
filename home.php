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
  
	
<div class="container-fluid">
    <div class="row-fluid">
     
      <div id="mostrar">

      </div>
  
      <div class="span2">
      <!--Sidebar content-->
         <h1></h1>

      </div>
      <div class="span10">


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
        
        
         
       

        $num_filas = mysql_num_rows($sql);

        if($num_filas == 1){
          
         echo "<div id='info_usuario'>";
         echo "<div id='editar'> <a href='editar.php?usuario=".$id_p."'>Editar</a></div>";

            echo "<h1>".$nombre." ".$apellido_p." ".$apellido_m."</h1>";
            echo "<h3>".$egresado."</h3>";
            echo "<h3>".$ultimogrado."</h3>";
            echo "<small>".$carrera."</small>";

            echo "<address>".$direccion."</br>";
            echo $municipio." ".$estado." ".$ciudad."</br>";
            
            echo "<abbr title='Celular'>C: </abbr>".$celular;
            echo "</address>";

            echo "<address>"."<a href='mailto:#'>".$correo."</a></br>";
            echo "<abbr title='Nacionalidad'><i class='icon-question-sign' ></i></abbr>"." ".$nacionalidad."</br>";
            echo $estadocivil."</br>";
            echo "</address>"; 


            echo "<h4>Capacidades</h4>";           
            echo $descripcion2;

             echo "</br>";

            echo "<h4>Habilidades</h4>";           
            echo $descripcion3;

           
            


         echo "</div>";

        }else{

         echo "<div id='info_usuario'>";
          echo "
            <h1>No existe</h1>
          ";

          echo "</div>";
        }

      }
         



       ?>
        
      </div>
    </div>
</div>



<?php 
include 'include/script.inc';

 ?>
</body>
</html>