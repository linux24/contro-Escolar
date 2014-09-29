<?php require_once('../Connections/proyecto.php');


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
  
 $idc = mysql_connect('localhost', 'root', '123'); 
 
 
$sql = "INSERT INTO proyecto.year1_bim2 (matricula_year1, bimestre, grupo, matricula_alumno, esp2, ingles2, matematicas2, fisica, historia, educacion_fisica1, tecnologia2, artes2) VALUES (null, '$bimestre','$grupo','$matricula_alumno','$esp2','$ingles2','$matematicas2','$fisica','$historia','$educacion_fisica1','$tecnologia2','$artes2')";
$resultado = mysql_query($sql,$idc) or die(mysql_error());
header("Location:http://localhost/proyecto/css%20y%20php/segundo.php");

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
</body>
</html>