
<?php
include 'ponte.php';
?>
<html>
<head>
<title></title>
<script type="text/javascript">
	function loginsuccesfully(){
		setTimeout("window.location='../index.html'",3000);
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
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	

$sql=mysqli_query($conn, "INSERT INTO cadastro (nome, idade, cpf, telefone, email, senha)VALUES('$nome', '$idade', '$cpf', '$telefone', '$email', '$senha')");


echo "<center><h1>Cadastro feito com sucesso! Espere um momento!</h1></center>";
echo "<center><h2>Realize o login!</h2></center>";
echo "<script>loginsuccesfully()</script>";

?>
<center>
<img class="loading" src="../img/loading2.gif">
</center>
</body>
</html>



