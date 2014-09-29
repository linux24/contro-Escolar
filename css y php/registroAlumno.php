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
  $insertSQL = sprintf("INSERT INTO alumno (matricula_alumno, nombre_alumno, apellido_paterno, apellido_materno, matricula_periodo, grupo, grado, lugar, calle, fecha_nacimiento, telefono, correo) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['matricula_alumno'], "int"),
                       GetSQLValueString($_POST['nombre_alumno'], "text"),
                       GetSQLValueString($_POST['apellido_paterno'], "text"),
                       GetSQLValueString($_POST['apellido_materno'], "text"),
                       GetSQLValueString($_POST['matricula_periodo'], "text"),
                       GetSQLValueString($_POST['grupo'], "text"),
                       GetSQLValueString($_POST['grado'], "int"),
                       GetSQLValueString($_POST['lugar'], "text"),
                       GetSQLValueString($_POST['calle'], "text"),
                       GetSQLValueString($_POST['fecha_nacimiento'], "text"),
                       GetSQLValueString($_POST['telefono'], "text"),
                       GetSQLValueString($_POST['correo'], "text"));

  mysql_select_db($database_proyecto, $proyecto);
  $Result1 = mysql_query($insertSQL, $proyecto) or die(mysql_error());
  
  $mat=$_POST['matricula_alumno'];
  $ap=$_POST['apellido_paterno'];
  $am=$_POST['apellido_materno'];
  $nom=$_POST['nombre_alumno'];

  header("Location:http://localhost/proyecto/css y php/datos_tutor.php?matricula=$mat&nombre=$nom&&ap=$ap&am=$am");

}
/*
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO tutor (matricula_tutor, nombre, apellido_paterno, apellido_materno, lugar, calle, ocupacion, telefono, matricula_alumno, nombre_alumno) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['matricula_tutor'], "int"),
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['apellido_paterno'], "text"),
                       GetSQLValueString($_POST['apellido_materno'], "text"),
                       GetSQLValueString($_POST['lugar'], "text"),
                       GetSQLValueString($_POST['calle'], "text"),
                       GetSQLValueString($_POST['ocupacion'], "text"),
                       GetSQLValueString($_POST['telefono'], "text"),
                       GetSQLValueString($_POST['matricula_alumno'], "int"),
                       GetSQLValueString($_POST['nombre_alumno'], "text"));

  mysql_select_db($database_proyecto, $proyecto);
  $Result1 = mysql_query($insertSQL, $proyecto) or die(mysql_error());
}
*/
mysql_select_db($database_proyecto, $proyecto);
$query_ciclo = "SELECT * FROM mes_periodo";
$ciclo = mysql_query($query_ciclo, $proyecto) or die(mysql_error());
$row_ciclo = mysql_fetch_assoc($ciclo);
$totalRows_ciclo = mysql_num_rows($ciclo);

mysql_select_db($database_proyecto, $proyecto);
$query_grupo = "SELECT * FROM grupos";
$grupo = mysql_query($query_grupo, $proyecto) or die(mysql_error());
$row_grupo = mysql_fetch_assoc($grupo);
$totalRows_grupo = mysql_num_rows($grupo);

mysql_select_db($database_proyecto, $proyecto);
$query_grado = "SELECT * FROM grado";
$grado = mysql_query($query_grado, $proyecto) or die(mysql_error());
$row_grado = mysql_fetch_assoc($grado);
$totalRows_grado = mysql_num_rows($grado);

mysql_select_db($database_proyecto, $proyecto);
$query_alumnno = "SELECT * FROM alumno";
$alumnno = mysql_query($query_alumnno, $proyecto) or die(mysql_error());
$row_alumnno = mysql_fetch_assoc($alumnno);
$totalRows_alumnno = mysql_num_rows($alumnno);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="datepicker/jquery-ui.css">
<script type= "text/javascript" src="js/incex.js";
<script type="text/javascript"  src="../jquery-1.11.1.min.js"></script>
<script type="text/javascript"  src="../jquery-2.0.3.js"></script>

<script src="datepicker/jquery-1.10.2.js"></script>
<script src="datepicker/jquery-ui.js"></script>
<link rel="stylesheet" href="datepicker/style.css">
<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>
<title>INSERTAR ALUMNOS</title>
<style type="text/css">

body
{
	background: ;
	font-family: helvetica;
	font-size: 16px;
	text-align: center;

}

input.let{
    text-transform: uppercase;
    width: 15em;
    height: 20px;
   border:3px solid #f0f0f0;
    color: silver;
   }
 img.ima
{
  border-radius: 10em;
  padding: 1em;
  cursor: pointer;
  transition:1.5s ease;
  -webkit-transition:1.5s ease;
}

 img.ima:hover
{
transform:rotate(360deg);
-webkit-transform:rotate(360deg);
}


input.bo
{
  background: silver;
  width: 6em;
  height: 4em;
  border-radius: 1em;
  cursor: pointer;
  padding: 1em;
  color: black;
  -webkit-transition:2s ease;
}

input.bo:hover
{
width: 5em;
height: 3em;
background: #888888;
border-radius: 2em;
color: black;
-webkit-transition:2s ease;
box-shadow: 5px 5px 5px  #888888;


}

</style>
 	
<?php include "scripts.php"; 
?>
<link href="../bootstrap-responsive.css">

</head>


