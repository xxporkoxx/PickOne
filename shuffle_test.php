<?php
$hostname = "localhost";
$username = "root";
$password = "";

	$conexion = @mysql_connect("$hostname", "$username", "$password") or die(mysqli_connect_error());

	mysql_select_db("test") or die(mysql_error());

//calcular quantidade de molieres
    $result = mysql_query("SELECT * FROM mulheres");
    $num_rows = mysql_num_rows($result);
 
//criar array de molieres
    $numbers = range(1,$num_rows);
    $numbers_pos = array();
    srand((float)microtime()*1000000);
    shuffle($numbers);
?>