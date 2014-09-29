<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	left: 536px;
	top: 311px;
	width: 164px;
	height: 64px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 481px;
	top: 274px;
	width: 318px;
	height: 33px;
	z-index: 2;


}
input.let{
    text-transform: uppercase;
    width: 15em;
    height: 20px;
   border:3px solid #f0f0f0;
    color: silver;
   }
</style>
<script type="text/javascript" src="js/incex.js"></script>
</head>

<body>
<div id="apDiv1">
  <table width="149" height="107">
    <form action='boletas_busqueda.php' method='post' name="form_tecnicos" id="form_tecnicos" onsubmit="return revisar_tecnicos()">
       <tr>
        <td width="67" class="color-4">Grado:</td>
        <td width="68"><input name="grado" type='text' value='' size="5" id="esp"  placeholder="GRADO" class="let"  autocomplete="off" required onkeypress="return soloNumeros(event);" /></td>
      </tr>
      <tr>
        <td class="color-4"><span class="Estilo14">Grupo:</span></td>
        <td><input name="grupo" type='text' value='' size="5" id="ingles"  placeholder="GRUPO" class="let"  autocomplete="off" required onkeypress="return sololetras(event);" /></td>
      </tr>
      <tr>
        <td height="26"></td>
        <td><input name="submit" type='submit' value='BUSCAR' /></td>
      </tr>
    </form>
  </table>
</div>
<div id="apDiv2">ESPECIFIQUE LOS SIGUIENTES DATOS</div>
<div id="menu">

<div id="logo">

</div>

<div id="separa" class="contenedor-general">

<div class="logo-interior">

</div>


<p class="texto"><a href="extras.php">INICIO</a></p>
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