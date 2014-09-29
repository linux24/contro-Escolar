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

$var1_Recordset1 = "0";
if (isset($_POST['grado'])) {
  $var1_Recordset1 = $_POST['grado'];
}
$var2_Recordset1 = "0";
if (isset($_POST['grupo'])) {
  $var2_Recordset1 = $_POST['grupo'];
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

body{
  background:#212121 url(../img/x.jpg);
}

#apDiv1 {
	position: absolute;
	left: 92px;
	top: 314px;
	width: 1019px;
	height: 107px;
	z-index: 1;
	text-align: center;
}
#apDiv1 table tr td {
	text-align: center;
}
div.cabezal {background: #f0f0f0;
width: 900px;
height: 130px;
margin: auto;
border-radius: 10px 10px 10px 10px;
box-shadow: 0px 0px 5px #2f3030 inset;
}
</style>
</head>

<body>
<div id="apDiv1">
  <table border="1" align="center">
    <tr>
      <td width="210" bgcolor="#CCCCCC">NOMBRE DEL ALUMNO</td>
      <td width="214" bgcolor="#CCCCCC">APELLIDO PAT</td>
      <td width="217" bgcolor="#CCCCCC">APELLIDO MAT</td>
      <td width="148" bgcolor="#CCCCCC">GRADO</td>
      <td width="124" bgcolor="#CCCCCC">GRUPO</td>
      <td width="124" bgcolor="#CCCCCC">BOLETA</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_Recordset1['nombre_alumno']; ?>&nbsp; </td>
        <td><?php echo $row_Recordset1['apellido_paterno']; ?>&nbsp; </td>
        <td><?php echo $row_Recordset1['apellido_materno']; ?>&nbsp; </td>
        <td><?php echo $row_Recordset1['grado']; ?>&nbsp; </td>
        <td><?php echo $row_Recordset1['grupo']; ?></td>
        <td><a href="boleta_filtro.php?matricula_alumno=<?php echo $row_Recordset1['matricula_alumno']; ?>&amp;grado=<?php echo $row_Recordset1['grado']; ?>&amp;grupo=<?php echo $row_Recordset1['grupo']; ?>"><img src="../img/reporte.jpg" width="39" height="34" /></a></td>
      </tr>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  </table>
  <br />
<?php echo $totalRows_Recordset1 ?> Registros Total </div>
<div  class="cabezal">
  <table id="centrar-tabla" cellspacing="20" cellpadding="0" border="0">
    <tr>
      <td ><img src="../img/1.png" alt="primero" width="177" height="65" /></td>
      <td><img src="../img/sev.png" alt="uno" width="221" height="113" /></td>
      <td><img src="../img/3.png" alt="firs" width="300" height="50" /></td>
    </tr>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
