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
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['clave'])) {
  $loginUsername=$_POST['clave'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "menu.php";
  $MM_redirectLoginFailed = "error.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_proyecto, $proyecto);
  
  $LoginRS__query=sprintf("SELECT clave, password FROM login WHERE clave=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "int")); 
   
  $LoginRS = mysql_query($LoginRS__query, $proyecto) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
<title>PROYECTO</title>

<meta charset="utf-8">
<meta name="description" content"BIENVENIDO AL SITIO">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!--agrega un icono al la pestaña del navegador-->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<!--[if it IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"</script>
	<![endif]-->
<script type="text/javascript"  src="../jquery-2.0.3.js"></script>
<script type="text/javascript"  src="../jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/incex.js"></script>
<script>

</script>
</head>

<!--inicio de los estilos-->

<style type="text/css">

body
{
	/*se le agrega imagen al body*/
	background:#212121 url(../img/fondo.jpg);
	color: #fff;
	font-family: helvetica,verdana;
	/*tamaño de la fuente*/
	font-size: 1em;

}



/*se le da color al nav*/
#na
{
	
	width: 960px;
   margin: auto;
  background:#f0f0f0 url(../img/x.jpg);
	height: 50px;
	border-radius: 20px 20px 20px 20px;
	box-shadow: 0px 0px 10px #000 inset;

 
}

#flotante
{
  margin-top: 20px;
  margin-left: 270px;
	background: #f0f0f0 url(../img/div.jpg);
	width: 800px;
	height: 700px;
  border-radius: 15px;
	border: 1px solid white ;

}
#formulario
{
	background: #f0f0f0;
	width: 350px;
	height: 350px;
	border: 1px solid white;
	margin: 100px auto;
	border-radius: 50px 50px 50px 50px;
}


/*color de los label*/
#flotante #formulario form table tr td 
{
	color: #666;
}

#clave
{
	margin: 20px;
width: 100px;
height: 30px;
padding-left: 10px;
outline-color: #6BBFF1;
-webkit-border-radius: 10px;
-webkit-box-shadow: inset 0px 0px 4px #b6b6b6;
-webkit-transition: width .5s;

}
#clave:focus
{
	width: 150px;
}

#pass
{
	margin: 20px;
width: 100px;
height: 30px;
padding-left: 10px;
outline-color: #6BBFF1;
-webkit-border-radius: 10px;
-webkit-box-shadow: inset 0px 0px 4px #b6b6b6;
-webkit-transition: width .5s;

}
#pass:focus
{
	width: 150px;
}

#bo
{
	margin: 20px;
width: 100px;
height: 30px;
-webkit-border-radius: 10px;
-webkit-box-shadow: inset 0px 0px 4px #b6b6b6;
-webkit-transition:all 3s ease;
}

#bo:hover
{
	background-color: #31ADA1;
	-webkit-transition:all 1s ease
}

/*estilos de la tabla*/
.tabla {
 width: 400px;
 border-top:1px ;
 border-left:1px ;
 background-color:;
 color: gray;
 text-align:center;
 font-family:arial,verdana,times;
 font-size:12px;
 margin: 0 auto 0 auto;
 }
.tabla p {
 clear:both;
 width: 100%;
 margin: 0;
}

.tabla .titulo {
 padding: 5px;
 /*cambia el color de la tabla de imagenes*/
 background-color: ;
 font-family:arial,verdana,times;
 float:left;width:100px;
 border-right: 1px solid #ccc;
 font-weight:bold;
 }

.tabla .columna {
 padding: 5px;
 float:left;width:100px;
 border-right: 1px solid #ccc;
 border-bottom: 1px solid #ccc;
 }

input{
   	text-transform: uppercase;
   }

</style>


<body>
<header>


</header>

<!--menu de la pagina-->
<nav id="na">

</nav>

<section >


<div id="flotante">

<!--parte de la tabla insertada-->

<div class="tabla">
<p>
<p>
<p>
<div class="titulo"><img src="../img/1.png" width="100" height="50" /></div>
<div class="titulo"><img src="../img/2.png" width="100" height="50" /></div> 
<div class="titulo"><img src="../img/3.png" width="200" height="50" /></div> </p>
<!--<p><div class="columna">datos1  </div><div class="columna">datos2</div><div class="columna">datos3</div></p>-->
<!--<p><div class="columna">datos1  </div><div class="columna">datos2</div><div class="columna">datos3</div></p>-->
<!--<p><div class="columna">datos1  </div><div class="columna">datos2</div><div class="columna">datos3</div></p>-->
</div>

<!--inicia el formulario dentro de una tabla-->

<div id="formulario">
  <form ACTION="<?php echo $loginFormAction; ?>" METHOD="POST" id="login"  onsubmit="return validar()">
  luis
  <table width="200" border="0" align="center">
    <tr>
      <td colspan="2" align="center"><p><img src="../img/escudo1.png.png" width="100" height="100" /></p>
        <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td align="center">CLAVE:</td>
      <td><label id="cla"></label>
        <input name="clave" type="text" x-webkit-speech autofocus="autofocus" id="clave" placeholder="CLAVE" autocomplete="off" required  onkeypress="return soloNumeros(event);" /></td>
    </tr>
    <tr>
      <td>CONTRASEÑA:</td>
      <td><label "CONTRASEÑA:"></label>
        <input type="password" name="password" id="pass" autoincrement="off" placeholder="CONTRASEÑA" required onkeypress="return sololetras(event);"/></td>
    </tr>
    <tr>
      <td colspan="2"> <center><input type="submit" name="button" id="bo" value="ACCESAR" /></center></td>
    </tr>
</table>
  <p>&nbsp;</p>



</form>

	</div>


</div>




</section>

<footer>


</footer>

</body>
</html>


