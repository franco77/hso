<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_hso = "localhost";
$database_hso = "hso";
$username_hso = "root";
$password_hso = "15925621";
$hso = mysql_pconnect($hostname_hso, $username_hso, $password_hso) or trigger_error(mysql_error(),E_USER_ERROR); 
?>