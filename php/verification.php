<?php
	include 'ponte1.php';
		session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title></title>
<script type="text/javascript">
	function loginsuccesfully(){
		setTimeout("window.location='../index2.php'",3000);
	}

	function loginfailed(){
		setTimeout("window.location='../index.html'",3000);
	}
</script>
</head>
<body>
<?php

	if(!isset($_session["email"])   ||  !isset($_session["senha"])){
		echo "<center>Nome de usuario ou senha inválidos.Espere para tentar novamente</center>";
		echo "<script>loginfailed()</script>";
		exit;
	} else{
		echo "<center>Você foi logado com sucesso!!!</center>";
		echo("<script>loginsuccesfully()</script>");
	}
	
?>
</body>
</html>