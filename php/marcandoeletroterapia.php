
<?php
include 'ponte.php';
?>
<html>
<head>
<title></title>
<script type="text/javascript">
	function loginsuccesfully(){
		setTimeout("window.location='../index2.php'",3000);
	}
	
</script>
</head>
<style type="text/css">
body{
	cursor: progress;
	font-family: 'Lato';
}
.loading{
	margin-top: 5%;
	width: 5%;
}
</style>
<body>
<?php

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$rg = $_POST['rg'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$data = $_POST['da_ta'];
	$hora = $_POST['hora'];
	

$sql=mysqli_query($conn, "INSERT INTO eletroterapia (nome, idade, rg, endereco, cidade, estado, da_ta, hora)VALUES('$nome', '$idade', '$rg', '$endereco', '$cidade', '$estado', '$data', '$hora')");


echo "<center><h1>Consulta marcada com sucesso! Espere um momento!</h1></center>";

echo "<script>loginsuccesfully()</script>";

?>
<center>
<img class="loading" src="../img/loading2.gif">
</center>
</body>
</html>



