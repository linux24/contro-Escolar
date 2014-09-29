<?php 
 ?>

<?php require_once('../Connections/proyecto.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO year1_bim1 (bimestre, matricula_alumno, nombre_alumno, esp1, ingles1, matematicas1, ciencias1_biologia, geografia_mexico, educacion_fisica1, tecnologia1, artes1, asignatura_estatal, tutoria, tic, vida_saludable) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['bimestre'], "int"),
                       GetSQLValueString($_POST['matricula_alumno'], "int"),
                       GetSQLValueString($_POST['nombre_alumno'], "text"),
                       GetSQLValueString($_POST['esp1'], "int"),
                       GetSQLValueString($_POST['ingles1'], "int"),
                       GetSQLValueString($_POST['matematicas1'], "int"),
                       GetSQLValueString($_POST['ciencias1_biologia'], "int"),
                       GetSQLValueString($_POST['geografia_mexico'], "int"),
                       GetSQLValueString($_POST['educacion_fisica1'], "int"),
                       GetSQLValueString($_POST['tecnologia1'], "int"),
                       GetSQLValueString($_POST['artes1'], "int"),
                       GetSQLValueString($_POST['asignatura_estatal'], "int"),
                       GetSQLValueString($_POST['tutoria'], "int"),
                       GetSQLValueString($_POST['tic'], "int"),
                       GetSQLValueString($_POST['vida_saludable'], "int"));

  mysql_select_db($database_proyecto, $proyecto);
  $Result1 = mysql_query($insertSQL, $proyecto) or die(mysql_error());
}

mysql_select_db($database_proyecto, $proyecto);
$query_grado = "SELECT * FROM grado";
$grado = mysql_query($query_grado, $proyecto) or die(mysql_error());
$row_grado = mysql_fetch_assoc($grado);
$totalRows_grado = mysql_num_rows($grado);

mysql_select_db($database_proyecto, $proyecto);
$query_idgrupo = "SELECT * FROM grupos";
$idgrupo = mysql_query($query_idgrupo, $proyecto) or die(mysql_error());
$row_idgrupo = mysql_fetch_assoc($idgrupo);
$totalRows_idgrupo = mysql_num_rows($idgrupo);

$v1_alumnos = "0";
if (isset($_POST['var1'])) {
  $v1_alumnos = $_POST['var1'];
}
$v2_alumnos = "0";
if (isset($_POST['var2'])) {
  $v2_alumnos = $_POST['var2'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_alumnos = sprintf("SELECT matricula_alumno, nombre_alumno, apellido_paterno, grado, grupo FROM alumno WHERE grado=%s ", GetSQLValueString($v1_alumnos, "int"),GetSQLValueString($v2_alumnos, "int"));
$alumnos = mysql_query($query_alumnos, $proyecto) or die(mysql_error());
$row_alumnos = mysql_fetch_assoc($alumnos);
$totalRows_alumnos = mysql_num_rows($alumnos);

mysql_select_db($database_proyecto, $proyecto);
$query_bim1 = "SELECT * FROM year1_bim1";
$bim1 = mysql_query($query_bim1, $proyecto) or die(mysql_error());
$row_bim1 = mysql_fetch_assoc($bim1);
$totalRows_bim1 = mysql_num_rows($bim1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style type="text/css">

body
{
	background:#212121 url(../img/fon-menu.jpg);
}
div#menu
{
position: fixed;
width: 65px;
height: 100%;
background-color:#2f3030; 
overflow: hidden;
-webkit-transition:width 0.5s;
}
div#menu:hover
{
width: 170px;

}

div#logo
{
	width: 40px;
	height: 40px;
	margin: 10px;
background-image:url(../img/logomenu.png); 
}
div.contenedor-general
{
	width: 150px;
	height: 40px;
	margin-left: 10px;
	background: #DDD;
	margin-top: 20px;
	-webkit-transition-duration: 2s;
	border-radius: 10px;
}

div.contenedor-general:hover
{
	background: #2f3030;

}

div#separa
{
margin-top: 60px;
}

div.logo-interior
{
width: 40px;
height: 40px;
background-image: url(../img/logomenu.png);	
float: left;
}
p.texto
{
	margin-left: 60px;
	line-height: 40px;
}


div.cabezal {background: #f0f0f0;
width: 900px;
height: 130px;
margin: auto;
border-radius: 10px 10px 10px 10px;
box-shadow: 0px 0px 5px #2f3030 inset;
}
#apDiv1 {
	position: absolute;
	left: 258px;
	top: 380px;
	width: 222px;
	height: 152px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 600px;
	top: 375px;
	width: 195px;
	height: 155px;
	z-index: 2;
}
#apDiv3 {
	position: absolute;
	left: 892px;
	top: 379px;
	width: 175px;
	height: 152px;
	z-index: 3;
}
#apDiv4 {
	position: absolute;
	left: 438px;
	top: 253px;
	width: 445px;
	height: 30px;
	z-index: 4;
	text-align: center;
	font-weight: bold;
	color: #999;
	font-size: 18px;
}
</style>
</head>

<body>
<div id="apDiv1"><a href="grupo1a.php?grado=1&amp;grupo=A"><img src="../img/A.png" width="191" height="159" /></a></div>
<div id="apDiv2"><a href="grupo1a.php?grado=1&amp;grupo=B"><img src="../img/B.png" width="151" height="163" /></a></div>
<div id="apDiv3"><a href="grupo1a.php?grado=1&amp;grupo=C"><img src="../img/C.png" width="157" height="174" /></a></div>
<div id="apDiv4">
  <p>INSERCION DE CALIFICACIONES PRIMER AÑO</p>
  <p>SELECCIONE EL GRUPO</p>
</div>
<div id="menu">

<div id="logo">

</div>

<div id="separa" class="contenedor-general">

<div class="logo-interior">

</div>


<p class="texto"><a href="menu.php">INICIO</a></p>
</div>


<!--actualiza-->
<div id="separa" class="contenedor-general">

<div class="logo-interior">

</div>


<p class="texto"><a href="actualiza_primero.php">ACTUALIZA</a></p>
</div>




</div>
<div  class="cabezal">
  <table id="centrar-tabla" cellspacing="20" cellpadding="0" border="0">
    <tr>
      <td ><img src="../img/1.png" alt="primero" width="177" height="65" /></td>
      <td><img src="../img/sev.png" alt="uno" width="221" height="113" /></td>
      <td><img src="../img/3.png" alt="firs" width="300" height="50" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="">
  
  <center>
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
    <p>&nbsp;</p>
    <p>
      <center></center>
    </p>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <form id="form2" name="form2" method="post" action="">
  
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </form>
<p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
  
</body>
</html>
<?php
mysql_free_result($grado);

mysql_free_result($idgrupo);

mysql_free_result($alumnos);

mysql_free_result($bim1);
?>
