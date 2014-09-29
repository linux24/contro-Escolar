<?php 
 $idc = mysql_connect('localhost', 'root', '123'); 
 $matricula_alumno=$_GET['matricula_alumno'];
  $grupo=$_GET['grupo'];

$sql = ("SELECT * FROM proyecto.alumno WHERE matricula_alumno='".$matricula_alumno."'");
$resultado = mysql_query($sql,$idc) or die(mysql_error());
$filas = mysql_fetch_assoc($resultado);
$bimestre=1;

$grado=$filas['grado'];
$grupo=$filas['grupo'];

$sql_profe = "SELECT * FROM proyecto.profesor WHERE grado = ".$grado." and grupo = '".$grupo."'";
$resultado_profe = mysql_query($sql_profe,$idc) or die(mysql_error());
$filas_profe = mysql_fetch_assoc($resultado_profe);

$name=$filas_profe['nombre_profesor'];
$ap=$filas_profe['apellido_paterno'];
$am=$filas_profe['apellido_materno'];

$sql1 = "SELECT * FROM proyecto.year1_bim2 WHERE matricula_alumno = ".$matricula_alumno." and bimestre = ".$bimestre."";
$resultado1 = mysql_query($sql1,$idc) or die(mysql_error());
$filas1 = mysql_fetch_assoc($resultado1);
$a=$filas1['esp2'];
$b=$filas1['matematicas2'];
$c=$filas1['fisica'];
$d=$filas1['historia'];
$e=$filas1['educacion_fisica1'];
$f=$filas1['tecnologia2'];
$g=$filas1['artes2'];
$h=$filas1['ingles2'];

/////////////////////////////////////////////SEGUNDO BIMESTRE/////////////////////////////////////////////////////////////////

$bimestre2=2;

$sql2 = "SELECT * FROM proyecto.year1_bim2 WHERE matricula_alumno = ".$matricula_alumno." and bimestre = ".$bimestre2."";
$resultado2 = mysql_query($sql2,$idc) or die(mysql_error());
$filas2 = mysql_fetch_assoc($resultado2);
$a2=$filas2['esp2'];
$b2=$filas2['matematicas2'];
$c2=$filas2['fisica'];
$d2=$filas2['historia'];
$e2=$filas2['educacion_fisica1'];
$f2=$filas2['tecnologia2'];
$g2=$filas2['artes2'];
$h2=$filas2['ingles2'];

//////////////////////////////////////////TERCER BIMESTRE/////////////////////////////////////////////////////////////////


$bimestre3=3;

$sql3 = "SELECT * FROM proyecto.year1_bim2 WHERE matricula_alumno = ".$matricula_alumno." and bimestre = ".$bimestre3."";
$resultado3 = mysql_query($sql3,$idc) or die(mysql_error());
$filas3 = mysql_fetch_assoc($resultado3);
$a3=$filas3['esp2'];
$b3=$filas3['matematicas2'];
$c3=$filas3['fisica'];
$d3=$filas3['historia'];
$e3=$filas3['educacion_fisica1'];
$f3=$filas3['tecnologia2'];
$g3=$filas3['artes2'];
$h3=$filas3['ingles2'];

////////////////////////////////////////////CUARTO SEMESTRE////////////////////////////////////////////////////////

$bimestre4=4;

$sql4 = "SELECT * FROM proyecto.year1_bim2 WHERE matricula_alumno = ".$matricula_alumno." and bimestre = ".$bimestre4."";
$resultado4 = mysql_query($sql4,$idc) or die(mysql_error());
$filas4 = mysql_fetch_assoc($resultado4);
$a4=$filas4['esp2'];
$b4=$filas4['matematicas2'];
$c4=$filas4['fisica'];
$d4=$filas4['historia'];
$e4=$filas4['educacion_fisica1'];
$f4=$filas4['tecnologia2'];
$g4=$filas4['artes2'];
$h4=$filas4['ingles2'];

/////////////////////////////////////////////QUINTO SEMESTRE///////////////////////////////////////////////////////////

$bimestre5=5;

