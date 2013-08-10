<?php 
include "include/configuracion.php";

@$q = $_GET['buscarpalabra'];
$sql = mysql_query("SELECT * FROM personas WHERE nombre LIKE '%$q%' or apellido_p LIKE '%$q%' ORDER BY id_p LIMIT 5");
while($fila = mysql_fetch_array($sql)){
  $nombre = $fila['nombre'];
  $apellido_p = $fila['apellido_p'];
  $n_nombre = '<b>'.$q.'</q>';
  $n_apellido_p = '<b>'.$q.'</q>';
  $final_nombre = str_replace($q, $n_nombre, $nombre);
  $final_apellido_p = str_replace($q, $n_apellido_p, $apellido_p);
  $asd = $fila['id_p'];
  
  ?>

  <div class="display_box" align="left">
  <?php 
  		echo "<a href='?usuario=".$asd."'>".$final_nombre." ".$final_apellido_p."</a>";
    	//echo "<a href='home.php' name='post' title='".$asd."'>".$final_nombre." ".$final_apellido_p."</a>";

   ?>
	
	
	</div>
	<?php 
}


 ?>









