<?php
$mat=$_GET['matricula'];
$nombre=$_GET['nombre'];
$ap=$_GET['ap'];
$am=$_GET['am'];

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

 $mat=$_GET['matricula'];
$nombre=$_GET['nombre'];



if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO tutor (matricula_tutor, nombre, apellido_paterno, apellido_materno, lugar, calle, ocupacion, telefono, nombre_alumno) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['matricula_tutor'], "int"),
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['apellido_paterno'], "text"),
                       GetSQLValueString($_POST['apellido_materno'], "text"),
                       GetSQLValueString($_POST['lugar'], "text"),
                       GetSQLValueString($_POST['calle'], "text"),
                       GetSQLValueString($_POST['ocupacion'], "text"),
                       GetSQLValueString($_POST['telefono'], "text"),
                       GetSQLValueString($_POST['nombre_alumno'], "text"));

  mysql_select_db($database_proyecto, $proyecto);
  $Result1 = mysql_query($insertSQL, $proyecto) or die(mysql_error());
  
  $mat=$_POST['matricula_tutor'];
  $nom=$_POST['nombre'];
    //header("Location:http://localhost/proyecto/css y php/datos_tutor1.php?matricula=$mat&nombre=$nom");
    header("Location:http://localhost/proyecto/css y php/muestra_insercion.php");

}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DATOS DEL TUTOR</title>

<style type="text/css">
  
input.te{
   text-transform: uppercase;
    width: 15em;
    height: 20px;
   border:3px solid #f0f0f0;
    color: silver;
}
input#b
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

input#b:hover
{
width: 5em;
height: 3em;
background: #888888;
border-radius: 2em;
color: black;
-webkit-transition:2s ease;
box-shadow: 5px 5px 5px  #888888;


}

#apDiv1 {
	position: absolute;
	left: 399px;
	top: 6px;
	width: 282px;
	height: 41px;
	z-index: 1;
}
</style>

<script type="text/javascript"  src="../jquery-2.0.3.js"></script>
<script type="text/javascript"  src="../jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/incex.js"></script>
</head>

<body>

<div id="apDiv1">
  <table width="281" border="0" align="center">
    <tr>
      <td width="125"><img src="../DAT.png" alt="s" width="120" height="120" /></td>
      <td width="24">&nbsp;</td>
      <td width="110"><img src="../tele.jpg" alt="d" width="103" height="86" /></td>
    </tr>
    <tr>
      <td colspan="3" align="center">REGISTRO DE LOS ESTUDIANTES DE LA ESCUELA TELESECUNDARIA IGNACIO ZARAGOZA</td>
    </tr>
  </table>
</div>
<fieldset>
<legend>DATOS DEL PADRE O TUTOR</legend>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form id="form2" name="form2" method="POST" action="<?php echo $editFormAction; ?>">
  <p>&nbsp;</p>
  <table width="752" border="0" align="center">
    <tr>
      <td width="201"><label for="textfield10"></label>
        <input type="text" value="<?php echo $mat; ?>" name="matricula_tutor" id="textfield10" placeholder="MATRICULA" autocomplete="on" class="te" readonly="readonly"/></td>
      <td width="173"><label for="textfield11"></label>
        <input type="text" name="nombre" id="textfield11" placeholder="NOMBRE" autocomplete="off" class="te" onkeypress="return sololetras(event);" /></td>
      <td><label for="textfield12"></label>
        <input type="text" name="apellido_paterno" id="textfield12" placeholder="APELLIDO PATERNO" autocomplete="off"  class="te" onkeypress="return sololetras(event);"/></td>
      <td><label for="textfield13"></label>
        <input type="text" name="apellido_materno" id="textfield13" placeholder="APELLIDO MATERNO " autocomplete="off" class="te" onkeypress="return sololetras(event);"/></td>
    </tr>
    <tr>
      <td>MATRICULA</td>
      <td>NOMBRE(S)</td>
      <td>APELLIDO PATERNO</td>
      <td>APELLIDO MATERNO</td>
    </tr>
    <tr>
      <td><label for="textfield14"></label>
        <input type="text" name="lugar" id="textfield14"  placeholder="LUGAR DE NACIMIENTO" autocomplete="off" class="te" onkeypress="return sololetras(event);" /></td>
      <td><label for="textfield15"></label>
        <input type="text" name="calle" id="textfield15" placeholder="CALLE/AVENIDA" autocomplete="off" class="te" /></td>
      <td width="164"><label for="textfield16"></label>
        <input type="text" name="telefono" id="textfield16"  placeholder="TELEFONO" autocomplete="off" class="te"  onkeypress="return soloNumeros(event);"/></td>
      <td width="186"><label for="textfield17"></label>
        <input type="text" name="ocupacion" id="textfield17" placeholder="OCUPACION" autocomplete="off" class="te" onkeypress="return sololetras(event);" /></td>
    </tr>
    <tr>
      <td>LUGAR DE NACIMIENTO</td>
      <td>CALLE O AVENIDA</td>
      <td width="164">TELEFONO</td>
      <td width="186">OCUPACION</td>
    </tr>
    <tr>
      
      <td><label for="textfield18"></label>
        <input type="text" value="<?php echo $nombre; ?>" name="nombre_alumno" id="textfield18" placeholder"NOMBRE DEL ALUMNO" autocomplete="off" class="te" readonly="readonly"/></td>
<td><label for="textfield18"></label>
        <input type="text" value="<?php echo $ap; ?>" name="apellido_paterno" id="textfield18" placeholder"APELLIDO PATERNO" autocomplete="off" class="te" onkeypress="return sololetras(event);" readonly="readonly"/></td>    
<td><label for="textfield18"></label>
        <input type="text" value="<?php echo $am; ?>" name="apellido_materno" id="textfield18" placeholder"APELLIDO MATERNO" autocomplete="off" class="te" onkeypress="return sololetras(event);" readonly="readonly"/></td>    </tr>
    <tr>
      
      <td>DATOS DEL ALUMNO</td>
      <td width="164"><input type="submit" name="button2" id="b" value="ENVIAR" /></td>
      <td width="186">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <input type="hidden" name="MM_insert" value="form2" />
</form>
</fieldset>




</body>
</html>