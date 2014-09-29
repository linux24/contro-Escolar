
 
<?php
header("Refresh: 3; URL=http://localhost/proyecto/css%20y%20php/eliminar.php");
?>


<style type="text/css">
div.cabezal {background: #f0f0f0;
width: 900px;
height: 130px;
margin: auto;
border-radius: 10px 10px 10px 10px;
box-shadow: 0px 0px 5px #2f3030 inset;
}
#apDiv1 {
	position: absolute;
	left: 835px;
	top: 359px;
	width: 59px;
	height: 25px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 830px;
	top: 327px;
	width: 75px;
	height: 29px;
	z-index: 2;
}
</style>
<div  class="cabezal">
  <table id="centrar-tabla" cellspacing="20" cellpadding="0" border="0">
    <tr>
      <td ><img src="../img/1.png" alt="primero" width="177" height="65" /></td>
      <td><img src="../img/sev.png" alt="uno" width="221" height="113" /></td>
      <td><img src="../img/3.png" alt="firs" width="300" height="50" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>


<p>&nbsp;</p>
<table width="548" border="0" align="center">
  <tr>
    <td width="294" align="center" bgcolor="#00FF66"><em>!! LOS DTAOS FUERON ELIMINADOS !!</em></td>
    <td width="238" bgcolor="#00FF66"><img src="../eli_alum.png" width="121" height="120"></td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
mysql_free_result($elimina);
?>
