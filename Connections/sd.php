<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sd = "127.0.0.1";
$database_sd = "test";
$username_sd = "root";
$password_sd = "";
$sd = @mysql_pconnect($hostname_sd, $username_sd, $password_sd) or trigger_error(mysql_error(),E_USER_ERROR);
error_reporting(0);
?>