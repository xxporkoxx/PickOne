<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PickOne</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<link rel="shortcut icon" href="img/favicon.png" >
<link href="estilo.css" rel="stylesheet" type="text/css" />
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
<script>
$(document).ready(function(){
    var $numbers = <?php echo json_encode($numbers)?>;
    for(var $i=0;$i<$numbers.length;$i++){
        
    }
});
 
</script>
</head>

<body id="indexbody">
<div id="logo">
  <center>
    <img src="img/final.png" width="400" height="150" alt="PickOne" />
  </center>
</div>
<div class="container" id="poll">
  
    
</div>
<div id="ranking">
	<button onclick="window.open('ranking.html', '_self')" class="blank">
        <img class="trofeu" src="img/icone-copo-dourado-vetor_23-2147494035 (1).fw.png" />
    </button>
</div>
</body>
</html>