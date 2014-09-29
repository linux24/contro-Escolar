<?php
 $idc = mysql_connect('localhost', 'root', '123'); 


 $esp2=$_POST['esp2'];
 $ingles2=$_POST['ingles2'];
 $matematicas2=$_POST['matematicas2'];
 $fisica=$_POST['fisica'];
 $historia=$_POST['historia'];
 $educacion_fisica1=$_POST['educacion_fisica1'];
 $tecnologia2=$_POST['tecnologia2'];
  $artes2=$_POST['artes2'];
 $grado=$_POST['grado'];
 $grupo=$_POST['grupo'];
 $matricula_alumno=$_POST['matricula_alumno'];
 $bimestre=$_POST['bimestre'];
 
if($matricula_alumno)
{

$sql = "UPDATE proyecto.year1_bim2 SET esp2='$esp2', ingles2='$ingles2', matematicas2='$matematicas2', fisica='$fisica', historia='$historia', educacion_fisica1='$educacion_fisica1', tecnologia2='$tecnologia2', artes2='$artes2' WHERE matricula_alumno = ".$matricula_alumno." and bimestre = ".$bimestre."";
$resultado = mysql_query($sql,$idc) or die(mysql_error());

header("Location:http://localhost/proyecto/css%20y%20php/actualiza_segundo.php");

}
else
{
 echo "datos NO actualizados";
}
?>