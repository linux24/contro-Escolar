<?php require_once('../Connections/proyecto.php'); ?>
<?php
$matricula_profesor = $_POST["matricula_profesor"];
$nombre = $_POST["nombre"];
$ap = $_POST["apellido_paterno"];
$am = $_POST["apellido_materno"];
$nombre_materia = $_POST["nombre_materia"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$lugar_nacimiento = $_POST["lugar_nacimiento"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$grupo = $_POST["grupo"];
$grado = $_POST["grado"];

 
if($matricula_tutor)
{

$sql = "UPDATE proyecto.profesor SET nombre='$nombre', apellido_paterno='$ap', apellido_materno='$am', nombre_materia='$nombre_materia', direccion='$direccion', correo='$correo', telefono='$telefono', lugar_nacimiento='$lugar_nacimiento', fecha_nacimiento='$fecha_nacimiento', grado='$grado', grupo='$grupo' WHERE matricula_profesor='".$matricula_profesor."'";
$resultado = mysql_query($sql,$proyecto) or die(mysql_error());

header("Location:http://localhost/proyecto/css%20y%20php/actualiza_profe.php");

}
else
{
 echo "datos NO actualizados";
}
?>