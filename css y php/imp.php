<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prueba de impresión</title>
<style media="print" type="text/css">
#imprimir {
visibility:hidden
}
</style>
</head>
<body>
<p>Esto es una prueba de ocultamiento de botones</p>
<form id="form1" name="form1" method="post" action="">
<label>Imprimir
<input type="button" name="imprimir" id="imprimir" value="botón imprimir (no debe salir en la impresión)" onclick="window.print();" />
</label>
<br/>
<br/>
<label>Otro botón
<input type="button" name="otroboton" id="otroboton" value="Este botón si sale en la impresión" />
</label>
</form>
</body>
</html>
