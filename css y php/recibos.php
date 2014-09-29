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
if (isset($_POST['grado'])) {
  $var1_Recordset1 = $_POST['grado'];
}
$var2_Recordset1 = "0";
if (isset($_POST['grupo'])) {
  $var2_Recordset1 = $_POST['grupo'];
}
mysql_select_db($database_proyecto, $proyecto);
$query_Recordset1 = sprintf("SELECT * FROM alumno WHERE alumno.grado= %s and grupo= %s", GetSQLValueString($var1_Recordset1, "int"),GetSQLValueString($var2_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $proyecto) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
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
	left: 433px;
	top: 324px;
	width: 289px;
	height: 54px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 466px;
	top: 253px;
	width: 304px;
	height: 57px;
	z-index: 2;
	text-align: center;
}
#apDiv3 {
	position: absolute;
	left: 568px;
	top: 530px;
	width: 497px;
	height: 46px;
	z-index: 3;
}
#apDiv4 {
	position: absolute;
	left: 184px;
	top: 699px;
	width: 876px;
	height: 476px;
	z-index: 4;
}
#apDiv5 {
	position: absolute;
	left: 196px;
	top: 490px;
	width: 994px;
	height: 4px;
	z-index: 5;
	background-color: #D6D6D6;
}
#apDiv6 {
	position: absolute;
	left: 584px;
	top: 504px;
	width: 199px;
	height: 12px;
	z-index: 6;
}
input.let{
    text-transform: uppercase;
    width: 15em;
    height: 20px;
   border:3px solid #f0f0f0;
    color: silver;
   }

#apDiv4 table {
	color: #666;
}
</style>
<script type="text/javascript" src="js/incex.js"></script>
</head>

<body>
<div id="apDiv1">
 <table width="391" height="84">
      <form action='recibo_imprimir.php' method='post' name="form_tecnicos" id="form_tecnicos" onsubmit="return revisar_tecnicos()">
        <tr>
          <td height="24" class="color-4"><span class="Estilo14">Matricula:</span></td>
          <td><input name="matricula" type='text' value='' id="cuota"  class="let" placeholder="MATRICULA" onkeypress="return soloNumeros(event);"/>          </td>
        </tr>
        <tr>
          <td width="122" height="24" class="color-4">Concepto de pago:</td>
          <td width="257"><label for="concepto"></label>
            <select name="concepto" id="concepto">
              <option value="Pago de incripcion del primer año">Pago de incripcion del primer año</option>
              <option value="Pago de incripcion del segundo año">Pago de incripcion del segundo año</option>
              <option value="Pago de incripcion del tercer año">Pago de incripcion del tercer año</option>
          </select></td>
        </tr>

        <tr>
          <td height="24" class="color-4"><span class="Estilo14">Cuota:</span></td>
          <td><input name="cuota" type='text' value='' id="cuota"  class="let" placeholder="CUOTA" onkeypress="return soloNumeros(event);" />          </td>
        </tr>
        
        <tr>
          <td height="26"></td>
          <td><input name="submit" type='submit' value='Generar' />          </td>
        </tr>
      </form>
    </table>
</div>
<div id="apDiv2">LLENE LOS SIGUIENTES CAMPOS PARA GENERAR SU RECIBO</div>
<div id="apDiv3">
  <form id="form1" name="form1" method="post" action="">
    <p>GRADO: 
      <label for="grado"></label>
    <input type="text" name="grado" id="grado" class="let" placeholder="GRADO" onkeypress="return soloNumeros(event);" autocomplete="off"/>
    </p>
    <p>GRUPO:
      <label for="grupo"></label>
      <input type="text" name="grupo" id="grupo"  class="let" placeholder="GRUPO" onkeypress="return sololetras(event);" autocomplete="off"/>
    </p>
    <p>
      <input type="submit" name="enviar" id="enviar" value="Enviar"  />
    </p>
  </form>
</div>
<div id="apDiv4">
  <table width="1253" height="52" border="1">
    <tr>
      <td width="194" align="center" bgcolor="#EFEFEF"><strong>MATRICULA</strong></td>
      <td width="186" align="center" bgcolor="#EFEFEF"><strong>NOMBRE</strong></td>
      <td width="190" align="center" bgcolor="#EFEFEF"><strong>APELLIDO PATERNO</strong></td>
      <td width="193" align="center" bgcolor="#EFEFEF"><strong>APELLIDO MATERNO</strong></td>
      <td width="198" align="center" bgcolor="#EFEFEF"><strong>PERIODO</strong></td>
      <td width="124" align="center" bgcolor="#EFEFEF"><strong>GRADO</strong></td>
      <td width="120" align="center" bgcolor="#EFEFEF"><strong>GRUPO</strong></td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_Recordset1['matricula_alumno']; ?></td>
        <td align="center"><?php echo $row_Recordset1['nombre_alumno']; ?></td>
        <td align="center"><?php echo $row_Recordset1['apellido_paterno']; ?></td>
        <td align="center"><?php echo $row_Recordset1['apellido_materno']; ?></td>
        <td align="center"><?php echo $row_Recordset1['matricula_periodo']; ?></td>
        <td align="center"><?php echo $row_Recordset1['grado']; ?></td>
        <td align="center"><?php echo $row_Recordset1['grupo']; ?></td>
      </tr>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  </table>
</div>
<div id="apDiv5"></div>
<div id="apDiv6">CONSULTA DE DATOS</div>
<div id="menu">

<div id="logo">

</div>

<div id="separa" class="contenedor-general">

<div class="logo-interior">

</div>


<p class="texto"><a href="extras.php">INICIO</a></p>
</div>
<!--otro boton-->


<div id="separa" class="contenedor-general">

<div class="logo-interior">

</div>


<p class="texto"><a href="recibos_buscar.php">BUSCAR </a></p>
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
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
