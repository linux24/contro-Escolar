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

$var_buscaElimina = "0";
if (isset($_POST['bus'])) {
  $var_buscaElimina = $_POST['bus'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_buscaElimina = sprintf("SELECT * FROM alumno WHERE matricula_alumno = %s", GetSQLValueString($var_buscaElimina, "int"));
$buscaElimina = mysql_query($query_buscaElimina, $proyecto) or die(mysql_error());
$row_buscaElimina = mysql_fetch_assoc($buscaElimina);
$totalRows_buscaElimina = mysql_num_rows($buscaElimina);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style type="text/css">
  
  input.let{
    text-transform: uppercase;
    width: 15em;
    height: 20px;
   border:3px solid #f0f0f0;
    color: silver;
   }
#apDiv1 {
	position: absolute;
	left: 810px;
	top: 639px;
	width: 215px;
	height: 20px;
	z-index: 1;



}

}
</style>
<script type="text/javascript" src="../jquery-2.0.3.js"></script>
<script type="text/javascript" src="js/incex.js"></script>
</head>

<body>
<div id="apDiv1">CORREO ELECTRONICO</div>
<table width="281" border="0" align="center">
  <tr>
    <td width="125"><img src="../DAT.png" alt="actualizar" width="120" height="120" /></td>
    <td width="24">&nbsp;</td>
    <td width="110"><img src="../tele.jpg" alt="actualiza" width="103" height="86" /></td>
  </tr>
  <tr>
    <td colspan="3" align="center">REGISTRO DE LOS ESTUDIANTES DE LA ESCUELA TELESECUNDARIA IGNACIO ZARAGOZA</td>
  </tr>
</table>

<p>&nbsp;</p>
<table width="376" border="0" align="center">
  <tr>
    <td align="center">ASISTENTE DE ELIMINACION DE REGISTRO</td>
  </tr>
</table>
<p>&nbsp; </p>
<form name="form1" method="post" action="">
  <table width="200" border="0" align="center">
    <tr>
      <td>MATRICULA</td>
      <td><label for="grado"></label>
        <input type="text" name="bus" id="textfield11" placeholder="MATRICULA"  class="let" required onkeypress="return soloNumeros(event);"></td>
      <td><input type="submit" name="btn" id="but" value="BUSCAR"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="610" border="0" align="center">
    <tr>
      <td><label for="textfield2"></label>
        <input type="text" name="matricula_alumno" value="<?php echo $row_buscaElimina['matricula_alumno']; ?>" placeholder="MATRICULA"  class="let"  readonly="readonly"/></td>
      <td><label for="textfield3"></label>
        <input type="text" name="nombre_alumno" value="<?php echo $row_buscaElimina['nombre_alumno']; ?>" placeholder="NOMBRE"  class="let"  readonly="readonly"/></td>
      <td width="147"><label for="textfield4"></label>
        <input name="apellido_paterno" type="text" value="<?php echo $row_buscaElimina['apellido_paterno']; ?>" placeholder="APELLIDO PATERNO" class="let"  readonly="readonly"/></td>
      <td width="191"><label for="textfield5"></label>
        <input type="text" name="apellido_materno" value="<?php echo $row_buscaElimina['apellido_materno']; ?>" placeholder="APELLIDO MATERNO" class="let"  readonly="readonly"/></td>
    </tr>
    <tr>
      <td width="144" align="center">MATRICULA</td>
      <td width="100" align="center">NOMBRE(S)</td>
      <td>APELLIDO PATERNO</td>
      <td>APELLIDO MATERNO</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label for="select"></label>
        <label for=""></label>
      <input name="matricula_periodo" type="text" id="matricula_periodo" value="<?php echo $row_buscaElimina['matricula_periodo']; ?>" placeholder="PERIODO" class="let"  readonly="readonly"/></td>
      <td align="center"><label for="grado"></label>
        <input type="text" name="grado" value="<?php echo $row_buscaElimina['grado']; ?>" id="grado" placeholder="GRADO" class="let"  readonly="readonly" />
      <label for="select2"></label></td>
      <td align="center"><label for="grupo"></label>
        <input type="text" name="grupo" value="<?php echo $row_buscaElimina['grupo']; ?>" id="grupo"  placeholder="GRUPO"class="let"  readonly="readonly"/>
      <label for="select3"></label></td>
    </tr>
    <tr>
      <td colspan="2" align="center">PERIODO O CICLO</td>
      <td align="center">GRADO</td>
      <td align="center">GRUPO</td>
    </tr>
    <tr>
      <td colspan="4" align="center">DATOS DEL DOMICILIO DEL ALUMNO</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label for="textfield6"></label>
        <input type="text" name="lugar" value="<?php echo $row_buscaElimina['lugar']; ?>" placeholder="LUGAR" class="let"  readonly="readonly"/></td>
      <td align="center"><label for="textfield7"></label>
        <input type="text" name="calle" value="<?php echo $row_buscaElimina['calle']; ?>" placeholder="CALLE/AVENIDA" class="let"  readonly="readonly" /></td>
      <td align="center"><label for="textfield8"></label>
        <input type="text" name="fecha_nacimiento" value="<?php echo $row_buscaElimina['fecha_nacimiento']; ?>" placeholder="FECHA DE NACIMIENTO" class="let"  readonly="readonly"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center">LUGAR DE NACIMIENTO</td>
      <td align="center">CALLE O AVENIDA</td>
      <td align="center">FECHA DE NACIMIENTO</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label for="textfield9"></label>
        <input type="text" name="telefono" value="<?php echo $row_buscaElimina['telefono']; ?>" placeholder="TELEFONO" class="let"  readonly="readonly"/></td>
      <td align="center"><label for="id_grupo"></label>
      <input name="id_grupo" type="hidden" id="id_grupo" value="<?php echo $row_buscaElimina['id_grupo']; ?>" class="let"  readonly="readonly"></td>
      <td align="center"><label for=""></label>
      <input type="text" name="correo" value="<?php echo $row_buscaElimina['correo']; ?>" placeholder="CORREO" class="let"  readonly="readonly"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center">TELEFONO</td>
      <!--<td align="center">ID</td>-->
      <td  align="center">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" align="center"><a href="eliminar1.php?matricula_alumno=<?php echo $row_buscaElimina['matricula_alumno']; ?>">ELIMINAR</a></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($buscaElimina);
?>
