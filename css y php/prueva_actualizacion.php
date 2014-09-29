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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE year1_bim1 SET bimestre=%s, grupo=%s, matricula_alumno=%s, esp=%s, ingles=%s, matematicas=%s, biologia=%s, geografia=%s, educacion_fisica=%s, tecnologia=%s, artes=%s WHERE matricula_year1=%s",
                       GetSQLValueString($_POST['bimestre'], "int"),
                       GetSQLValueString($_POST['grupo'], "text"),
                       GetSQLValueString($_POST['matricula_alumno'], "int"),
                       GetSQLValueString($_POST['esp'], "int"),
                       GetSQLValueString($_POST['ingles'], "int"),
                       GetSQLValueString($_POST['matematicas'], "int"),
                       GetSQLValueString($_POST['biologia'], "int"),
                       GetSQLValueString($_POST['geografia'], "int"),
                       GetSQLValueString($_POST['educacion_fisica'], "int"),
                       GetSQLValueString($_POST['tecnologia'], "int"),
                       GetSQLValueString($_POST['artes'], "int"),
                       GetSQLValueString($_POST['matricula_year1'], "int"));

  mysql_select_db($database_proyecto, $proyecto);
  $Result1 = mysql_query($updateSQL, $proyecto) or die(mysql_error());
}

$var1_Recordset1 = "0";
if (isset($_GET['bimestre'])) {
  $var1_Recordset1 = $_GET['bimestre'];
}
$var2_Recordset1 = "0";
if (isset($_GET['grupo'])) {
  $var2_Recordset1 = $_GET['grupo'];
}
$var3_Recordset1 = "0";
if (isset($_GET['matricula_alumno'])) {
  $var3_Recordset1 = $_GET['matricula_alumno'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_Recordset1 = sprintf("SELECT * FROM year1_bim1 WHERE year1_bim1.bimestre=%s AND year1_bim1.grupo=%s AND year1_bim1.matricula_alumno=%s", GetSQLValueString($var1_Recordset1, "int"),GetSQLValueString($var2_Recordset1, "text"),GetSQLValueString($var3_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $proyecto) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Matricula_year1:</td>
      <td><?php echo $row_Recordset1['matricula_year1']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Bimestre:</td>
      <td><input type="text" name="bimestre" value="<?php echo htmlentities($row_Recordset1['bimestre'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Grupo:</td>
      <td><input type="text" name="grupo" value="<?php echo htmlentities($row_Recordset1['grupo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Matricula_alumno:</td>
      <td><input type="text" name="matricula_alumno" value="<?php echo htmlentities($row_Recordset1['matricula_alumno'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Esp:</td>
      <td><input type="text" name="esp" value="<?php echo htmlentities($row_Recordset1['esp'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Ingles:</td>
      <td><input type="text" name="ingles" value="<?php echo htmlentities($row_Recordset1['ingles'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Matematicas:</td>
      <td><input type="text" name="matematicas" value="<?php echo htmlentities($row_Recordset1['matematicas'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Biologia:</td>
      <td><input type="text" name="biologia" value="<?php echo htmlentities($row_Recordset1['biologia'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Geografia:</td>
      <td><input type="text" name="geografia" value="<?php echo htmlentities($row_Recordset1['geografia'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Educacion_fisica:</td>
      <td><input type="text" name="educacion_fisica" value="<?php echo htmlentities($row_Recordset1['educacion_fisica'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tecnologia:</td>
      <td><input type="text" name="tecnologia" value="<?php echo htmlentities($row_Recordset1['tecnologia'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Artes:</td>
      <td><input type="text" name="artes" value="<?php echo htmlentities($row_Recordset1['artes'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Actualizar registro" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="matricula_year1" value="<?php echo $row_Recordset1['matricula_year1']; ?>" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
