<?php
$mat=$_GET['matricula'];
$nombre=$_GET['nombre'];

?>
<?php
header("Refresh: 4; URL=http://localhost/proyecto/css%20y%20php/registroAlumno.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 278px;
	top: 276px;
	width: 185px;
	height: 37px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 473px;
	top: 276px;
	width: 139px;
	height: 33px;
	z-index: 2;
}
#apDiv3 {
	position: absolute;
	left: 577px;
	top: 277px;
	width: 320px;
	height: 30px;
	z-index: 3;
}
</style>
</head>

<body>

<div id="apDiv1">LOS DATOS DEL TUTOR</div>
<div id="apDiv2"><?php echo $nombre; ?></div>
<div id="apDiv3">SE REGISTRARON CORRECTAMENTE</div>
<fieldset>
<legend>DATOS DEL PADRE O TUTOR</legend>
<form id="form2" name="form2" method="POST" action="<?php echo $editFormAction; ?>">
  <p>&nbsp;</p>
  <table width="752" border="1" align="center">
    <tr>
      <td width="201"><label for="textfield10"></label>
        <input type="text" value="<?php echo $mat; ?>" name="matricula_tutor" id="textfield10" /></td>
      <td width="173"><label for="textfield11"></label>
        <input type="text" name="nombre" id="textfield11" /></td>
      <td><label for="textfield12"></label>
        <input type="text" name="apellido_paterno" id="textfield12" /></td>
      <td><label for="textfield13"></label>
        <input type="text" name="apellido_materno" id="textfield13" /></td>
    </tr>
    <tr>
      <td>MATRICULA</td>
      <td>NOMBRE(S)</td>
      <td>APELLIDO PATERNO</td>
      <td>APELLIDO MATERNO</td>
    </tr>
    <tr>
      <td><label for="textfield14"></label>
        <input type="text" name="lugar" id="textfield14" /></td>
      <td><label for="textfield15"></label>
        <input type="text" name="calle" id="textfield15" /></td>
      <td width="164"><label for="textfield16"></label>
        <input type="text" name="telefono" id="textfield16" /></td>
      <td width="186"><label for="textfield17"></label>
        <input type="text" name="ocupacion" id="textfield17" /></td>
    </tr>
    <tr>
      <td>LUGAR DE NACIMIENTO</td>
      <td>CALLE O AVENIDA</td>
      <td width="164">TELEFONO</td>
      <td width="186">OCUPACION</td>
    </tr>
    <tr>
      
      <td><label for="textfield18"></label>
        <input type="text" value="<?php echo $nombre; ?>" name="nombre_alumno" id="textfield18" /></td>
      <td width="164"><label for="textfield19"></label></td>
      <td width="186"><label for="textfield20"></label></td>
    </tr>
    <tr>
      
      <td>NOMBRE DEL ALUMNO</td>
      <td width="164"><input type="submit" name="button2" id="button2" value="Enviar" /></td>
      <td width="186">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <input type="hidden" name="MM_insert" value="form2" />
</form>
</fieldset>




</body>
</html>