<?php
	include('ponte.php');


$consulta="SELECT * FROM cadastro ";
$con = $conn->query($consulta) or die($mysqli->error);


?>
<html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon"  href="../img/fisioforma.png">
<link rel="stylesheet" type="text/css" href="../css/admin2.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<title>Área Restrita</title>
</head>
<body>
<div class="header">
<h1>Área Restrita</h1>
<nav class="menu">
			<a class="btn-close"><i class="fa fa-times"></i></a>
			<ul>
			
				<li class="txt33"><a href="admin.php">Consultas marcadas</a></li>
				<li><a href="logout2.php">SAIR</a></li>
				
				
			</ul>

		</header>
		</nav>
</div>
<center>
<form method="post" action="admin.php">
  
<div class="txt2">  
<h1>Usuários cadastrados</h1>
</div>
<table border="1">
<tr>
	<td class="titulo">Eletroterapia</td>
	</tr>
	<tr>
	<tr >
		
		<td class="titulo2">Id</td>
		<td class="titulo2">Nome</td>
		<td class="titulo2">Idade</td>
		<td class="titulo2">Cpf</td>
		<td class="titulo2">Telefone</td>
		<td class="titulo2">Email</td>
		
		
	</tr>
	<?php  while($dado = $con->fetch_array()){ ?>
	<tr>
		
		<td class="titulo2"><?php echo $dado["id"] ; ?></td>
		<td class="titulo2"><?php echo $dado["nome"] ; ?></td>
		<td class="titulo2"><?php echo $dado["idade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["cpf"] ; ?></td>
		<td class="titulo2"><?php echo $dado["telefone"] ; ?></td>
		<td class="titulo2"><?php echo $dado["email"] ; ?></td>
		
		
	</tr>
	<?php  } ?>
</table>
<br>


<br>
	


</form>
</center>
<div class="header2">
<h1>Área Restrita</h1>
</div>
</body>
</html>