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

mysql_select_db($database_proyecto, $proyecto);
$query_Recordset1 = "SELECT * FROM alumno WHERE alumno.grado = 1 and grupo= 'A'";
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
	left: 109px;
	top: 217px;
	width: 1225px;
	height: 130px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 235px;
	top: 11px;
	width: 790px;
	height: 124px;
	z-index: 2;
}
#apDiv3 {
	position: absolute;
	left: 430px;
	top: 141px;
	width: 613px;
	height: 13px;
	z-index: 3;
}
</style>
</head>

<body>
<div id="apDiv1">
  <table width="1049" height="67" border="1">
    <tr>
      <td align="center" bgcolor="#EEEEEE"><strong>MATRICULA</strong></td>
      <td align="center" bgcolor="#EEEEEE"><strong>NOMBRE</strong></td>
      <td align="center" bgcolor="#EEEEEE"><strong>APELLIDO PATERNO</strong></td>
      <td align="center" bgcolor="#EEEEEE"><strong>APELLIDO MATERNO</strong></td>
      <td align="center" bgcolor="#EEEEEE"><strong>GRADO</strong></td>
      <td align="center" bgcolor="#EEEEEE"><strong>GRUPO</strong></td>
    </tr>
    <?php do { ?>
      <tr>
        <td align="center"><?php echo $row_Recordset1['matricula_alumno']; ?></td>
        <td align="center"><?php echo $row_Recordset1['nombre_alumno']; ?></td>
        <td align="center"><?php echo $row_Recordset1['apellido_paterno']; ?></td>
        <td align="center"><?php echo $row_Recordset1['apellido_materno']; ?></td>
        <td align="center"><?php echo $row_Recordset1['grado']; ?></td>
        <td align="center"><?php echo $row_Recordset1['grupo']; ?></td>
      </tr>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  </table>
</div>
<div id="apDiv2">
  <table id="centrar-tabla" cellspacing="20" cellpadding="0" border="0">
    <tr>
      <td ><img src="../img/1.png" alt="primero" width="177" height="65" /></td>
      <td><img src="../img/sev.png" alt="uno" width="221" height="113" /></td>
      <td><img src="../img/3.png" alt="firs" width="300" height="50" /></td>
    </tr>
  </table>
</div>
<div id="apDiv3">
  <h1>LISTA DE ALUMNOS DE 1-A</h1>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
