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
		setTimeout("window.location='admin2.php'");
	}

	function loginfailed(){
		setTimeout("window.location='../loginadmin.html'");
	}
</script>
</head>

<body>

<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email=="admin" && $senha=="admin"){
	echo "<script>loginsuccesfully()</script>";

}else{
	echo "<script>loginfailed()</script>";
}

?>
<center>

</center>
</body>
</html>