<?php require_once('../Connections/proyecto.php');


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
  
 $idc = mysql_connect('localhost', 'root', '123'); 
  
$sql = "INSERT INTO proyecto.year1_bim1 (matricula_year1, bimestre, grupo, matricula_alumno, esp, ingles, matematicas, biologia, geografia, educacion_fisica, tecnologia, artes) VALUES (null, '$bimestre','$grupo','$matricula_alumno','$esp','$ingles','$matematicas','$biologia','$geografia','$educacion_fisica','$tecnologia','$artes')";
$resultado = mysql_query($sql,$idc) or die(mysql_error());
header("Location:http://localhost/proyecto/css%20y%20php/primero.php");


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