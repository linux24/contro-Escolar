	<?php require_once('../Connections/proyecto.php');
 
 ?>
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

mysql_select_db($database_proyecto, $proyecto);
$query_Recordset1 = "SELECT * FROM alumno";
$Recordset1 = mysql_query($query_Recordset1, $proyecto) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$var2_Recordset1 = "0";
if (isset($_GET['grupo'])) {
  $var2_Recordset1 = $_GET['grupo'];
}
$var1_Recordset1 = "0";
if (isset($_GET['grado'])) {
  $var1_Recordset1 = $_GET['grado'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_Recordset1 = sprintf("SELECT * FROM alumno WHERE alumno.grado=%s AND alumno.grupo=%s", GetSQLValueString($var1_Recordset1, "int"),GetSQLValueString($var2_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $proyecto) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 314px;
	top: 233px;
	width: 717px;
	height: 147px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 166px;
	top: 214px;
	width: 617px;
	height: 189px;
	z-index: 1;
}
#apDiv3 {
	position: absolute;
	left: 26px;
	top: 262px;
	width: 1072px;
	height: 106px;
	z-index: 1;
	text-align: center;
}
#apDiv3 table tr td {
	text-align: center;
}
body {
	background-image: url(../img/menufondo.jpg);
}
div.cabezal {background: #f0f0f0;
width: 900px;
height: 130px;
margin: auto;
border-radius: 10px 10px 10px 10px;
box-shadow: 0px 0px 5px #2f3030 inset;
}
#apDiv4 {
	position: absolute;
	left: 361px;
	top: 209px;
	width: 531px;
	height: 26px;
	z-index: 2;
}
#apDiv5 {
	position: absolute;
	left: 9px;
	top: 196px;
	width: 59px;
	height: 49px;
	z-index: 3;
}
</style>
</head>

<body>
<div id="apDiv3">
  <table width="1109" height="52" border="1" align="center">
    <tr>
      <td width="186" rowspan="2">NOMBRE </td>
      <td width="190" rowspan="2">APELLIDO PA.</td>
      <td width="193" rowspan="2">APELLIDO MA.</td>
      <td width="132" rowspan="2">GRADO</td>
      <td width="124" rowspan="2">GRUPO</td>
      <td colspan="5">SEMESTRES</td>
    </tr>
    <tr>
      <td width="44">I</td>
      <td width="44">II</td>
      <td width="44">III</td>
      <td width="44">IV</td>
      <td width="44">V</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_Recordset1['nombre_alumno']; ?>&nbsp; </td>
        <td><?php echo $row_Recordset1['apellido_paterno']; ?>&nbsp; </td>
        <td><?php echo $row_Recordset1['apellido_materno']; ?>&nbsp; </td>
        <td><?php echo $row_Recordset1['grado']; ?>&nbsp; </td>
        <td><?php echo $row_Recordset1['grupo']; ?></td>
        <td><a href="actualizar_bimestre2.php?grado=<?php echo $_GET['grado'] ?>&amp;bimestre=1&amp;grupo=<?php echo $_GET['grupo'] ?>&amp;matricula_alumno=<?php echo $row_Recordset1['matricula_alumno']; ?>">ACTU</a></td>
        <td><a href="actualizar_bimestre2.php?grado=<?php echo $_GET['grado'] ?>&amp;bimestre=2&amp;grupo=<?php echo $_GET['grupo'] ?>&amp;matricula_alumno=<?php echo $row_Recordset1['matricula_alumno']; ?>">ACTU</a></td>
        <td><a href="actualizar_bimestre2.php?grado=<?php echo $_GET['grado'] ?>&amp;bimestre=3&amp;grupo=<?php echo $_GET['grupo'] ?>&amp;matricula_alumno=<?php echo $row_Recordset1['matricula_alumno']; ?>">ACTU</a></td>
        <td><a href="actualizar_bimestre2.php?grado=<?php echo $_GET['grado'] ?>&amp;bimestre=4&amp;grupo=<?php echo $_GET['grupo'] ?>&amp;matricula_alumno=<?php echo $row_Recordset1['matricula_alumno']; ?>">ACTU</a></td>
        <td><a href="actualizar_bimestre2.php?grado=<?php echo $_GET['grado'] ?>&amp;bimestre=5&amp;grupo=<?php echo $_GET['grupo'] ?>&amp;matricula_alumno=<?php echo $row_Recordset1['matricula_alumno']; ?>">ACTU</a></td>
      </tr>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  </table>
  <br />
<?php echo $totalRows_Recordset1 ?> Registros Total </div>
<div id="apDiv4">ACTIALIZACION DE LOS ALUMNOS DEL SEGUNDO AÑO</div>
<div id="apDiv5"><a href="actualiza_segundo.php"><img src="../img/regresar.png" width="60" height="54" /></a></div>
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
  <form id="form1" name="form1" method="post" action="<?php echo $editFormAction; ?>">
    <p>&nbsp;</p>
    <p>
      <center>
      </center>
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
mysql_free_result($Recordset1);
?>
