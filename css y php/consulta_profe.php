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
$query_pro = "SELECT * FROM profesor";
$pro = mysql_query($query_pro, $proyecto) or die(mysql_error());
$row_pro = mysql_fetch_assoc($pro);
$totalRows_pro = mysql_num_rows($pro);
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
#apDiv1 {
	position: absolute;
	left: 119px;
	top: 297px;
	width: 926px;
	height: 57px;
	z-index: 1;
}
#apDiv1 table tr td {
	color: #999;
}
table tr td.cam{
  background-color: silver;
  text-align: center;
  color: #FF0000;
}
</style>
</head>

<body>
<div id="apDiv1">
  <table border="1">
    <tr>
      <td class="cam">matricula</td>
      <td class="cam"> nombre</td>
      <td class="cam">apellido paterno</td>
      <td class="cam">apellido materno</td>
      <td class="cam">materia</td>
      <td class="cam">direccion</td>
      <td class="cam">correo</td>
      <td class="cam">telefono</td>
      <td class="cam">lugar_nacimiento</td>
      <td class="cam">fecha_nacimiento</td>
      <td class="cam">grado</td>
      <td class="cam">grupo</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_pro['matricula_profesor']; ?></td>
        <td><?php echo $row_pro['nombre_profesor']; ?></td>
        <td><?php echo $row_pro['apellido_paterno']; ?></td>
        <td><?php echo $row_pro['apellido_materno']; ?></td>
        <td><?php echo $row_pro['nombre_materia']; ?></td>
        <td><?php echo $row_pro['direccion']; ?></td>
        <td><?php echo $row_pro['correo']; ?></td>
        <td><?php echo $row_pro['telefono']; ?></td>
        <td><?php echo $row_pro['lugar_nacimiento']; ?></td>
        <td><?php echo $row_pro['fecha_nacimiento']; ?></td>
        <td><?php echo $row_pro['grado']; ?></td>
        <td><?php echo $row_pro['grupo']; ?></td>
      </tr>
      <?php } while ($row_pro = mysql_fetch_assoc($pro)); ?>
  </table>
</div>
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
  <p>&nbsp;</p>
  <table width="292" border="0" align="center">
    <tr>
      <td>CONSULTAR TODOS LOS REGISTROS</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>
<?php
mysql_free_result($pro);
?>
