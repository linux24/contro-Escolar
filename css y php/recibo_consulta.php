<?php 
$idc = mysql_connect('localhost', 'root', '123'); 
$matricula=$_POST['matricula'];

$sql = ("SELECT * FROM proyecto.recibos WHERE matricula='".$matricula."'");
$resultado = mysql_query($sql,$idc) or die(mysql_error());
$filas = mysql_fetch_assoc($resultado);

$nombre= $filas['nombre'];
$am= $filas['ap'];
$ap= $filas['am'];
$fecha= $filas['fecha'];
$cuota= $filas['cuota'];
$concepto= $filas['concepto'];




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
	left: 191px;
	top: 73px;
	width: 338px;
	height: 23px;
	z-index: 4;
	font-size: 12px;
	text-align: center;
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
	width: 277px;
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
	left: 482px;
	top: 306px;
	width: 122px;
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
	left: 350px;
	top: 335px;
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
	left: 104px;
	top: 964px;
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
	left: 473px;
	top: 286px;
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
	left: 356px;
	top: 339px;
	width: 136px;
	height: 30px;
	z-index: 16;
	font-size: 14px;
}
#apDiv85 {
	position: absolute;
	left: 485px;
	top: 338px;
	width: 195px;
	height: 30px;
	z-index: 17;
}
#apDiv86 {
	position: absolute;
	left: 28px;
	top: 399px;
	width: 664px;
	height: 77px;
	z-index: 18;
	text-align: center;
}
#apDiv86 table tr td {
	font-size: 12px;
}
#apDiv87 {
	position: absolute;
	left: 62px;
	top: 178px;
	width: 130px;
	height: 14px;
	z-index: 19;
}
#apDiv88 {
	position: absolute;
	left: 318px;
	top: 177px;
	width: 145px;
	height: 20px;
	z-index: 20;
}
#apDiv89 {
	position: absolute;
	left: 552px;
	top: 177px;
	width: 145px;
	height: 19px;
	z-index: 21;
}
#apDiv90 {
	position: absolute;
	left: 67px;
	top: 287px;
	width: 326px;
	height: 15px;
	z-index: 22;
	font-size: 14px;
}
#apDiv91 {
	position: absolute;
	left: 438px;
	top: 286px;
	width: 267px;
	height: 17px;
	z-index: 23;
}
#apDiv92 {
	position: absolute;
	left: 509px;
	top: 108px;
	width: 179px;
	height: 15px;
	z-index: 24;
}
#apDiv93 {
	position: absolute;
	left: 272px;
	top: 513px;
	width: 171px;
	height: 140px;
	z-index: 25;
}
</style>
</head>

<body>
<div id="apDiv1">SISTEMA EDUCATIVO NACIONAL<br />
RECIBO DE INSCRIPCION</div>
<div id="apDiv2"><img src="../img/de.jpg" width="150" height="76" /></div>
<div id="apDiv3"><img src="../img/er.PNG" width="130" height="65" /></div>
<div id="apDiv4">EDUCACIÓN SECUNDARIA</div>
<div id="apDiv5">DATOS PERSONALES</div>
<div id="apDiv6">__________________________________________________________________________________</div>
<div id="apDiv7">PRIMER APELLIDO</div>
<div id="apDiv8">SEGUNDO APELLIDO</div>
<div id="apDiv9">NOMBRE</div>
<div id="apDiv10">CONCEPTO DE PAGO</div>
<div id="apDiv11">________________________________________________</div>
<div id="apDiv12">NOMBRE DE LA ESCUELA</div>
<div id="apDiv14">_________________________________</div>
<div id="apDiv16">CONCEPTO DE PAGO</div>
<div id="apDiv84">CUOTA RECIBIDA: $</div>
<div id="apDiv85"><?php echo $cuota; ?></div>
<div id="apDiv86">
  <table width="664" height="79" border="1">
    <tr>
      <td width="321" align="center">FIRMA RECIBIDO</td>
      <td width="327" align="center" valign="middle">FIRMA ENTREGA</td>
    </tr>
  </table>
</div>
<div id="apDiv87"><?php echo $filas['ap']; ?></div>
<div id="apDiv88"><?php echo $filas['am']; ?></div>
<div id="apDiv89"><?php echo $filas['nombre']; ?></div>
<div id="apDiv90">TELESECUNDARIA IGNACIO ZARAGOZA</div>
<div id="apDiv91"><?php echo $concepto; ?></div>
<div id="apDiv92"><?php echo $fecha; ?></div>
<div id="apDiv93">

<table>

 
<form id="form1" name="form1" method="post" action="">
<label>
<input type="button" name="imprimir" id="imprimir" value="IMPRIMIR" onclick="window.print();" />
</label>

</table>
</div>
<div id="apDiv25">
  

</body>
</html>