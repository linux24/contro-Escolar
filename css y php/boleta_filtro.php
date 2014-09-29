<?php 
 $idc = mysql_connect('localhost', 'root', '123'); 

 $matricula_alumno=$_GET['matricula_alumno'];
  $grado=$_GET['grado'];
  $grupo=$_GET['grupo'];
  
  if($grado==1)
  {
header("Location:http://localhost/proyecto/css%20y%20php/boleta_1semestre.php?matricula_alumno=$matricula_alumno&grupo=$grupo");
  }
 if($grado==2)
  {
header("Location:http://localhost/proyecto/css%20y%20php/boleta_2semestre.php?matricula_alumno=$matricula_alumno&grupo=$grupo");
  } if($grado==3)
  {
header("Location:http://localhost/proyecto/css%20y%20php/boleta_3semestre.php?matricula_alumno=$matricula_alumno&grupo=$grupo");
  }

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