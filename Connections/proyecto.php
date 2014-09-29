<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_proyecto = "localhost";
$database_proyecto = "proyecto";
$username_proyecto = "root";
$password_proyecto = "123";
$proyecto = mysql_pconnect($hostname_proyecto, $username_proyecto, $password_proyecto) or trigger_error(mysql_error(),E_USER_ERROR); 
?>