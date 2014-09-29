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
  $insertSQL = sprintf("INSERT INTO year1_bim4 (bimestre, matricula_alumno, nombre_alumno, esp1, ingles1, matematicas1, ciencias1_biologia, geografia_mexico, educacion_fisica1, tecnologia1, artes1, asignatura_estatal, tutoria, tic, vida_saludable) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['bimestre'], "int"),
                       GetSQLValueString($_POST['matricula_alumno'], "int"),
                       GetSQLValueString($_POST['nombre_alumno'], "text"),
                       GetSQLValueString($_POST['esp1'], "int"),
                       GetSQLValueString($_POST['ingles1'], "int"),
                       GetSQLValueString($_POST['matematicas1'], "int"),
                       GetSQLValueString($_POST['ciencias1_biologia'], "int"),
                       GetSQLValueString($_POST['geografia_mexico'], "int"),
                       GetSQLValueString($_POST['educacion_fisica1'], "int"),
                       GetSQLValueString($_POST['tecnologia1'], "int"),
                       GetSQLValueString($_POST['artes1'], "int"),
                       GetSQLValueString($_POST['asignatura_estatal'], "int"),
                       GetSQLValueString($_POST['tutoria'], "int"),
                       GetSQLValueString($_POST['tic'], "int"),
                       GetSQLValueString($_POST['vida_saludable'], "int"));

  mysql_select_db($database_proyecto, $proyecto);
  $Result1 = mysql_query($insertSQL, $proyecto) or die(mysql_error());
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO year1_bim1 (bimestre, matricula_alumno, nombre_alumno, esp1, ingles1, matematicas1, ciencias1_biologia, geografia_mexico, educacion_fisica1, tecnologia1, artes1, asignatura_estatal, tutoria, tic, vida_saludable) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['bimestre'], "int"),
                       GetSQLValueString($_POST['matricula_alumno'], "int"),
                       GetSQLValueString($_POST['nombre_alumno'], "text"),
                       GetSQLValueString($_POST['esp1'], "int"),
                       GetSQLValueString($_POST['ingles1'], "int"),
                       GetSQLValueString($_POST['matematicas1'], "int"),
                       GetSQLValueString($_POST['ciencias1_biologia'], "int"),
                       GetSQLValueString($_POST['geografia_mexico'], "int"),
                       GetSQLValueString($_POST['educacion_fisica1'], "int"),
                       GetSQLValueString($_POST['tecnologia1'], "int"),
                       GetSQLValueString($_POST['artes1'], "int"),
                       GetSQLValueString($_POST['asignatura_estatal'], "int"),
                       GetSQLValueString($_POST['tutoria'], "int"),
                       GetSQLValueString($_POST['tic'], "int"),
                       GetSQLValueString($_POST['vida_saludable'], "int"));

  mysql_select_db($database_proyecto, $proyecto);
  $Result1 = mysql_query($insertSQL, $proyecto) or die(mysql_error());
}

mysql_select_db($database_proyecto, $proyecto);
$query_year = "SELECT * FROM grado";
$year = mysql_query($query_year, $proyecto) or die(mysql_error());
$row_year = mysql_fetch_assoc($year);
$totalRows_year = mysql_num_rows($year);

mysql_select_db($database_proyecto, $proyecto);
$query_grupo = "SELECT * FROM grupos";
$grupo = mysql_query($query_grupo, $proyecto) or die(mysql_error());
$row_grupo = mysql_fetch_assoc($grupo);
$totalRows_grupo = mysql_num_rows($grupo);

