<?php
	if(isset($_GET['i']))
		if($_GET['i']==0)
			recarregar();
		else
			upvote();
	else
		echo "Function not found or wrong input";

function upvote()
{
	//echo $_GET['i'];
	$hostname = "localhost";
	$username = "root";
	$password = "";

	$conexion = @mysql_connect("$hostname", "$username", "$password") or die(mysqli_connect_error());

	mysql_select_db("test") or die(mysql_error());

	$result = mysql_query("UPDATE mulheres SET voto = voto + 1 WHERE ID='".$_GET['i']."'");
	//echo $result;
	mysql_close($conexion);
	recarregar();
}

function recarregar()
{
	//echo $_GET['i'];
	$hostname = "localhost";
	$username = "root";
	$password = "";

	$conexion = @mysql_connect("$hostname", "$username", "$password") or die(mysqli_connect_error());

	mysql_select_db("test") or die(mysql_error());

	$result = mysql_query("SELECT * FROM mulheres");

	$totalPages = mysql_num_rows($result);
	mt_srand();
	$num1 = mt_rand(0, $totalPages-1);
	$num2 = mt_rand(0, $totalPages-1);
	while($num1==$num2){
		$num2 = mt_rand(0, $totalPages-1);
	}
	//echo $num1," ",$num2," ",$totalPages;

	$result = mysql_query("SELECT * FROM mulheres WHERE ID='".$num1."'");
	$row = mysql_fetch_assoc($result);
	//echo "ID: ".$row['ID'].", File:".$row['Foto'].", Number:".$row['voto']."<br/>";
	
	$id1 = $row['ID'];
	$file1 = $row['Foto'];

	$result = mysql_query("SELECT * FROM mulheres WHERE ID='".$num2."'");
	$row = mysql_fetch_assoc($result);
	//echo "ID: ".$row['ID'].", File:".$row['Foto'].", Number:".$row['voto']."<br/>";
	
	$id2 = $row['ID'];
	$file2 = $row['Foto'];

	mysql_close($conexion);

echo <<<EOD
<div id="poll">
<table width="100%" border="0" cellspacing="0"><tr><td align="center"><table width="57%" border="0" cellspacing="0"><tr>  <td width="386"><table width="100%" border="0" cellspacing="0"><tr><td width="47%">&nbsp;</td><td width="6%">&nbsp;</td><td width="47%">&nbsp;</td></tr><tr><td align="center"><p>
<button class="foto_mina" onclick="getVote($id1)">
<img class="reduzimg" id="esquerda" src="$file1"/>
</button>
</p></td><td></td><td align="center">
<button class="foto_mina" onclick="getVote($id2)">
<img class="reduzimg" id="direita" src="$file2"/>
</button>
</td></tr><tr><td align="center"></td><td>&nbsp;</td><td align="center"></td></tr></table></td></tr>
        </table>
$totalPages
</div>
EOD;
}

?>
