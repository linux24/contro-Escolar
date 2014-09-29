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
if (isset($_POST['buscar'])) {
  $var1_Recordset1 = $_POST['buscar'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_Recordset1 = sprintf("SELECT * FROM tutor WHERE tutor.matricula_tutor = %s", GetSQLValueString($var1_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $proyecto) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$var2_Recordset2 = "0";
if (isset($_POST['buscar'])) {
  $var2_Recordset2 = $_POST['buscar'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_Recordset2 = sprintf("SELECT * FROM alumno WHERE alumno.matricula_alumno = %s", GetSQLValueString($var2_Recordset2, "int"));
$Recordset2 = mysql_query($query_Recordset2, $proyecto) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
?>



<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

<title>INGRESAR TUTOR</title>


	<style type="text/css">

	body{
background:#212121 url(../img/x.jpg);
	}

	div.cabezal {background: #f0f0f0;
width: 900px;
height: 130px;
margin: auto;
border-radius: 10px 10px 10px 10px;
box-shadow: 0px 0px 5px #2f3030 inset;
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
	left: 359px;
	top: 37px;
	width: 637px;
	height: 102px;
	z-index: 1;
}
    #apDiv2 {
	position: absolute;
	left: 352px;
	top: 364px;
	width: 829px;
	height: 130px;
	z-index: 2;
}
    input.te {  
     text-transform: uppercase;
    width: 15em;
    height: 20px;
   border:3px solid #f0f0f0;
    color: silver;
}
input#b {  background: silver;
  width: 6em;
  height: 4em;
  border-radius: 1em;
  cursor: pointer;
  padding: 1em;
  color: black;
  -webkit-transition:2s ease;
}
    #apDiv3 {
	position: absolute;
	left: 371px;
	top: 246px;
	width: 203px;
	height: 68px;
	z-index: 3;
}
    #apDiv4 {
	position: absolute;
	left: 362px;
	top: 265px;
	width: 254px;
	height: 96px;
	z-index: 3;
}
    #apDiv5 {	position: absolute;
	left: 371px;
	top: 246px;
	width: 203px;
	height: 68px;
	z-index: 3;
}
    #apDiv6 {	position: absolute;
	left: 371px;
	top: 246px;
	width: 203px;
	height: 68px;
	z-index: 3;
}
    #apDiv7 {
	position: absolute;
	left: 230px;
	top: 512px;
	width: 280px;
	height: 166px;
	z-index: 4;
}
    #apDiv8 {
	position: absolute;
	left: 845px;
	top: 206px;
	width: 207px;
	height: 12px;
	z-index: 4;
}
    #apDiv9 {
	position: absolute;
	left: 358px;
	top: 293px;
	width: 787px;
	height: 220px;
	z-index: 2;
}
    #apDiv10 {
	position: absolute;
	left: 351px;
	top: 299px;
	width: 798px;
	height: 135px;
	z-index: 2;
}
    #apDiv11 {
	position: absolute;
	left: 356px;
	top: 356px;
	width: 367px;
	height: 81px;
	z-index: 2;
}
    #apDiv12 {
	position: absolute;
	left: 58px;
	top: 344px;
	width: 227px;
	height: 30px;
	z-index: 3;
}
    #apDiv13 {
	position: absolute;
	left: 298px;
	top: 421px;
	width: 709px;
	height: 278px;
	z-index: 4;
}
    </style>
<script type="text/javascript" src="js/incex.js"></script>
</head>

<body>
<div id="apDiv1">
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
       <center> <td align="center" valign="middle">CONSULTAR LOS TUTORES</td></center>
      </tr>
    </table>
    
  </div>
</div>
<div id="apDiv11">
  <form name="form1" method="post" action="">
MATRICULA:
    <label for="buscar"></label>
    <input type="text" name="buscar" id="buscar" class="te" required onkeypress="return soloNumeros(event);">
    <input type="submit" name="button" id="button" value="Enviar">
  </form>
