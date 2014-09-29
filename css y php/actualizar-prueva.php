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
  $updateSQL = sprintf("UPDATE alumno SET nombre_alumno=%s, apellido_paterno=%s, apellido_materno=%s, matricula_periodo=%s, grado=%s, grupo=%s, lugar=%s, calle=%s, fecha_nacimiento=%s, telefono=%s, correo=%s WHERE matricula_alumno=%s",
                       GetSQLValueString($_POST['nombre_alumno'], "text"),
                       GetSQLValueString($_POST['apellido_paterno'], "text"),
                       GetSQLValueString($_POST['apellido_materno'], "text"),
                       GetSQLValueString($_POST['matricula_periodo'], "text"),
                       //GetSQLValueString($_POST['id_grupo'], "int"),
                       GetSQLValueString($_POST['grado'], "int"),
                       GetSQLValueString($_POST['grupo'], "text"),
                       GetSQLValueString($_POST['lugar'], "text"),
                       GetSQLValueString($_POST['calle'], "text"),
                       GetSQLValueString($_POST['fecha_nacimiento'], "text"),
                       GetSQLValueString($_POST['telefono'], "text"),
                       GetSQLValueString($_POST['correo'], "text"),
                       GetSQLValueString($_POST['matricula_alumno'], "int"));

  mysql_select_db($database_proyecto, $proyecto);
  $Result1 = mysql_query($updateSQL, $proyecto) or die(mysql_error());
}

$var_alumnos = "0";
if (isset($_POST['bus'])) {
  $var_alumnos = $_POST['bus'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_alumnos = sprintf("SELECT * FROM alumno WHERE matricula_alumno = %s", GetSQLValueString($var_alumnos, "int"));
$alumnos = mysql_query($query_alumnos, $proyecto) or die(mysql_error());
$row_alumnos = mysql_fetch_assoc($alumnos);
$totalRows_alumnos = mysql_num_rows($alumnos);
?>
<style type="text/css">
  input.let{
    text-transform: uppercase;
    width: 15em;
    height: 20px;
   border:3px solid #f0f0f0;
    color: silver;
   }
</style>

<script type="text/javascript" src="../jquery-2.0.3.js"></script>
<script type="text/javascript" src="js/incex.js"></script>

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
<br>
<form name="form1" method="POST" action="<?php echo $editFormAction; ?>">
  <table width="200" border="0" align="center">
    <tr>
      <td>MATRICULA</td>
      <td><label for="textfield11"></label>
        <input type="text" name="bus" id="textfield11" placeholder="MATRICULA"  class="let" required onkeypress="return soloNumeros(event);" ></td>
      <td><input type="submit" name="btn" id="button" value="buscar"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="610" border="0" align="center">
    <tr>
      <td><label for="textfield2"></label>
        <input type="text" name="matricula_alumno" value="<?php echo $row_alumnos['matricula_alumno']; ?>" placeholder="MATRICULA"  class="let" onkeypress="return soloNumeros(event);" /></td>
      <td><label for="textfield3"></label>
        <input type="text" name="nombre_alumno" value="<?php echo $row_alumnos['nombre_alumno']; ?>" placeholder="NOMBRE"  class="let" onkeypress="return sololetras(event);" /></td>
      <td width="147"><label for="textfield4"></label>
        <input name="apellido_paterno" type="text" value="<?php echo $row_alumnos['apellido_paterno']; ?>" placeholder="APELLIDO PATERNO"  class="let" onkeypress="return sololetras(event);" /></td>
      <td width="191"><label for="textfield5"></label>
        <input type="text" name="apellido_materno" value="<?php echo $row_alumnos['apellido_materno']; ?>" placeholder="APELLIDO MATERNO"  class="let" onkeypress="return sololetras(event);"  /></td>
    </tr>
    <tr>
      <td width="144" align="center">MATRICULA</td>
      <td width="100" align="center">NOMBRE(S)</td>
      <td>APELLIDO PATERNO</td>
      <td>APELLIDO MATERNO</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label for="select"></label>
        <label for="textfield10"></label>
        <input type="text" name="matricula_periodo" value="<?php echo $row_alumnos['matricula_periodo']; ?>" placeholder="PERIODO"  class="let" onkeypress="return sololetras(event);"  /></td>
      <td align="center"><label for="textfield11"></label>
        <input type="text" name="grado" value="<?php echo $row_alumnos['grado']; ?>" placeholder="GRADO"  class="let" onkeypress="return soloNumeros(event);"  />
        <label for="select2"></label></td>
      <td align="center"><label for="textfield12"></label>
        <input type="text" name="grupo" value="<?php echo $row_alumnos['grupo']; ?>"  placeholder="GRUPO"  class="let" onkeypress="return sololetras(event);"/>
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
        <input type="text" name="lugar" value="<?php echo $row_alumnos['lugar']; ?>" placeholder="LUGAR"  class="let"  onkeypress="return sololetras(event);"/></td>
      <td align="center"><label for="textfield7"></label>
        <input type="text" name="calle" value="<?php echo $row_alumnos['calle']; ?>" placeholder="calle/avenida"  class="let" /></td>
      <td align="center"><label for="textfield8"></label>
        <input type="text" name="fecha_nacimiento" value="<?php echo $row_alumnos['fecha_nacimiento']; ?>" placeholder="FECHA DE NACIMIENTO"  class="let" onkeypress="return soloNumeros(event);"  /></td>
    </tr>
    <tr>
      <td colspan="2" align="center">LUGAR DE NACIMIENTO</td>
      <td align="center">CALLE O AVENIDA</td>
      <td align="center">FECHA DE NACIMIENTO</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label for="textfield9"></label>
        <input type="text" name="telefono" value="<?php echo $row_alumnos['telefono']; ?>" placeholder="TELEFONO"  class="let" onkeypress="return soloNumeros(event);"  /></td>
      <td align="center"><label for="id_grupo"></label>
      <input name="id_grupo" type="hidden" id="id_grupo" value="<?php echo $row_alumnos['id_grupo']; ?>" ></td>
      <td align="center"><label for="textfield10"></label>
        <input type="text" name="correo" value="<?php echo $row_alumnos['correo']; ?>" placeholder="CORREO"  class="let" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center">TELEFONO</td>
      <td align="center">&nbsp;</td>
      <td align="center">CORREO ELECTRONICO</td>
    </tr>
    <tr>
      <td colspan="4" align="center"><input type="submit" name="actualiza" id="actualiza" value="ACTUALIZAR"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <input type="hidden" name="MM_update" value="form1">
</form>
<?php
mysql_free_result($alumnos);
?>