<body>
<div id="contenedor">
<fieldset>
<legend>DATOS DEL ALUMNO</legend>
<table class="table table-hover" width="281" border="0" align="center">
  <tr>
    <td width="125"><img class="ima" src="../DAT.png" width="120" height="120" /></td>
    <td width="24">&nbsp;</td>
    <td width="110"><img  class="ima" src="../tele.jpg" width="103" height="86" /></td>
  </tr>
  <tr>
    <td colspan="3" align="center">REGISTRO DE LOS ESTUDIANTES DE LA ESCUELA TELESECUNDARIA IGNACIO ZARAGOZA</td>
  </tr>
</table>
<p>&nbsp;</p>
<form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>" onsubmit="return revisar_alumno()">
<p>&nbsp;</p>
<table class="table table-hover "  width="621" border="0" align="center">
  <tr>
    <td><label for="textfield"></label>
      <input type="text" name="matricula_alumno" id="miCampo1" placeholder="MATRICULA" class="let" required onkeypress="return soloNumeros(event);"/></td>
    <td><label for="textfield2"></label>
      <input type="text" name="nombre_alumno" id="textfield2"  class="let" placeholder="NOMBRE" required onkeypress="return sololetras(event);" autocomplete="off"  /></td>
    <td width="144"><label for="textfield3"></label>
      <input type="text" name="apellido_paterno" id="textfield3" placeholder="APELLIDO PATERNO" required class="let" autocomplete="off" onkeypress="return sololetras(event);" /></td>
    <td width="161"><label for="textfield4"></label>
      <input type="text" name="apellido_materno" id="textfield4" placeholder="APELLIDO MATERNO" required class="let" autocomplete="off" onkeypress="return sololetras(event);" /></td>
  </tr>
  <tr>
    <td width="144" align="center">MATRICULA</td>
    <td width="144" align="center">NOMBRE(S)</td>
    <td>APELLIDO PATERNO</td>
    <td>APELLIDO MATERNO</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><label for="select"></label>
      <select name="matricula_periodo" id="select">
        <?php
do {  
?>
        <option value="<?php echo $row_ciclo['mes_periodo']?>"><?php echo $row_ciclo['mes_periodo']?></option>
        <?php
} while ($row_ciclo = mysql_fetch_assoc($ciclo));
  $rows = mysql_num_rows($ciclo);
  if($rows > 0) {
      mysql_data_seek($ciclo, 0);
	  $row_ciclo = mysql_fetch_assoc($ciclo);
  }
?>
      </select></td>
    <td align="center"><label for="select3"></label>
      <select name="grupo" id="select3">
        <?php
do {  
?>
        <option value="<?php echo $row_grupo['nombre_grupo']?>"><?php echo $row_grupo['nombre_grupo']?></option>
        <?php
} while ($row_grupo = mysql_fetch_assoc($grupo));
  $rows = mysql_num_rows($grupo);
  if($rows > 0) {
      mysql_data_seek($grupo, 0);
	  $row_grupo = mysql_fetch_assoc($grupo);
  }
?>
      </select></td>
    <td align="center"><label for="select3"></label>
      <select name="grado" id="select3">
        <?php
do {  
?>
        <option value="<?php echo $row_grado['nivel']?>"><?php echo $row_grado['nivel']?></option>
        <?php
} while ($row_grado = mysql_fetch_assoc($grado));
  $rows = mysql_num_rows($grado);
  if($rows > 0) {
      mysql_data_seek($grado, 0);
	  $row_grado = mysql_fetch_assoc($grado);
  }
?>
      </select></td>
  </tr>
  <tr>
    <td colspan="2" align="center">PERIODO O CICLO</td>
    <td align="center">GRUPO</td>
    <td align="center">GRADO</td>
  </tr>
  <tr>
    <td colspan="4" align="center">DATOS DEL DOMICILIO DEL ALUMNO</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><label for="textfield5"></label>
      <input type="text" name="lugar" id="textfield5" placeholder="LUGAR DE NACIMIENTO" required class="let" autocomplete="off" onkeypress="return sololetras(event);" /></td>
    <td align="center"><label for="textfield6"></label>
      <input type="text" name="calle" id="textfield6" placeholder="CALLE/AVENIDA" required class="let" autocomplete="off"  /></td>
    <td align="center"><label for="textfield7"></label>
      <input type="text" name="fecha_nacimiento" id="datepicker" placeholder="FECHA DE NACIMIENTO" required class="let" autocomplete="off" onkeypress="return soloNumeros(event);" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">LUGAR DE NACIMIENTO</td>
    <td align="center">CALLE O AVENIDA</td>
    <td align="center">FECHA DE NACIMIENTO</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><label for="textfield8"></label>
      <input type="number" name="telefono" id="textfield8"  placeholder="TELEFONO" required class="let" autocomplete="off" onkeypress="return soloNumeros(event);" /></td>
    <td align="center"><label for="textfield21"></label>

      </select></td>
    <td align="center"><label for="textfield9"></label>
      <input type="email" name="correo" id="textfield9" placeholder="E-MAIL" required class="let"  /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">TELEFONO</td>
    <td align="center"></td>
    <td align="center">CORREO ELECTRONICO</td>
  </tr>
  <tr>
    <td colspan="4" align="center"><input type="submit"  class="bo" name="button" id="button" value="ENVIAR" /></td>
  </tr>
  </table>
<p>&nbsp;</p>
<input type="hidden" name="MM_insert" value="form1" />

</form>
<p>&nbsp;</p>
</fieldset>


</body>

</html>
<?php
mysql_free_result($ciclo);

mysql_free_result($grupo);

mysql_free_result($grado);

mysql_free_result($alumnno);
?>
