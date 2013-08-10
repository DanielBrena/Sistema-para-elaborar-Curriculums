<?php 
include 'configuracion.php';

$rs = mysql_query("SELECT MAX(id_p) AS id FROM personas");
if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
}
echo $id;

 ?>