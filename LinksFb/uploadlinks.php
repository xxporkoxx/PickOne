<?php
	//DB Connectio
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$conexion = @mysql_connect("$hostname", "$username", "$password") or die(mysqli_connect_error());
	
	//DB select
	mysql_select_db("test") or die(mysql_error());
	
	$myFile = fopen("CAASOfids0.txt","r") or die("Unable to read file!");
	
	while(!feof($myFile)){
		$stringFile = fgets($myFile);
		if(!feof($myFile)){
			$stringFile = substr($stringFile,0,strpos($stringFile," "));
			echo "<br/>";
			echo "https://graph.facebook.com/".$stringFile."/picture?type=large";
			$result = mysql_query("INSERT INTO mulheres(ID,Foto,voto)
										VALUES(0,'https://graph.facebook.com/".$stringFile."/picture?type=large',0);");
			}
		}
	mysql_close($conexion);
	fclose($myFile);
?>