$sql5 = "SELECT * FROM proyecto.year1_bim2 WHERE matricula_alumno = ".$matricula_alumno." and bimestre = ".$bimestre5."";
$resultado5 = mysql_query($sql5,$idc) or die(mysql_error());
$filas5 = mysql_fetch_assoc($resultado5);
$a5=$filas5['esp2'];
$b5=$filas5['matematicas2'];
$c5=$filas5['fisica'];
$d5=$filas5['historia'];
$e5=$filas5['educacion_fisica1'];
$f5=$filas5['tecnologia2'];
$g5=$filas5['artes2'];
$h5=$filas5['ingles2'];

$promedio=$a+$a2+$a3+$a4+$a5;
$promedio=round($promedio/5);

$promedio2=$b+$b2+$b3+$b4+$b5;
$promedio2=round($promedio2/5);

$promedio3=$c+$c2+$c3+$c4+$c5;
$promedio3=round($promedio3/5);

$promedio4=$d+$d2+$d3+$d4+$d5;
$promedio4=round($promedio4/5);

$promedio5=$e+$e2+$e3+$e4+$e5;
$promedio5=round($promedio5/5);

$promedio6=$f+$f2+$f3+$f4+$f5;
$promedio6=round($promedio6/5);

$promedio7=$g+$g2+$g3+$g4+$g5;
$promedio7=round($promedio7/5);

$promedio8=$h+$h2+$h3+$h4+$h5;
$promedio8=round($promedio8/5);

$promedio_final=$promedio+$promedio2+$promedio3+$promedio4+$promedio5+$promedio6+$promedio7+$promedio8;
$promedio_final=($promedio_final/8);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style media="print" type="text/css">
#imprimir {
visibility:hidden
}
</style>

<style type="text/css">

