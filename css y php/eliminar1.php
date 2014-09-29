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




if ((isset($_POST['mat'])) && ($_POST['mat'] != "")) {
  $deleteSQL = sprintf("DELETE FROM alumno WHERE matricula_alumno=%s",
                       GetSQLValueString($_POST['mat'], "int"));

  mysql_select_db($database_proyecto, $proyecto);
  $Result1 = mysql_query($deleteSQL, $proyecto) or die(mysql_error());

$mat=$_POST["matricula_alumno"];


//$nom=$_POST['nombre_alumno'];
//$app=$_POST['apellido_paterno'];
//$gra=$_POST['grado'];
//$gru=$_POST['grupo'];

    header("Location:http://localhost/proyecto/css y php/muestra_eliminacion.php?matricula=$mat");
    

}

$colname_elimina = "-1";
if (isset($_GET['matricula_alumno'])) {
  $colname_elimina = $_GET['matricula_alumno'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_elimina = sprintf("SELECT * FROM alumno WHERE matricula_alumno = %s", GetSQLValueString($colname_elimina, "int"));
$elimina = mysql_query($query_elimina, $proyecto) or die(mysql_error());
$row_elimina = mysql_fetch_assoc($elimina);
$totalRows_elimina = mysql_num_rows($elimina);
?>
<style type="text/css">
div.cabezal {background: #f0f0f0;
width: 900px;
height: 130px;
margin: auto;
border-radius: 10px 10px 10px 10px;
box-shadow: 0px 0px 5px #2f3030 inset;
}
#apDiv1 {
	position: absolute;
	left: 835px;
	top: 359px;
	width: 59px;
	height: 25px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 830px;
	top: 327px;
	width: 75px;
	height: 29px;
	z-index: 2;
}
</style>
<div id="apDiv1"><a href="eliminar.php"><img src="../img/regresar.png" width="66" height="28" border="0" /></a></div>
<div id="apDiv2">
  <table width="94" border="0">
    <tr>
      <td>REGRESAR</td>
    </tr>
  </table>
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


<p>&nbsp;</p>
<table width="548" border="0" align="center">
  <tr>
    <td width="294" align="center" bgcolor="#FF0000"><em>DESEA ELIMINAR ESTE REGISTRO?</em></td>
    <td width="238" bgcolor="#FF0000"><img src="../eli_alum.png" width="121" height="120"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php echo $row_elimina['matricula_alumno']; ?></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php echo $row_elimina['nombre_alumno']; ?></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php echo $row_elimina['apellido_paterno']; ?></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php echo $row_elimina['grado']; ?></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php echo $row_elimina['grupo']; ?></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="">
  <input name="mat" type="hidden" id="mat" value="<?php echo $row_elimina['matricula_alumno']; ?>">
 <center> <input type="submit" name="button" id="button" value="ELIMINAR"></center>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
mysql_free_result($elimina);
?>
