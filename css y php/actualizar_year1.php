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
  $updateSQL = sprintf("UPDATE year1_bim1  SET bimestre=%s, matricula_alumno=%s, esp1=%s, ingles1=%s, matematicas1=%s, ciencias1_biologia=%s, geografia_mexico=%s, educacion_fisica1=%s, tecnologia1=%s, artes1=%s, asignatura_estatal=%s, tutoria=%s, tic=%s, vida_saludable=%s WHERE matricula_alumno",
                       GetSQLValueString($_POST['bimestre'], "int"),
                       GetSQLValueString($_POST['matricula_alumno'], "int"),
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
                       GetSQLValueString($_POST['vida_saludable'], "int"),
                       GetSQLValueString($_POST['nombre_alumno'], "text"));

  mysql_select_db($database_proyecto, $proyecto);
  $Result1 = mysql_query($updateSQL, $proyecto) or die(mysql_error());
}

$v1_consulta = "0";
if (isset($_POST['var1'])) {
  $v1_consulta = $_POST['var1'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_consulta = sprintf("SELECT * FROM year1_bim1 WHERE matricula_alumno = %s", GetSQLValueString($v1_consulta, "int"));
$consulta = mysql_query($query_consulta, $proyecto) or die(mysql_error());
$row_consulta = mysql_fetch_assoc($consulta);
$totalRows_consulta = mysql_num_rows($consulta);
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

div#tab1
{
	

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


<p class="texto"><a href="primero.php">ATRAS</a></p>
</div>

<!--segundo menu-->




<!--tercer menu-->



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
</div>




<center><table id="tab1" width="345" border="1">
  <tr>
    <td width="240" align="center">ACTUALIZACION  DE CALIFICACIONES DEL PRIMER AÑO</td>
  </tr>
</table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="303" border="1">
    <tr>
      <td align="center" valign="middle"><strong>CONSULTAR TODOS LOS REGISTROS</strong></td>
    </tr>
  </table>
  <form id="form2" name="form2" method="post" action="">
    <p>&nbsp;</p>
    <p>
      <label for="var2">MATRICULA</label>
      <input type="text" name="var1" id="var2" />
      
      <input type="submit" name="button3" id="button3" value="BUSCAR" />
    </p>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table border="1">
    <tr>
      <td>bimestre</td>
      <td>matricula_alumno</td>
      <td>nombre_alumno</td>
      <td>esp1</td>
      <td>ingles1</td>
      <td>matematicas1</td>
      <td>ciencias1_biologia</td>
      <td>geografia_mexico</td>
      <td>educacion_fisica1</td>
      <td>tecnologia1</td>
      <td>artes1</td>
      <td>asignatura_estatal</td>
      <td>tutoria</td>
      <td>tic</td>
      <td>vida_saludable</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_consulta['bimestre']; ?></td>
        <td><?php echo $row_consulta['matricula_alumno']; ?></td>
        <td><?php echo $row_consulta['nombre_alumno']; ?></td>
        <td><?php echo $row_consulta['esp1']; ?></td>
        <td><?php echo $row_consulta['ingles1']; ?></td>
        <td><?php echo $row_consulta['matematicas1']; ?></td>
        <td><?php echo $row_consulta['ciencias1_biologia']; ?></td>
        <td><?php echo $row_consulta['geografia_mexico']; ?></td>
        <td><?php echo $row_consulta['educacion_fisica1']; ?></td>
        <td><?php echo $row_consulta['tecnologia1']; ?></td>
        <td><?php echo $row_consulta['artes1']; ?></td>
        <td><?php echo $row_consulta['asignatura_estatal']; ?></td>
        <td><?php echo $row_consulta['tutoria']; ?></td>
        <td><?php echo $row_consulta['tic']; ?></td>
        <td><?php echo $row_consulta['vida_saludable']; ?></td>
      </tr>
      <?php } while ($row_consulta = mysql_fetch_assoc($consulta)); ?>
  </table>
</center>

<center>
</center>

</body>
</html>
<?php
mysql_free_result($consulta);
?>
