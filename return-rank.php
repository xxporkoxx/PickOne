<?php
    $hostname = "localhost";
	$username = "root";
	$password = "";

	$conexion = @mysql_connect("$hostname", "$username", "$password") or die(mysqli_connect_error());

	mysql_select_db("test") or die(mysql_error());

	$result = mysql_query("SELECT * FROM mulheres ORDER BY voto DESC");
    while($row = mysql_fetch_assoc($result)){
        echo '<div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">';
        echo '<a href="http://google.com" class="thumbnail" target="_blank">';
        echo '<div class="envolvespaimg">';
        echo '<img class="foto-ranking" src="',$row['Foto'],'" alt="teste">';
        echo'<span><h4>Picks ',$row['voto'],'</h4></span>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
    }
?>