<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 148px;
	top: 16px;
	width: 429px;
	height: 67px;
	z-index: 1;
	text-align: center;
	font-size: 24px;
}
#apDiv2 {
	position: absolute;
	left: 14px;
	top: -4px;
	width: 215px;
	height: 110px;
	z-index: 2;
}
#apDiv3 {
	position: absolute;
	left: 570px;
	top: 12px;
	width: 182px;
	height: 100px;
	z-index: 3;
}
#apDiv4 {
	position: absolute;
	left: 239px;
	top: 77px;
	width: 338px;
	height: 23px;
	z-index: 4;
	font-size: 12px;
}
#apDiv5 {
	position: absolute;
	left: 19px;
	top: 127px;
	width: 679px;
	height: 28px;
	z-index: 5;
	color: #FFF;
	font-weight: bold;
	background-color: #333333;
	font-size: 12px;
}
#apDiv6 {
	position: absolute;
	left: 22px;
	top: 179px;
	width: 691px;
	height: 20px;
	z-index: 6;
}
#apDiv7 {
	position: absolute;
	left: 55px;
	top: 197px;
	width: 107px;
	height: 15px;
	z-index: 7;
	font-size: 10px;
}
#apDiv8 {
	position: absolute;
	left: 317px;
	top: 197px;
	width: 149px;
	height: 17px;
	z-index: 8;
	font-size: 10px;
}
#apDiv9 {
	position: absolute;
	left: 570px;
	top: 198px;
	width: 59px;
	height: 22px;
	z-index: 9;
	font-size: 10px;
}
#apDiv10 {
	position: absolute;
	left: 22px;
	top: 234px;
	width: 680px;
	height: 30px;
	z-index: 10;
	font-size: 12px;
	font-weight: bold;
	background-color: #333333;
	color: #FFF;
}
#apDiv11 {
	position: absolute;
	left: 24px;
	top: 287px;
	width: 389px;
	height: 26px;
	z-index: 11;
}
#apDiv12 {
	position: absolute;
	left: 119px;
	top: 305px;
	width: 132px;
	height: 15px;
	z-index: 12;
	font-size: 10px;
}
#apDiv13 {
	position: absolute;
	left: 424px;
	top: 287px;
	width: 243px;
	height: 27px;
	z-index: 13;
}
#apDiv14 {
	position: absolute;
	left: 425px;
	top: 288px;
	width: 145px;
	height: 26px;
	z-index: 13;
}
#apDiv15 {
	position: absolute;
	left: 580px;
	top: 287px;
	width: 136px;
	height: 27px;
	z-index: 14;
}
#apDiv16 {
	position: absolute;
	left: 476px;
	top: 307px;
	width: 103px;
	height: 19px;
	z-index: 15;
	font-size: 10px;
}
#apDiv17 {
	position: absolute;
	left: 568px;
	top: 305px;
	width: 130px;
	height: 18px;
	z-index: 16;
	text-align: center;
	font-size: 10px;
}
#apDiv18 {
	position: absolute;
	left: 25px;
	top: 338px;
	width: 680px;
	height: 28px;
	z-index: 17;
}
#apDiv19 {
	position: absolute;
	left: 25px;
	top: 395px;
	width: 684px;
	height: 388px;
	z-index: 18;
	font-size: 12px;
}
#apDiv19 table tr td {
	font-size: 12px;
	font-weight: bold;
	color: #000;
	text-align: center;
}
#apDiv20 {
	position: absolute;
	left: 78px;
	top: 416px;
	width: 103px;
	height: 35px;
	z-index: 19;
	font-size: 14px;
	font-weight: bold;
	color: #FFF;
}
#apDiv21 {
	position: absolute;
	left: 576px;
	top: 414px;
	width: 88px;
	height: 33px;
	z-index: 20;
	text-align: center;
	font-size: 12px;
	font-weight: bold;
	color: #FFF;
}
#apDiv22 {
	position: absolute;
	left: 23px;
	top: 832px;
	width: 679px;
	height: 30px;
	z-index: 21;
	color: #FFF;
	background-color: #333333;
	font-size: 12px;
	font-weight: bold;
}
#apDiv23 {
	position: absolute;
	left: 888px;
	top: 821px;
	width: 10px;
	height: 596px;
	z-index: 22;
}
#apDiv24 {
	position: absolute;
	left: 22px;
	top: 857px;
	width: 690px;
	height: 89px;
	z-index: 23;
}
#apDiv24 table {
	font-size: 12px;
}
#apDiv25 {
	position: absolute;
	left: 25px;
	top: 931px;
	width: 674px;
	height: 86px;
	z-index: 24;
}
#apDiv26 {
	position: absolute;
	left: 36px;
	top: 941px;
	width: 431px;
	height: 26px;
	z-index: 25;
}
#apDiv27 {
	position: absolute;
	left: 93px;
	top: 946px;
	width: 296px;
	height: 8px;
	z-index: 26;
	font-size: 12px;
}
#apDiv28 {
	position: absolute;
	left: 267px;
	top: 483px;
	width: 32px;
	height: 22px;
	z-index: 27;
}
#apDiv29 {
	position: absolute;
	left: 267px;
	top: 522px;
	width: 33px;
	height: 20px;
	z-index: 28;
}
#apDiv30 {
	position: absolute;
	left: 266px;
	top: 560px;
	width: 35px;
	height: 20px;
	z-index: 29;
}
#apDiv31 {
	position: absolute;
	left: 267px;
	top: 599px;
	width: 24px;
	height: 18px;
	z-index: 30;
}
#apDiv32 {
	position: absolute;
	left: 268px;
	top: 636px;
	width: 21px;
	height: 17px;
	z-index: 31;
}
#apDiv33 {
	position: absolute;
	left: 596px;
	top: 481px;
	width: 37px;
	height: 25px;
	z-index: 32;
}
#apDiv34 {
	position: absolute;
	left: 268px;
	top: 674px;
	width: 20px;
	height: 17px;
	z-index: 33;
}
#apDiv35 {
	position: absolute;
	left: 265px;
	top: 711px;
	width: 23px;
	height: 19px;
	z-index: 34;
}
#apDiv36 {
	position: absolute;
	left: 265px;
	top: 751px;
	width: 22px;
	height: 19px;
	z-index: 35;
}
#apDiv37 {
	position: absolute;
	left: 326px;
	top: 484px;
	width: 26px;
	height: 19px;
	z-index: 36;
}
#apDiv38 {
	position: absolute;
	left: 327px;
	top: 524px;
	width: 23px;
	height: 19px;
	z-index: 37;
}
#apDiv39 {
	position: absolute;
	left: 328px;
	top: 561px;
	width: 21px;
	height: 17px;
	z-index: 38;
}
#apDiv40 {
	position: absolute;
	left: 327px;
	top: 602px;
	width: 20px;
	height: 17px;
	z-index: 39;
}
#apDiv41 {
	position: absolute;
	left: 327px;
	top: 639px;
	width: 20px;
	height: 18px;
	z-index: 40;
}
#apDiv42 {
	position: absolute;
	left: 326px;
	top: 675px;
	width: 21px;
	height: 18px;
	z-index: 41;
}
#apDiv43 {
	position: absolute;
	left: 327px;
	top: 712px;
	width: 19px;
	height: 18px;
	z-index: 42;
}
#apDiv44 {
	position: absolute;
	left: 327px;
	top: 753px;
	width: 16px;
	height: 15px;
	z-index: 43;
}
#apDiv45 {
	position: absolute;
	left: 386px;
	top: 486px;
	width: 23px;
	height: 17px;
	z-index: 44;
}
#apDiv46 {
	position: absolute;
	left: 385px;
	top: 525px;
	width: 24px;
	height: 18px;
	z-index: 45;
}
#apDiv47 {
	position: absolute;
	left: 385px;
	top: 562px;
	width: 24px;
	height: 17px;
	z-index: 46;
}
#apDiv48 {
	position: absolute;
	left: 384px;
	top: 599px;
	width: 25px;
	height: 20px;
	z-index: 47;
}
#apDiv49 {
	position: absolute;
	left: 385px;
	top: 640px;
	width: 18px;
	height: 14px;
	z-index: 48;
}
#apDiv50 {
	position: absolute;
	left: 383px;
	top: 675px;
	width: 16px;
	height: 16px;
	z-index: 49;
}
#apDiv51 {
	position: absolute;
	left: 382px;
	top: 714px;
	width: 16px;
	height: 15px;
	z-index: 50;
}
#apDiv52 {
	position: absolute;
	left: 382px;
	top: 754px;
	width: 18px;
	height: 18px;
	z-index: 51;
}
#apDiv53 {
	position: absolute;
	left: 448px;
	top: 486px;
	width: 20px;
	height: 15px;
	z-index: 52;
}
#apDiv54 {
	position: absolute;
	left: 449px;
	top: 525px;
	width: 21px;
	height: 17px;
	z-index: 53;
}
#apDiv55 {
	position: absolute;
	left: 449px;
	top: 563px;
	width: 18px;
	height: 16px;
	z-index: 54;
}
#apDiv56 {
	position: absolute;
	left: 450px;
	top: 601px;
	width: 21px;
	height: 18px;
	z-index: 55;
}
#apDiv57 {
	position: absolute;
	left: 450px;
	top: 639px;
	width: 22px;
	height: 18px;
	z-index: 56;
}
#apDiv58 {
	position: absolute;
	left: 448px;
	top: 676px;
	width: 21px;
	height: 18px;
	z-index: 57;
}
#apDiv59 {
	position: absolute;
	left: 445px;
	top: 714px;
	width: 18px;
	height: 16px;
	z-index: 58;
}
#apDiv60 {
	position: absolute;
	left: 445px;
	top: 754px;
	width: 19px;
	height: 18px;
	z-index: 59;
}
#apDiv61 {
	position: absolute;
	left: 509px;
	top: 485px;
	width: 18px;
	height: 18px;
	z-index: 60;
}
#apDiv62 {
	position: absolute;
	left: 508px;
	top: 524px;
	width: 20px;
	height: 18px;
	z-index: 61;
}
#apDiv63 {
	position: absolute;
	left: 508px;
	top: 562px;
	width: 19px;
	height: 18px;
	z-index: 62;
}
#apDiv64 {
	position: absolute;
	left: 509px;
	top: 601px;
	width: 19px;
	height: 17px;
	z-index: 63;
}
#apDiv65 {
	position: absolute;
	left: 508px;
	top: 639px;
	width: 18px;
	height: 16px;
	z-index: 64;
}
#apDiv66 {
	position: absolute;
	left: 507px;
	top: 675px;
	width: 21px;
	height: 18px;
	z-index: 65;
}
#apDiv67 {
	position: absolute;
	left: 507px;
	top: 713px;
	width: 21px;
	height: 19px;
	z-index: 66;
}
#apDiv68 {
	position: absolute;
	left: 506px;
	top: 753px;
	width: 20px;
	height: 17px;
	z-index: 67;
}
#apDiv69 {
	position: absolute;
	left: 596px;
	top: 519px;
	width: 30px;
	height: 23px;
	z-index: 68;
}
#apDiv70 {
	position: absolute;
	left: 597px;
	top: 560px;
	width: 20px;
	height: 18px;
	z-index: 69;
}
#apDiv71 {
	position: absolute;
	left: 598px;
	top: 601px;
	width: 21px;
	height: 18px;
	z-index: 70;
}
#apDiv72 {
	position: absolute;
	left: 600px;
	top: 639px;
	width: 20px;
	height: 18px;
	z-index: 71;
}
#apDiv73 {
	position: absolute;
	left: 599px;
	top: 676px;
	width: 23px;
	height: 17px;
	z-index: 72;
}
#apDiv74 {
	position: absolute;
	left: 599px;
	top: 713px;
	width: 23px;
	height: 18px;
	z-index: 73;
}
#apDiv75 {
	position: absolute;
	left: 598px;
	top: 753px;
	width: 17px;
	height: 20px;
	z-index: 74;
}
#apDiv76 {
	position: absolute;
	left: 70px;
	top: 176px;
	width: 183px;
	height: 14px;
	z-index: 75;
}
#apDiv77 {
	position: absolute;
	left: 332px;
	top: 176px;
	width: 172px;
	height: 14px;
	z-index: 76;
}
#apDiv78 {
	position: absolute;
	left: 561px;
	top: 175px;
	width: 137px;
	height: 15px;
	z-index: 77;
}
#apDiv79 {
	position: absolute;
	left: 486px;
	top: 289px;
	width: 65px;
	height: 16px;
	z-index: 78;
}
#apDiv80 {
	position: absolute;
	left: 579px;
	top: 292px;
	width: 116px;
	height: 10px;
	z-index: 79;
	font-size: 14px;
	text-align: center;
}
#apDiv81 {
	position: absolute;
	left: 34px;
	top: 289px;
	width: 368px;
	height: 10px;
	z-index: 80;
	font-size: 14px;
	text-align: center;
}
#apDiv82 {
	position: absolute;
	left: 406px;
	top: 801px;
	width: 138px;
	height: 20px;
	z-index: 81;
	font-size: 14px;
	font-weight: bold;
}
#apDiv83 {
	position: absolute;
	left: 593px;
	top: 798px;
	width: 85px;
	height: 22px;
	z-index: 82;
}
#apDiv84 {
	position: absolute;
	left: 424px;
	top: 943px;
	width: 268px;
	height: 21px;
	z-index: 83;
}
#apDiv85 {
	position: absolute;
	left: 416px;
	top: 948px;
	width: 309px;
	height: 20px;
	z-index: 84;
}
#apDiv86 {
	position: absolute;
	left: 462px;
	top: 943px;
	width: 245px;
	height: 21px;
	z-index: 85;
}
#apDiv87 {
	position: absolute;
	left: 330px;
	top: 1023px;
	width: 202px;
	height: 134px;
	z-index: 86;
}
#apDiv88 {
	position: absolute;
	left: 723px;
	top: 527px;
	width: 137px;
	height: 82px;
	z-index: 87;
}
</style>
</head>

