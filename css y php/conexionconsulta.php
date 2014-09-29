<?php

$cn=mysql_connect("localhost","root","123") or die("error en la conexion");
$db=mysql_select_db("proyecto")or die("");
return($cn);
return($db);

?>