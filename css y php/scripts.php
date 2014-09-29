<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>
function revisar_alumno() {
if(form1.matricula_alumno.value.length ==0) { alert('Falta escribir la matricula del alumno') ; return false ; }
if(form1.nombre_alumno.value.length == 0) { alert('Falta escribir el nombre completo del alumno') ; return false ; }
if(form1.apellido_paterno.value.length == 0) { alert('Falta escribir el apellido paterno') ; return false ; }
if(form1.apellido_materno.value.length == 0) { alert('Falta escribir el apellido materno') ; return false ; }
if(form1.lugar.value.length == 0) { alert('Falta escribir el lugar') ; return false ; }
if(form1.calle.value.length == 0) { alert('Falta escribir la calle') ; return false ; }
if(form1.fecha_nacimiento.value.length == 0) { alert('Falta escribir la fecha de nacimiento') ; return false ; }
if(form1.telefono.value.length == 0) { alert('Falta escribir el numero de telefono') ; return false ; }
if(form1.correo.value.length == 0) { alert('Falta escribir el correo electronico') ; return false ; }
}
</script>
<script>
function revisar_clave() {
if(login.usuario.value.length ==0) { alert('Falta escribir el nombre de usuario') ; return false ; }
if(login.contrasena.value.length == 0) { alert('Falta escribir la clave') ; return false ; }

}
</script>
<script>
function eliminar(codigo){
            
            alert('Usted esta solicitando eliminar este Tecnico');
                if (confirm('¿Desea eliminar el tecnico seleccionado?'))
                    {
                        open("eliminar_tecnico_dato.php?codigo=" + codigo, "Eliminar", "width=1,height=1,scrollbars=no,toolbars=no,status=no,left=0,top=0");
                        
                    }
            }  
</script>
</head>

<body>

</body>
</html>
