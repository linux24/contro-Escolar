
<?php

include("conexionconsulta.php");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style type="text/css">
  
input.bay{
    text-transform: uppercase;
    width: 15em;
    height: 20px;
   border:3px solid #f0f0f0;
    color: silver;
   }
input#but
{
  background: silver;
  
 
  cursor: pointer;

  color: black;
  -webkit-transition:2s ease;
}

input#but:hover
{

border-radius: 8px 8px;
background: #888888;

color: black;
-webkit-transition:2s ease;
box-shadow: 5px 5px 5px  #888888;


}

</style>
<script type="text/javascript" src="js/incex.js"></script>
</head>

<body>
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
<?php
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";
$var9="";
$var10="";
$var11="";
$var12="";
if(isset($_POST["btn"]))
{
$btn=$_POST["btn"];
$bus=$_POST["txtbus"];

if($btn=="BUSCAR")
{
 $sql="select alumno.matricula_alumno,alumno.nombre_alumno,alumno.apellido_paterno,alumno.apellido_materno,alumno.matricula_periodo,alumno.grado,alumno.grupo,alumno.lugar,alumno.calle,alumno.fecha_nacimiento,alumno.telefono,alumno.correo from alumno where alumno.matricula_alumno='$bus' ;";
  $cs=mysql_query($sql,$cn);
while($rec=mysql_fetch_array($cs))
{
$var1=$rec[0];
$var2=$rec[1];
$var3=$rec[2];
$var4=$rec[3];
$var5=$rec[4];
$var6=$rec[5];
$var7=$rec[6];
$var8=$rec[7];
$var9=$rec[8];
$var10=$rec[9];
$var11=$rec[10];
$var12=$rec[11];

}

}


}



?>

<p>&nbsp;</p>
<form name="form1" method="post" action="">
  <table width="200" border="0" align="center">
    <tr>
      <td>MATRICULA</td>
      <td><label for="textfield11"></label>
      <input type="text" name="txtbus" id="textfield11" placeholder="MATRICULA" autocomplete="off" class="bay" required onkeypress="return soloNumeros(event);"></td>
      <td><input type="submit" name="btn" id="but" value="BUSCAR"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="610" border="0" align="center">
    <tr>
      <td><label for="textfield2"></label>
        <input type="text" name="matricula_alumno" value="<?php echo $var1?>" placeholder="MATRICULA" autocomplete="off" class="bay" readonly/></td>
      <td><label for="textfield3"></label>
        <input type="text" name="nombre_alumno" value="<?php echo $var2?>"placeholder="NOMBRE" autocomplete="off" class="bay" readonly/></td>
      <td width="147"><label for="textfield4"></label>
        <input type="text" name="apellido_paterno" value="<?php echo $var3?>" placeholder="APELLIDO PATERNO" autocomplete="off" class="bay" readonly/></td>
      <td width="191"><label for="textfield5"></label>
        <input type="text" name="apellido_materno" value="<?php echo $var4?>" placeholder="APELLIDO MATERNO" autocomplete="off" class="bay" readonly/></td>
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
        <input type="text" name="textfield10" value="<?php echo $var5?>" placeholder="PERIODO/CICLO" autocomplete="off" class="bay" readonly/></td>
      <td align="center"><label for="textfield11"></label>
        <input type="text" name="textfield11" value="<?php echo $var6?>" placeholder="GRADO" autocomplete="off" class="bay" readonly />
        <label for="select2"></label></td>
      <td align="center"><label for="textfield12"></label>
        <input type="text" name="textfield12" value="<?php echo $var7?>" placeholder="GRUPO" autocomplete="off" class="bay" readonly />
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
        <input type="text" name="lugar" value="<?php echo $var8?>" placeholder="LUGAR" autocomplete="off" class="bay"  readonly="readonly"/></td>
      <td align="center"><label for="textfield7"></label>
        <input type="text" name="calle" value="<?php echo $var9?>" placeholder="CALLE/AVENIDA" autocomplete="off" class="bay"  readonly="readonly"/></td>
      <td align="center"><label for="textfield8"></label>
        <input type="text" name="fecha_nacimiento" value="<?php echo $var10?>" placeholder="FECHA DE NACIMIENTO" autocomplete="off" class="bay" readonly/></td>
    </tr>
    <tr>
      <td colspan="2" align="center">LUGAR DE NACIMIENTO</td>
      <td align="center">CALLE O AVENIDA</td>
      <td align="center">FECHA DE NACIMIENTO</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label for="textfield9"></label>
        <input type="text" name="telefono" value="<?php echo $var11?>" placeholder="TELEFONO" autocomplete="off" class="bay"  readonly="readonly"/></td>
      <td align="center">&nbsp;</td>
      <td align="center"><label for="textfield10"></label>
        <input type="text" name="correo" value="<?php echo $var12?>"  placeholder="E-MAIL" autocomplete="off" class="bay" readonly/></td>
    </tr>
    <tr>
      <td colspan="2" align="center">TELEFONO</td>
      <td align="center">&nbsp;</td>
      <td align="center">CORREO ELECTRONICO</td>
    </tr>
    <tr>
      <td colspan="4" align="center">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>

<p>&nbsp;</p>
</body>
</html>