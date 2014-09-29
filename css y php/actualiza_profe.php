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
  $updateSQL = sprintf("UPDATE profesor SET nombre_profesor=%s, apellido_paterno=%s, apellido_materno=%s, nombre_materia=%s, direccion=%s, correo=%s, telefono=%s, lugar_nacimiento=%s, fecha_nacimiento=%s WHERE matricula_profesor=%s",
                       GetSQLValueString($_POST['nombre_profesor'], "text"),
                       GetSQLValueString($_POST['apellido_paterno'], "text"),
                       GetSQLValueString($_POST['apellido_materno'], "text"),
                       GetSQLValueString($_POST['nombre_materia'], "text"),
                       GetSQLValueString($_POST['direccion'], "text"),
                       GetSQLValueString($_POST['correo'], "text"),
                       GetSQLValueString($_POST['telefono'], "text"),
                       GetSQLValueString($_POST['lugar_nacimiento'], "text"),
                       GetSQLValueString($_POST['fecha_nacimiento'], "text"),
                       GetSQLValueString($_POST['matricula_profesor'], "int"));

  mysql_select_db($database_proyecto, $proyecto);
  $Result1 = mysql_query($updateSQL, $proyecto) or die(mysql_error());
}

$var1_lolo = "0";
if (isset($_POST['buscar'])) {
  $var1_lolo = $_POST['buscar'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_lolo = sprintf("SELECT * FROM profesor WHERE profesor.matricula_profesor = %s", GetSQLValueString($var1_lolo, "int"));
$lolo = mysql_query($query_lolo, $proyecto) or die(mysql_error());
$row_lolo = mysql_fetch_assoc($lolo);
$totalRows_lolo = mysql_num_rows($lolo);
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
margin-top: 70px;
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
</style>
</head>

<body>
<div id="menu">

<div id="logo">

</div>

<div id="separa" class="contenedor-general">

<div class="logo-interior">

</div>


<p class="texto"><a href="profesor.php">INICIO</a></p>
</div>

<!--segundo menu-->








</div>
<div  class="cabezal">
  <table id="centrar-tabla" cellspacing="20" cellpadding="0" border="0">
    <tr>
      <td ><img src="../img/1.png" alt="primero" width="177" height="65" /></td>
      <td><img src="../img/sev.png" alt="uno" width="221" height="113" /></td>
      <td><img src="../img/3.png" alt="firs" width="300" height="50" /></td>
    </tr>
  </table>
  <table width="395" border="1" align="center">
    <tr>
      <td align="center">ACTUALIZACION DE LOS PROFESORES</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="form1" method="POST" action="<?php echo $editFormAction; ?>">
  <table width="200" border="1" align="center">
    <tr>
      <td>MATRICULA</td>
      <td><label for="direccion"></label>
      <input type="text" name="buscar" id="textfield11"></td>
      <td><input type="submit" name="btn" id="button" value="buscar"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <form name="form2" method="POST" action="update_profesor.php">
  <table width="610" border="1" align="center">
    <tr>
      <td><label for="textfield2"></label>
        <input name="matricula_profesor" type="text" id="matricula_profesor" value="<?php echo $row_lolo['matricula_profesor']; ?>" /></td>
      <td><label for="textfield3"></label>
        <input name="nombre_profesor" type="text" id="nombre_profesor" value="<?php echo $row_lolo['nombre_profesor']; ?>" /></td>
      <td width="147"><label for="textfield4"></label>
        <input name="apellido_paterno" type="text" value="<?php echo $row_lolo['apellido_paterno']; ?>" val"" /></td>
      <td width="191"><label for="textfield5"></label>
        <input type="text" name="apellido_materno" value="<?php echo $row_lolo['apellido_materno']; ?>" /></td>
    </tr>
    <tr>
      <td width="144" align="center">MATRICULA</td>
      <td width="100" align="center">NOMBRE(S)</td>
      <td align="center" valign="middle">APELLIDO PATERNO</td>
      <td align="center">APELLIDO MATERNO</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label for="select"></label>
        <label for="nombre_materia"></label>
        <input name="nombre_materia" type="text" id="nombre_materia" value="<?php echo $row_lolo['nombre_materia']; ?>" /></td>
      <td align="center"><label for="direccion"></label>
        <input name="direccion" type="text" id="direccion" value="<?php echo $row_lolo['direccion']; ?>" />
      <label for="select2"></label></td>
      <td align="center"><label for="correo"></label>
        <input name="correo" type="text" id="correo" value="<?php echo $row_lolo['correo']; ?>" />
      <label for="select3"></label></td>
    </tr>
    <tr>
      <td colspan="2" align="center">MATERIA(S) QUE IMPARTE</td>
      <td align="center">DIRECCION</td>
      <td align="center">CORREO</td>
    </tr>
    <tr>
      <td colspan="4" align="center">DATOS DEL DOMICILIO DEL ALUMNO</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label for="textfield6"></label>
        <input name="telefono" type="text" id="telefono" value="<?php echo $row_lolo['telefono']; ?>" /></td>
      <td align="center"><label for="textfield7"></label>
        <input name="lugar_nacimiento" type="text" id="lugar_nacimiento" value="<?php echo $row_lolo['lugar_nacimiento']; ?>" /></td>
      <td align="center"><label for="textfield8"></label>
        <input type="text" name="fecha_nacimiento" value="<?php echo $row_lolo['fecha_nacimiento']; ?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center">TELEFONO</td>
      <td align="center">LUGAR DE NACIMIENTO</td>
      <td align="center">FECHA DE NACIMIENTO</td>
    </tr>
    <tr>
      <td colspan="4" align="center"><input type="submit" name="button" id="button" value="ACTUALIZAR" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <input type="hidden" name="MM_update" value="form1" />
</form>
</body>
</html>
<?php
mysql_free_result($lolo);
?>
