<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_prueva = "localhost";
$database_prueva = "borrar";
$username_prueva = "root";
$password_prueva = "123";
$prueva = mysql_pconnect($hostname_prueva, $username_prueva, $password_prueva) or trigger_error(mysql_error(),E_USER_ERROR); 
?>