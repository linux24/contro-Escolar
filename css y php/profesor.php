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
  $insertSQL = sprintf("INSERT INTO profesor (matricula_profesor, nombre_profesor, apellido_paterno, apellido_materno, nombre_materia, direccion, correo, telefono, lugar_nacimiento, fecha_nacimiento, grado, grupo) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['matricula_profesor'], "int"),
                       GetSQLValueString($_POST['nombre_profesor'], "text"),
                       GetSQLValueString($_POST['apellido_paterno'], "text"),
                       GetSQLValueString($_POST['apellido_materno'], "text"),
                       GetSQLValueString($_POST['nombre_materia'], "text"),
                       GetSQLValueString($_POST['direccion'], "text"),
                       GetSQLValueString($_POST['correo'], "text"),
                       GetSQLValueString($_POST['telefono'], "text"),
                       GetSQLValueString($_POST['lugar_nacimiento'], "text"),
                       GetSQLValueString($_POST['fecha_nacimiento'], "text"),
					   GetSQLValueString($_POST['grado'], "int"),
					   GetSQLValueString($_POST['grupo'], "text"));
					   

  mysql_select_db($database_proyecto, $proyecto);
  $Result1 = mysql_query($insertSQL, $proyecto) or die(mysql_error());
}

mysql_select_db($database_proyecto, $proyecto);
$query_profe = "SELECT * FROM profesor";
$profe = mysql_query($query_profe, $proyecto) or die(mysql_error());
$row_profe = mysql_fetch_assoc($profe);
$totalRows_profe = mysql_num_rows($profe);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="datepicker/jquery-ui.css">
<script src="datepicker/jquery-1.10.2.js"></script>
<script src="datepicker/jquery-ui.js"></script>

<script type="text/javascript" src="js/incex.js"></script>

<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>

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
input.let{
    text-transform: uppercase;
    width: 15em;
    height: 20px;
   border:3px solid #f0f0f0;
    color: silver;
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


<p class="texto"><a href="menu.php">INICIO</a></p>
</div>

<!--segundo menu-->


<div id="separa" class="contenedor-general">

<div class="logo-interior">

</div>


<p class="texto"><a href="consulta_profe.php">CONSULTA</a></p>
</div>

<!--tercer menu-->
<div id="separa" class="contenedor-general">

<div class="logo-interior">

</div>


<p class="texto"><a href="actualiza_profe.php">ACTUALIZA</a></p>
</div>
<!--CUARTO menu-->
<div id="separa" class="contenedor-general">

<div class="logo-interior">

</div>


<p class="texto"><a href="elimina_pro1.php">ELIMINAR</a></p>
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
  <table width="435" border="0" align="center">
    <tr>
      <td align="center">ASISTENTE DE INSERCION DE LOS PROFESORES</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<p>&nbsp;</p>
<form name="form1" method="POST" action="<?php echo $editFormAction; ?>">
  
  <p>&nbsp;</p>
  <table width="610" border="0" align="center">
    <tr>
      <td><label for="textfield2"></label>
        <input name="matricula_profesor" type="text" id="matricula_profesor" placeholder="MATRICULA" class="let" required onkeypress="return soloNumeros(event);" /></td>
      <td><label for="textfield3"></label>
        <input name="nombre_profesor" type="text" id="nombre_profesor" placeholder="NOMBRE" class="let" required onkeypress="return sololetras(event);" /></td>
      <td width="147"><label for="textfield4"></label>
        <input type="text" name="apellido_paterno" placeholder="APELLIDO PATERNO" class="let" required onkeypress="return sololetras(event);" /></td>
      <td width="191"><label for="textfield5"></label>
        <input type="text" name="apellido_materno" placeholder="APELLIDO MATERNO" class="let" required onkeypress="return sololetras(event);" /></td>
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
        <input name="nombre_materia" type="text" id="nombre_materia" placeholder="MATERIAS" class="let" required  /></td>
      <td align="center"><label for="direccion"></label>
        <input name="direccion" type="text" id="direccion" placeholder="DIRECCION" class="let" required  />
        <label for="select2"></label></td>
      <td align="center"><label for="correo"></label>
        <input type="email" name="correo"  id="correo" placeholder="CORREO" class="let" required />
        <label for="select3"></label></td>
    </tr>
    <tr>
      <td colspan="2" align="center">MATERIA(S) QUE IMPARTE</td>
      <td align="center">DIRECCION</td>
      <td align="center">CORREO</td>
    </tr>
    
    <tr>
      <td colspan="2" align="center"><label for="textfield6"></label>
        <input name="telefono" type="text" id="telefono" placeholder="TELEFONO" class="let" required onkeypress="return soloNumeros(event);" /></td>
      <td align="center"><label for="textfield7"></label>
        <input name="lugar_nacimiento" type="text" id="lugar_nacimiento" placeholder="LUGAR DE NACIMIENTO" class="let" required onkeypress="return sololetras(event);" /></td>
      <td align="center"><label for="textfield8"></label>
        <input type="text" name="fecha_nacimiento" value="" id="datepicker" placeholder="FECHA DE NACIMIENTO" class="let" required onkeypress="return soloNumeros(event);" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center">TELEFONO</td>
      <td align="center">LUGAR DE NACIMIENTO</td>
      <td align="center">FECHA DE NACIMIENTO</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label for="textfield9"></label>
        <input name="grado" type="text" size="2" id="telefono" placeholder="GRADO" class="let" required onkeypress="return soloNumeros(event);" /></td>
      <td colspan="2" align="center"><label for="textfield10"></label>
        <input name="grupo" type="text" size="2" id="telefono" placeholder="GRUPO" class="let" required onkeypress="return sololetras(event);" /></td>

      
    </tr>
    <tr>
      <td colspan="2" align="center">GRADO</td>
      <td colspan="2" align="center">GRUPO</td>

    </tr>
    <tr>
      <td colspan="4" align="center"><input type="submit" name="button" id="button" value="INSERTAR" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
</body>
</html>
<?php
mysql_free_result($profe);
?>
