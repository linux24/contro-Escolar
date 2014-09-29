
<?php require_once('../Connections/proyecto.php'); ?>
<?php
$matricula_tutor = $_POST["matricula_tutor"];
$nombre = $_POST["nombre"];
$ap = $_POST["apellido_paterno"];
$am = $_POST["apellido_materno"];
$lugar = $_POST["lugar"];
$calle = $_POST["calle"];
$telefono = $_POST["telefono"];
$ocupacion = $_POST["ocupacion"];
 
if($matricula_tutor)
{

$sql = "UPDATE proyecto.tutor SET nombre='$nombre', apellido_paterno='$ap', apellido_materno='$am', lugar='$lugar', calle='$calle', ocupacion='$ocupacion', telefono='$telefono' WHERE matricula_tutor='".$matricula_tutor."'";
$resultado = mysql_query($sql,$proyecto) or die(mysql_error());

header("Location:http://localhost/proyecto/css%20y%20php/actualizar_tutor.php");

}
else
{
 echo "datos NO actualizados";
}
?>