<body>
<div id="apDiv88"><a href="boletas.php"><img id="imprimir" src="../img/regresar.png" width="128" height="97" /></a></div>
<div id="apDiv1">SISTEMA EDUCATIVO NACIONAL<br />
REPORTE DE EVALUACIÓN</div>
<div id="apDiv2"><img src="../img/de.jpg" width="150" height="76" /></div>
<div id="apDiv3"><img src="../img/er.PNG" width="130" height="65" /></div>
<div id="apDiv4">2do GRADO DE EDUCACIÓN SECUNDARIA</div>
<div id="apDiv5">DATOS DEL(DE LA) ALUMNO(A)</div>
<div id="apDiv6">__________________________________________________________________________________</div>
<div id="apDiv7">PRIMER APELLIDO</div>
<div id="apDiv8">SEGUNDO APELLIDO</div>
<div id="apDiv9">NOMBRE</div>
<div id="apDiv10">DATOS DE LA ESCUELA</div>
<div id="apDiv11">________________________________________________</div>
<div id="apDiv12">NOMBRE DE LA ESCUELA</div>
<div id="apDiv14">_________________</div>
<div id="apDiv15">______________</div>
<div id="apDiv16">GRUPO</div>
<div id="apDiv17">TURNO</div>
<div id="apDiv18">El(la) maestro(a) registrará las calificaciones y los promedios que se generen de las evaluaciones por asignatura, grado escolar o nivel educativo y se expresarán con número truncado a décimos.</div>
<div id="apDiv19">
  <table width="676" height="390" border="1">
    <tr>
      <td width="212" rowspan="2" bgcolor="#333333">&nbsp;</td>
      <td colspan="5" bgcolor="#999999">BIMESTRE</td>
      <td width="144" rowspan="2" bgcolor="#333333">&nbsp;</td>
    </tr>
    <tr>
      <td width="56" bgcolor="#CCCCCC">I</td>
      <td width="51" bgcolor="#CCCCCC">II</td>
      <td width="55" bgcolor="#CCCCCC">III</td>
      <td width="55" bgcolor="#CCCCCC">IV</td>
      <td width="57" bgcolor="#CCCCCC">V</td>
    </tr>
    <tr>
      <td>ESPAÑOL II</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>INGLES II</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>MATEMATICAS II</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>FISICA</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>HISTORIA</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>EDUCACION FISISCA I</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>TECNOLOGIA II</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>ARTES II</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
