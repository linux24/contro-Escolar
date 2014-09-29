<?php require_once('../Connections/proyecto.php'); ?>
<?php require_once('../Connections/proyecto.php'); ?>
<?php require_once('../Connections/proyecto.php');
 $grado=$_GET['grado'];
 $grupo=$_GET['grupo'];
 $matricula_alumno=$_GET['matricula_alumno'];
 $bimestre=$_GET['bimestre'];
  
	  
   
   
 
 ?>
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
$query_Recordset1 = "SELECT * FROM year1_bim1";
$Recordset1 = mysql_query($query_Recordset1, $proyecto) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$var1_Recordset2 = "0";
if (isset($_GET['bimestre'])) {
  $var1_Recordset2 = $_GET['bimestre'];
}
$var2_Recordset2 = "0";
if (isset($_GET['grupo'])) {
  $var2_Recordset2 = $_GET['grupo'];
}
$var3_Recordset2 = "0";
if (isset($_GET['matricula_alumno'])) {
  $var3_Recordset2 = $_GET['matricula_alumno'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_Recordset2 = sprintf("SELECT * FROM year1_bim1 WHERE year1_bim1.bimestre= %s and grupo= %s and matricula_alumno= %s", GetSQLValueString($var1_Recordset2, "int"),GetSQLValueString($var2_Recordset2, "text"),GetSQLValueString($var3_Recordset2, "int"));
$Recordset2 = mysql_query($query_Recordset2, $proyecto) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);

   
   if(  $row_Recordset2["esp"] and  $row_Recordset2["ingles"] and  $row_Recordset2["matematicas"]  and  $row_Recordset2["biologia"] and  $row_Recordset2["geografia"] and  $row_Recordset2["educacion_fisica"] and  $row_Recordset2["tecnologia"] and  $row_Recordset2["artes"])
   {
header("Location:http://localhost/proyecto/css%20y%20php/alerta_insert_calif.php");
                
	 }
   else
   {

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 527px;
	top: 259px;
	width: 211px;
	height: 209px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 496px;
	top: 207px;
	width: 275px;
	height: 30px;
	z-index: 2;
	text-align: center;
	background-color: #D6D6D6;
}
div.cabezal {background: #f0f0f0;
width: 900px;
height: 130px;
margin: auto;
border-radius: 10px 10px 10px 10px;
box-shadow: 0px 0px 5px #2f3030 inset;
}
body {
	background-image: url(../img/menufondo.jpg);
}
#apDiv3 {
	position: absolute;
	left: 380px;
	top: 509px;
	width: 72px;
	height: 30px;
	z-index: 3;
}
</style>
<script type="text/javascript" src="js/incex.js"></script>s
</head>

<body>
<div id="apDiv1">
 <table width="346" height="305">
      <form action='calif_bimestre1.php' method='post' name="form_tecnicos" id="form_tecnicos" onsubmit="return revisar_tecnicos()">
        <tr>
          <td width="220"><input name="grado" type='hidden' value='<?php echo $grado;?>' size="5" id="esp" />          </td>
          <td width="220"><input name="grupo" type='hidden' value='<?php echo $grupo;?>' size="5" id="esp" />          </td>
          <td width="220"><input name="matricula_alumno" type='hidden' value='<?php echo $matricula_alumno;?>' size="5" id="esp" />          </td>

          <td width="220"><input name="bimestre" type='hidden' value='<?php echo $bimestre;?>' size="5" id="esp" />          </td>
        </tr>
        <tr>
          <td width="114" class="color-4">Español:</td>
          <td width="220"><input name="esp" type='text' value='' size="5" id="esp" autocomplete="off" required onkeypress="return soloNumeros(event);"/>          </td>
        </tr>

        <tr>
          <td class="color-4"><span class="Estilo14">Ingles:</span></td>
          <td><input name="ingles" type='text' value='' size="5" id="ingles" required autocomplete="off" onkeypress="return soloNumeros(event);"/></td>
        </tr>
		 <tr>
          <td class="color-4"><span class="Estilo14">Matematicas:</span></td>
          <td><input name="matematicas" type='text' id="matematicas" value='' size="5" required autocomplete="off" onkeypress="return soloNumeros(event);" /></td>
        </tr>
        <tr>
          <td class="color-4"><span class="Estilo14">Biologia:</span></td>
          <td><input name="biologia" type='text' id="biologia" value='' size="5" required autocomplete="off" onkeypress="return soloNumeros(event);"/></td>
        </tr>

        <tr>
          <td class="color-4"><span class="Estilo14">Geografia:</span></td>
          <td><input name="geografia" type='text' id="geografia" value='' size="5" required autocomplete="off" onkeypress="return soloNumeros(event);" /></td>
        </tr>
		 <tr>
          <td height="24" class="color-4"><span class="Estilo14">Educacion Fisica:</span></td>
          <td><input name="educacion_fisica" type='text' id="educacion_fisica" value='' size="5" required autocomplete="off" onkeypress="return soloNumeros(event);"/></td>
        </tr>
        <tr>
           <td class="color-4">Tecnologia:</td>
           <td><input name="tecnologia" type='text' id="tecnologia" value='' size="5" required autocomplete="off" onkeypress="return soloNumeros(event);" /></td>
        </tr>
        <tr>
          <td class="color-4"><span class="Estilo14">Arte:</span></td>
          <td><input name="artes" type='text' id="artes" value='' size="5" required autocomplete="off" onkeypress="return soloNumeros(event);" /></td>
        </tr>
       
        <tr>
          <td height="26"></td>
          <td><input name="submit" type='submit' value='Guardar' />          </td>
        </tr>
      </form>
  </table>
</div>
<div id="apDiv2">ASIGNAR CALIFICACIONES</div>
<div id="apDiv3"><a href="grupo1a.php"><img src="../img/regresar.png" width="51" height="50" /></a></div>
<div  class="cabezal">
  <table id="centrar-tabla" cellspacing="20" cellpadding="0" border="0">
    <tr>
      <td ><img src="../img/1.png" alt="primero" width="177" height="65" /></td>
      <td><img src="../img/sev.png" alt="uno" width="221" height="113" /></td>
      <td><img src="../img/3.png" alt="firs" width="300" height="50" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="">
  <center>
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="<?php echo $editFormAction; ?>">
    <p>&nbsp;</p>
    <p>
      <center>
      </center>
    </p>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <form id="form2" name="form2" method="post" action="">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>

  

<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
<?php
   }
?>