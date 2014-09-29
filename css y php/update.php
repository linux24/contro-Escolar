<?php
 $idc = mysql_connect('localhost', 'root', '123'); 


 $esp=$_POST['esp'];
 $ingles=$_POST['ingles'];
 $matematicas=$_POST['matematicas'];
 $biologia=$_POST['biologia'];
 $geografia=$_POST['geografia'];
 $educacion_fisica=$_POST['educacion_fisica'];
 $tecnologia=$_POST['tecnologia'];
  $artes=$_POST['artes'];
 $grado=$_POST['grado'];
 $grupo=$_POST['grupo'];
 $matricula_alumno=$_POST['matricula_alumno'];
 $bimestre=$_POST['bimestre'];
 
if($matricula_alumno)
{

$sql = "UPDATE proyecto.year1_bim1 SET esp='$esp', ingles='$ingles', matematicas='$matematicas', biologia='$biologia', geografia='$geografia', educacion_fisica='$educacion_fisica', tecnologia='$tecnologia', artes='$artes' WHERE matricula_alumno = ".$matricula_alumno." and bimestre = ".$bimestre."";
$resultado = mysql_query($sql,$idc) or die(mysql_error());

header("Location:http://localhost/proyecto/css%20y%20php/actualiza_primero.php");

}
else
{
 echo "datos NO actualizados";
}
?>