</div>
<div id="apDiv13">
  <table width="752" height="165" border="0" align="center">
    <tr>
      <td width="201"><label for="textfield10"></label>
        <input type="text" value="<?php echo $row_Recordset1['matricula_tutor']; ?>" name="matricula_tutor" id="textfield10" placeholder="MATRICULA" autocomplete="on" class="te" /></td>
      <td width="173"><label for="textfield11"></label>
        <input name="nombre" type="text" class="te" id="textfield11" placeholder="NOMBRE" autocomplete="off" value="<?php echo $row_Recordset1['nombre']; ?>" /></td>
      <td><label for="textfield12"></label>
        <input name="apellido_paterno" type="text"  class="te" id="textfield12" placeholder="APELLIDO PATERNO" autocomplete="off" value="<?php echo $row_Recordset1['apellido_paterno']; ?>" /></td>
      <td><label for="textfield13"></label>
        <input name="apellido_materno" type="text" class="te" id="textfield13" placeholder="APELLIDO MATERNO " autocomplete="off" value="<?php echo $row_Recordset1['apellido_materno']; ?>" /></td>
    </tr>
    <tr>
      <td>MATRICULA</td>
      <td>NOMBRE(S)</td>
      <td>APELLIDO PATERNO</td>
      <td>APELLIDO MATERNO</td>
    </tr>
    <tr>
      <td><label for="textfield14"></label>
        <input name="lugar" type="text" class="te" id="textfield14"  placeholder="LUGAR DE NACIMIENTO" autocomplete="off" value="<?php echo $row_Recordset1['lugar']; ?>" /></td>
      <td><label for="textfield15"></label>
        <input name="calle" type="text" class="te" id="textfield15" placeholder="CALLE/AVENIDA" autocomplete="off" value="<?php echo $row_Recordset1['calle']; ?>" /></td>
      <td width="164"><label for="textfield16"></label>
        <input name="telefono" type="text" class="te" id="textfield16"  placeholder="TELEFONO" autocomplete="off" value="<?php echo $row_Recordset1['telefono']; ?>" /></td>
      <td width="186"><label for="textfield17"></label>
        <input name="ocupacion" type="text" class="te" id="textfield17" placeholder="OCUPACION" autocomplete="off" value="<?php echo $row_Recordset1['ocupacion']; ?>" /></td>
    </tr>
    <tr>
      <td>LUGAR DE NACIMIENTO</td>
      <td>CALLE O AVENIDA</td>
      <td width="164">TELEFONO</td>
      <td width="186">OCUPACION</td>
    </tr>
    <tr>
      <td><label for="textfield18"></label>
        <input type="text" value="<?php echo $row_Recordset2['nombre_alumno']; ?>" name="nombre_alumno" id="textfield18" placeholder"NOMBRE DEL ALUMNO" autocomplete="off" class="te"/></td>
      <td><label for="textfield18"></label>
        <input type="text" value="<?php echo $row_Recordset2['apellido_paterno']; ?>" name="apellido_paterno" id="textfield18" placeholder"APELLIDO PATERNO" autocomplete="off" class="te"/></td>
      <td><label for="textfield18"></label>
        <input type="text" value="<?php echo $row_Recordset2['apellido_materno']; ?>" name="apellido_materno" id="textfield18" placeholder"APELLIDO MATERNO" autocomplete="off" class="te"/></td>
    </tr>
    <tr>
      <td>NOMBRE DEL ALUMNO</td>
      <td width="164">APELLIDO PATERNO</td>
      <td width="186">APELLIDO MATERNO</td>
    </tr>
    
  </table>
</div>
<div id="contenedor">
  
</div>
<div id="menu">

<div id="logo">

</div>

<div id="separa" class="contenedor-general">

<div class="logo-interior">

</div>


<p class="texto"><a href="http://localhost/proyecto/css%20y%20php/menu.php">INICIO</a></p>

<!---->


<div id="separa" class="contenedor-general">

<div class="logo-interior">

</div>


<p class="texto"><a href="http://localhost/proyecto/css%20y%20php/actualizar_tutor.php">ACTUALIZA</a></p>
</div>

<div id="formulario"></div>

</body>


</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