<div id="apDiv20">ASIGNATURA</div>
<div id="apDiv21">PROMEDIO FINAL</div>
<div id="apDiv22">FIRMA DE LA MADRE, PADRE DE FAMILIA O TUTOR(A)</div>
<div id="apDiv24">
  <table width="676" height="68" border="1">
    <tr>
      <td>BIMESTRE I</td>
      <td>BIMESTRE II</td>
      <td>BIMESTRE III</td>
      <td>BIMESTRE IV</td>
      <td>BIMESTRE V</td>
    </tr>
  </table>
</div>
<div id="apDiv25">
  <table width="672" height="62" border="1">
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
<div id="apDiv26">_________________________________________</div>
<div id="apDiv27">
  <h4>NOMBRE Y FIRMA DEL (DE LA) DIRECTOR(A)</h4>
</div>
<div id="apDiv28"><?php echo $filas1['esp2'];?>
</div>
<div id="apDiv29"><?php echo $filas1['ingles2'];?></div>
<div id="apDiv30"><?php echo $filas1['matematicas2'];?></div>
<div id="apDiv31"><?php echo $filas1['fisica'];?></div>
<div id="apDiv32"><?php echo $filas1['historia'];?></div>
<div id="apDiv33"><?php echo $promedio;?></div>
<div id="apDiv34"><?php echo $filas1['educacion_fisica1'];?></div>
<div id="apDiv35"><?php echo $filas1['tecnologia2'];?></div>
<div id="apDiv36"><?php echo $filas1['artes2'];?></div>
<div id="apDiv37"><?php echo $filas2['esp2'];?></div>
<div id="apDiv38"><?php echo $filas2['ingles2'];?></div>
<div id="apDiv39"><?php echo $filas2['matematicas2'];?></div>
<div id="apDiv40"><?php echo $filas2['fisica'];?></div>
<div id="apDiv41"><?php echo $filas2['historia'];?></div>
<div id="apDiv42"><?php echo $filas2['educacion_fisica1'];?></div>
<div id="apDiv43"><?php echo $filas2['tecnologia2'];?></div>
<div id="apDiv44"><?php echo $filas2['artes2'];?></div>
<div id="apDiv45"><?php echo $filas3['esp2'];?></div>
<div id="apDiv46"><?php echo $filas3['ingles2'];?></div>
<div id="apDiv47"><?php echo $filas3['matematicas2'];?></div>
<div id="apDiv48"><?php echo $filas3['fisica'];?></div>
<div id="apDiv49"><?php echo $filas3['historia'];?></div>
<div id="apDiv50"><?php echo $filas3['educacion_fisica1'];?></div>
<div id="apDiv51"><?php echo $filas3['tecnologia2'];?></div>
<div id="apDiv52"><?php echo $filas3['artes2'];?></div>
<div id="apDiv53"><?php echo $filas4['esp2'];?></div>
<div id="apDiv54"><?php echo $filas4['ingles2'];?></div>
<div id="apDiv55"><?php echo $filas4['matematicas2'];?></div>
<div id="apDiv56"><?php echo $filas4['fisica'];?></div>
<div id="apDiv57"><?php echo $filas4['historia'];?></div>
<div id="apDiv58"><?php echo $filas4['educacion_fisica1'];?></div>
<div id="apDiv59"><?php echo $filas4['tecnologia2'];?></div>
<div id="apDiv60"><?php echo $filas4['artes2'];?></div>
<div id="apDiv61"><?php echo $filas5['esp2'];?></div>
<div id="apDiv62"><?php echo $filas5['ingles2'];?></div>
<div id="apDiv63"><?php echo $filas5['matematicas2'];?></div>
<div id="apDiv64"><?php echo $filas5['fisica'];?></div>
<div id="apDiv65"><?php echo $filas5['historia'];?></div>
<div id="apDiv66"><?php echo $filas5['educacion_fisica1'];?></div>
<div id="apDiv67"><?php echo $filas5['tecnologia2'];?></div>
<div id="apDiv68"><?php echo $filas5['artes2'];?></div>
<div id="apDiv69"><?php echo $promedio8;?></div>
<div id="apDiv70"><?php echo $promedio2;?></div>
<div id="apDiv71"><?php echo $promedio3;?></div>
<div id="apDiv72"><?php echo $promedio4;?></div>
<div id="apDiv73"><?php echo $promedio5;?></div>
<div id="apDiv74"><?php echo $promedio6;?></div>
<div id="apDiv75"><?php echo $promedio7;?></div>
<div id="apDiv76"><?php echo $filas['apellido_paterno'];?></div>
<div id="apDiv77"><?php echo $filas['apellido_materno'];?></div>
<div id="apDiv78"><?php echo $filas['nombre_alumno'];?></div>
<div id="apDiv79"><?php echo $filas['grupo'];?></div>
<div id="apDiv80">MATUTINO</div>
<div id="apDiv81">TELESECUNDARIA IGNACIO ZARAGOZA</div>
<div id="apDiv82">PROMEDIO FINAL:</div>
<div id="apDiv83"><?php echo $promedio_final;?></div>
<div id="apDiv84">_________________________________</div>
<div id="apDiv85">
  <h5>NOMBRE Y FIRMA DEL (DE LA) PROFESOR(A)</h5>
</div>
<div id="apDiv86"><?php echo $name." ".$ap." ".$am ; ?></div>
<div id="apDiv87">

<table>

 
<form id="form1" name="form1" method="post" action="">
<label>
<input type="button" name="imprimir" id="imprimir" value="IMPRIMIR" onclick="window.print();" />
</label>

</table></div>
</body>
</html>