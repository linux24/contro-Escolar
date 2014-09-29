<?php require_once('../Connections/proyecto.php');


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
  
 $idc = mysql_connect('localhost', 'root', '123'); 
 
 
$sql = "INSERT INTO proyecto.year1_bim3 (matricula_year1, bimestre, grupo, matricula_alumno, esp3, ingles3, matematicas3, quimica, historia2, educacion_fisica3, tecnologia3, artes3) VALUES (null, '$bimestre','$grupo','$matricula_alumno','$esp3','$ingles3','$matematicas3','$quimica','$historia2','$educacion_fisica3','$tecnologia3','$artes3')";
$resultado = mysql_query($sql,$idc) or die(mysql_error());
header("Location:http://localhost/proyecto/css%20y%20php/tercero.php");

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