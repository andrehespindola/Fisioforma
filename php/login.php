<?php
include 'ponte1.php';
?>

<html>
<head>
<meta charset="utf-8">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
<title>Logando......</title>
<script type="text/javascript">
	function loginsuccesfully(){
		setTimeout("window.location='../index2.php'",3000);
	}

	function loginfailed(){
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

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = mysql_query("SELECT * FROM cadastro where email = '$email' and senha = '$senha'") or die (mysql_error());
$row  = mysql_num_rows($sql);
if ($row > 0) {
	session_start();
	$_session['email']=$_POST['email'];
	$_session['senha']=$_POST['senha'];
	echo "<center>Você foi logado com sucesso!!!</center>";
echo "<script>loginsuccesfully()</script>";

}else{
	echo "<center>Nome de usuario ou senha inválidos.Espere para tentar novamente</center>";
echo "<script>loginfailed()</script>";
}

?>
<center>
<img class="loading" src="../img/loading2.gif">
</center>
</body>
</html>