
<!DOCTYPE html">
<html lang="es">

<head>
<meta charset="utf-8" />
<title>menu</title>
<script type="text/javascript" charset="utf-8" src="slider_edgePreload.js"></script>
</head>

<!--inicia el style del menu o pagina principal-->
<style type="text/css">

.edgeLoad-EDGE-54176936 { visibility:hidden; }
body
{
	background-image: url(../img/fon-menu.jpg);

}

div.cabezal
{
background: #f0f0f0;
width: 900px;
height: 130px;
margin: auto;
border-radius: 10px 10px 10px 10px;
box-shadow: 0px 0px 5px #2f3030 inset;

}


div#contenedor
{

	background-color: #2f3030;
	margin: auto;
	width: 800px;
	height: 500px;
	margin-top: 30px;
	border-radius: 10px 10px 10px 10px;
}

div#slider
{
	background: #f0f0f0;
	position: absolute;
	width: 700px;
	height: 435px;
	margin-left: 50px;
	margin-top: 30px;
	border-radius: 9px 9px 9px 9px;
}
/*INICIA LA PARTE DEL MENU*/
*
{
	margin: 0px;
	padding: 0px;
	font-family: verdana;
	color: #bcbcbc;
}

div#menu
{
position: absolute;
width: 61px;/*170*/
height: 100%;
background-color: #2f3030;
overflow: hidden;
-webkit-transition:width 0.5s;
}

div#menu:hover
{
	width: 170px;
}

div.logo
{
	width: 40px;
	height: 40px;
	margin: 10px;
	background-image: url(../img/logomenu.png);
	cursor: no-drop;
}

div#logo-separa
{
margin-top: 50px;
}

div.bot1
{

width: 150px;
height: 40px;
margin-left: 10px;

}

div#bot1-separa
{
margin-top: 30px;
}

div.logo1-interior
{
	
	width: 40px;
	height: 40px;
	background-image: url(../img/logomenu.png);
	float: left;
	cursor: no-drop;
}
p.textbot1
{
	margin-left: 60px;
	line-height: 40px;
}
/*EFECTO A LOS ATRIBUTOS P*/ 
p.textbot1:hover
{
	cursor: pointer;
	
}

p.textbot2:hover
{
	cursor: pointer;
}

p#textbot3:hover
{
	cursor: pointer;
}
/*TERMINA LOS EFECTOS DEL ATRIBUTO P*/

div.bot2
{
     
	width: 150px;
	height: 40px;
	margin-left: 10px;
}

div.logo2-interior
{
	width: 40px;
	height: 40px;
	background-image: url(../img/logomenu.png);
	float:left;/*las letras k van delante del logo del cuadro la inicio inician abajo este las pone arriba al lado derecho*/
	cursor: no-drop;
}
p.textbot2
{
	margin-left: 50px;/*acomoda las letras hacia la derecha*/
	line-height: 40px;/*alineamiento de las letras o las acomoda*/
}





div#bot2-separa /*separa los botones*/
{
	margin-top:35px;
}

div.bot3
{  
	width: 150px;/*medidas donde ira el logo*/
	height: 40px;
    margin-left: 13px;/*alineamiento en "X" para el logo de cuadros*/
}

div.logo3-interior
{

	width: 40px;
	height: 40px;
	background-image: url(../img/logomenu.png);/*importa la imagen y la ubica en las dimenciones k se asigno al bot3*/
	float: left;
	cursor: no-drop;
}

div#bot3-separa
{
	margin-top: 35px;
}

#textbot3
{
margin-left: 50px;
line-height: 40px;
}

div table#centrar-tabla
{
	text-align: center;
	margin-top: 10px;
}
div table#centrar-tabla
{
margin:auto;
text-align: left;
}

div table#centrar-tabla
{
	position: absolute;
	left: 584px;
	top: 102px;
	width: 300px;
	height: 100px;
	margin-top: -120px;
	margin-left: -300px;
	overflow: auto;
	
}
</style>



<body>



<div id="menu">

<div id="logo-separa" class="logo">

</div>

<div id="bot1-separa" class="bot1">

	<div class="logo1-interior">

	</div>

<p class="textbot1"> <a href="frame-alumno.html"> ALUMNOS</p><a/>

</div>

<div id="bot2-separa" class="bot2">

<div class="logo2-interior">

</div >
<p class="textbot2"><a href="profesor.php">PROFESORES</p></a>

</div>

<div id="bot3-separa" class="bot3">

<div class="logo3-interior">

</div>
<p id="textbot3"><a href="http://localhost/proyecto/css%20y%20php/consultar_tutor.php"> TUTORES</p></a>
</div>


<div id="bot3-separa" class="bot3">

<div class="logo3-interior">

</div>
<p id="textbot3"><a href="extras.php">EXTRAS</a></p>
</div>



<div id="bot3-separa" class="bot3">

<div class="logo3-interior">

</div>
<p id="textbot3"><a href="primero.php?grupo=1">PRIMERO</a></p>
</div>



<div id="bot3-separa" class="bot3">

<div class="logo3-interior">

</div>
<p id="textbot3"><a href="segundo.php">SEGUNDO</a></p>
</div>


<div id="bot3-separa" class="bot3">

<div class="logo3-interior">

</div>
<p id="textbot3"><a href="tercero.php">TERCERO</a></p>
</div>

</div>






<div  class="cabezal">

<table id="centrar-tabla" cellspacing="20" cellpadding="0" border="0"> 

             <tr>
             <td ><img src="../img/1.png" width="177" height="65" /></td>

             <td><img src="../img/sev.png" width="221" height="113" /></td> 
             <td><img src="../img/3.png" width="300" height="50" /></td> 
       </tr>
        
        
  </table>
</div>

<!--INICIA EL CONTENEDOR-->
<div id="contenedor">



<!--INICIA EL SLIDER-->
<div id="slider">
 
<div id="Stage" class="EDGE-54176936">


</div>

</div>
</body>
</html>