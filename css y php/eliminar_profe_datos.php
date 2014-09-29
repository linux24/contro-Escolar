<?php require_once('../Connections/proyecto.php'); ?>
<?php

$m = $_POST["matricula_profesor"];

$sql = "DELETE FROM proyecto.profesor WHERE matricula_profesor='".$m."'";
$resultado = mysql_query($sql,$proyecto) or die(mysql_error());

header("Location:http://localhost/proyecto/css%20y%20php/eliminacion.php");


?>