$v1_alumn = "0";
if (isset($_POST['var1'])) {
  $v1_alumn = $_POST['var1'];
}
$v2_alumn = "0";
if (isset($_POST['var2'])) {
  $v2_alumn = $_POST['var2'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_alumn = sprintf("SELECT matricula_alumno, nombre_alumno, apellido_paterno, id_grupo, grado, grupo FROM alumno where grado=%s and id_grupo=%s", GetSQLValueString($v1_alumn, "int"),GetSQLValueString($v2_alumn, "int"));
$alumn = mysql_query($query_alumn, $proyecto) or die(mysql_error());
$row_alumn = mysql_fetch_assoc($alumn);
$totalRows_alumn = mysql_num_rows($alumn);

mysql_select_db($database_proyecto, $proyecto);
$query_bim1 = "SELECT * FROM year1_bim1";
$bim1 = mysql_query($query_bim1, $proyecto) or die(mysql_error());
$row_bim1 = mysql_fetch_assoc($bim1);
$totalRows_bim1 = mysql_num_rows($bim1);
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
<p>&nbsp;</p>
<div id="menu">

<div id="logo">

</div>

<div id="separa" class="contenedor-general">

<div class="logo-interior">

</div>


<p class="texto"><a href="primero.php">ATRAS</a></p>
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
  <p>&nbsp;</p>
  <table width="454" border="1" align="center">
    <tr>
      <td>INSERCION DE CALIFICACIONES PROMER AÑO BIMESTRE 4</td>
    </tr>
  </table>
  <form id="form1" name="form1" method="post" action="">
  
  <center>
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
    <table width="1013" border="1">
      <tr>
        <td width="90" align="center" bgcolor="#999999">BIMESTRE</td>
        <td width="109" align="center" bgcolor="#999999">MATRICULA</td>
        <td width="81" align="center" bgcolor="#999999">NOMBRE</td>
        <td width="100" align="center" bgcolor="#999999">ESPAÑOL I</td>
        <td width="94" align="center" bgcolor="#999999">INGLES I</td>
        <td width="185" align="center" bgcolor="#999999">MATEMATICAS I</td>
        <td width="119" bgcolor="#999999">BIOLOGIA</td>
        <td width="183" bgcolor="#999999">GEOGRAFIA DE MEXICO</td>
      </tr>
      <tr>
        <td><label for="bimestre"></label>
        <input type="text" name="bimestre" id="bimestre" /></td>
        <td><label for="matricula_alumno"></label>
        <input type="text" name="matricula_alumno" id="matricula_alumno" /></td>
        <td><label for="nombre_alumno"></label>
        <input type="text" name="nombre_alumno" id="nombre_alumno" /></td>
        <td><label for="esp1"></label>
        <input type="text" name="esp1" id="esp1" /></td>
        <td><label for="ingles1"></label>
        <input type="text" name="ingles1" id="ingles1" /></td>
        <td><label for="matematicas1"></label>
        <input type="text" name="matematicas1" id="matematicas1" /></td>
        <td><label for="ciencias1_biologia"></label>
        <input type="text" name="ciencias1_biologia" id="ciencias1_biologia" /></td>
        <td><label for="geografia_mexico"></label>
        <input type="text" name="geografia_mexico" id="geografia_mexico" /></td>
      </tr>
    </table>
    <table width="1035" border="1">
      <tr>
        <td width="162" height="25" align="center" bgcolor="#999999">EDUCACION FISICA I</td>
        <td width="121" align="center" bgcolor="#999999">TECNOLOGIA I</td>
        <td width="117" align="center" bgcolor="#999999">ARTE I</td>
        <td width="182" align="center" bgcolor="#999999">ASIGNATURA ESTATAL</td>
        <td width="119" align="center" bgcolor="#999999">TUTORIA</td>
        <td width="100" align="center" bgcolor="#999999">TIC</td>
        <td width="144" align="center" bgcolor="#999999">VIDA SALUDABLE</td>
      </tr>
      <tr>
        <td><label for="educacion_fisica1"></label>
        <input type="text" name="educacion_fisica1" id="educacion_fisica1" /></td>
        <td><label for="tecnologia1"></label>
        <input type="text" name="tecnologia1" id="tecnologia1" /></td>
        <td><label for="artes1"></label>
        <input type="text" name="artes1" id="artes1" /></td>
        <td><label for="asignatura_estatal"></label>
        <input type="text" name="asignatura_estatal" id="asignatura_estatal" /></td>
        <td><label for="tutoria"></label>
        <input type="text" name="tutoria" id="tutoria" /></td>
        <td><label for="tic"></label>
        <input type="text" name="tic" id="tic" /></td>
        <td><label for="vida_saludable"></label>
        <input type="text" name="vida_saludable" id="vida_saludable" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>
      <center><input type="submit" name="button" id="button" value="INSERTAR" /></center>
    </p>
    <input type="hidden" name="MM_insert" value="form1" />
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <form id="form2" name="form2" method="post" action="">
  
    <p>BUSCAR POR AÑO
      <label for="var1"></label>
      <select name="var1" id="var1">
        <option value=""></option>
        <?php
do {  
?>
        <option value="<?php echo $row_year['nivel']?>"><?php echo $row_year['nivel']?></option>
        <?php
} while ($row_year = mysql_fetch_assoc($year));
  $rows = mysql_num_rows($year);
  if($rows > 0) {
      mysql_data_seek($year, 0);
	  $row_year = mysql_fetch_assoc($year);
  }
?>
      </select>
  GRUPO
  <label for="var2"></label>
  <select name="var2" id="var2">
    <option value=""></option>
    <?php
do {  
?>
    <option value="<?php echo $row_grupo['id_grupo']?>"><?php echo $row_grupo['id_grupo']?></option>
    <?php
} while ($row_grupo = mysql_fetch_assoc($grupo));
  $rows = mysql_num_rows($grupo);
  if($rows > 0) {
      mysql_data_seek($grupo, 0);
	  $row_grupo = mysql_fetch_assoc($grupo);
  }
?>
  </select>
  <input type="submit" name="button2" id="button2" value="buscar" />
    </p>
    <p>&nbsp;</p>
    <table border="1">
      <tr>
        <td>matricula_alumno</td>
        <td>nombre_alumno</td>
        <td>apellido_paterno</td>
        <td>id_grupo</td>
        <td>grado</td>
        <td>grupo</td>
      </tr>
      <?php do { ?>
        <tr>
          <td><?php echo $row_alumn['matricula_alumno']; ?></td>
          <td><?php echo $row_alumn['nombre_alumno']; ?></td>
          <td><?php echo $row_alumn['apellido_paterno']; ?></td>
          <td><?php echo $row_alumn['id_grupo']; ?></td>
          <td><?php echo $row_alumn['grado']; ?></td>
          <td><?php echo $row_alumn['grupo']; ?></td>
        </tr>
        <?php } while ($row_alumn = mysql_fetch_assoc($alumn)); ?>
    </table>
<p>&nbsp;</p>
  </form>
<p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
  
</body>
</html>
<?php
mysql_free_result($year);

mysql_free_result($grupo);

mysql_free_result($alumn);

mysql_free_result($bim1);
?>
