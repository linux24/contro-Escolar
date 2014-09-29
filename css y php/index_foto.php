<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>FORMULARIO</title>
</head>

<body onload="document.form.reset();">
<form action="procesar_foto.php" method="post" enctype="multipart/form-data">

<h3>INGRESAR DATOS</h3>

<h1>NOMBRE:</h1>
<input type="text" name="nombre">
<br>
<h1>ARCHIVO:</h1><input type="file" name="foto">

<br>
<br>
<input type="submit" value="SUBIR">

</form>

</body>
</html>