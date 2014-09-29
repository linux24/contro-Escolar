<?php
 $idc = mysql_connect('localhost', 'root', '123'); 


 $esp3=$_POST['esp3'];
 $ingles3=$_POST['ingles3'];
 $matematicas3=$_POST['matematicas3'];
 $quimica=$_POST['quimica'];
 $historia2=$_POST['historia2'];
 $educacion_fisica3=$_POST['educacion_fisica3'];
 $tecnologia3=$_POST['tecnologia3'];
  $artes3=$_POST['artes3'];
 $grado=$_POST['grado'];
 $grupo=$_POST['grupo'];
 $matricula_alumno=$_POST['matricula_alumno'];
 $bimestre=$_POST['bimestre'];
 
if($matricula_alumno)
{

$sql = "UPDATE proyecto.year1_bim3 SET esp3='$esp3', ingles3='$ingles3', matematicas3='$matematicas3', quimica='$quimica', historia2='$historia2', educacion_fisica3='$educacion_fisica3', tecnologia3='$tecnologia3', artes3='$artes3' WHERE matricula_alumno = ".$matricula_alumno." and bimestre = ".$bimestre."";
$resultado = mysql_query($sql,$idc) or die(mysql_error());
header("Location:http://localhost/proyecto/css%20y%20php/actualiza_tercero.php");

}
else
{
 echo "datos NO actualizados";
}
?>