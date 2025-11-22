<?php
	include('ponte.php');


$consulta="SELECT * FROM eletroterapia ";
$con = $conn->query($consulta) or die($mysqli->error);

$consulta2="SELECT * FROM termoterapia ";
$con2 = $conn->query($consulta2) or die($mysqli->error);

$consulta3="SELECT * FROM cinesioterapia ";
$con3 = $conn->query($consulta3) or die($mysqli->error);

$consulta4="SELECT * FROM hidroterapia";
$con4 = $conn->query($consulta4) or die($mysqli->error);

$consulta5="SELECT * FROM fototerapia";
$con5 = $conn->query($consulta5) or die($mysqli->error);

$consulta6="SELECT * FROM pediatrica";
$con6 = $conn->query($consulta6) or die($mysqli->error);

?>
<html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon"  href="../img/fisioforma.png">
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<title>Área Restrita</title>
</head>
<body>
<div class="header">
<h1>Área Restrita</h1>
<nav class="menu">
			<a class="btn-close"><i class="fa fa-times"></i></a>
			<ul>
			
				<li class="txt33"><a href="admin2.php">Usuários cadastrados</a></li>
				<li><a href="logout2.php">SAIR</a></li>
				
				
			</ul>

		</header>
		</nav>
</div>
<center>
<form method="post" action="admin.php">
  
<div class="txt2">  
<h1>Todas as consultas marcadas</h1>
</div>
<table border="1">
<tr>
	<td class="titulo">Eletroterapia</td>
	</tr>
	<tr>
	<tr>
		
		<td class="titulo2">nome</td>
		<td class="titulo2">idade</td>
		<td class="titulo2">rg</td>
		<td class="titulo2">endereco</td>
		<td class="titulo2">cidade</td>
		<td class="titulo2">estado</td>
		<td class="titulo2">data da consulta</td>
		<td class="titulo2">hora da consulta</td>
		
	</tr>
	<?php  while($dado = $con->fetch_array()){ ?>
	<tr>
		
		<td class="titulo2"><?php echo $dado["nome"] ; ?></td>
		<td class="titulo2"><?php echo $dado["idade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["rg"] ; ?></td>
		<td class="titulo2"><?php echo $dado["endereco"] ; ?></td>
		<td class="titulo2"><?php echo $dado["cidade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["estado"] ; ?></td>
		<td class="titulo2"><?php echo $dado["da_ta"] ; ?></td>
		<td class="titulo2"><?php echo $dado["hora"] ; ?></td>
		
	</tr>
	<?php  } ?>
</table>
<br>
<table border="1" >
	<tr>
	<td class="titulo">Cinesioterapia</td>
	</tr>
	<tr>
		
		<td class="titulo2">nome</td>
		<td class="titulo2">idade</td>
		<td class="titulo2">rg</td>
		<td class="titulo2">endereco</td>
		<td class="titulo2">cidade</td>
		<td class="titulo2">estado</td>
		<td class="titulo2">data da consulta</td>
		<td class="titulo2">hora da consulta</td>
		
	</tr>
	<?php  while($dado = $con3->fetch_array()){ ?>
	<tr>
		
		<td class="titulo2"><?php echo $dado["nome"] ; ?></td>
		<td class="titulo2"><?php echo $dado["idade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["rg"] ; ?></td>
		<td class="titulo2"><?php echo $dado["endereco"] ; ?></td>
		<td class="titulo2"><?php echo $dado["cidade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["estado"] ; ?></td>
		<td class="titulo2"><?php echo $dado["da_ta"] ; ?></td>
		<td class="titulo2"><?php echo $dado["hora"] ; ?></td>
		
	<?php  } ?>
</table>
<br>
<table border="1" >
	<tr>
	<td class="titulo">Hidroterapia</td>
	</tr>
	<tr>
		
		<td class="titulo2">nome</td>
		<td class="titulo2">idade</td>
		<td class="titulo2">rg</td>
		<td class="titulo2">endereco</td>
		<td class="titulo2">cidade</td>
		<td class="titulo2">estado</td>
		<td class="titulo2">data da consulta</td>
		<td class="titulo2">hora da consulta</td>
		
	</tr>
	<?php  while($dado = $con4->fetch_array()){ ?>
	<tr>
		
		<td class="titulo2"><?php echo $dado["nome"] ; ?></td>
		<td class="titulo2"><?php echo $dado["idade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["rg"] ; ?></td>
		<td class="titulo2"><?php echo $dado["endereco"] ; ?></td>
		<td class="titulo2"><?php echo $dado["cidade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["estado"] ; ?></td>
		<td class="titulo2"><?php echo $dado["da_ta"] ; ?></td>
		<td class="titulo2"><?php echo $dado["hora"] ; ?></td>
		
	</tr>
	<?php  } ?>
</table>
<br>
<table border="1" >
	<tr>
	<td class="titulo">Fototerapia</td>
	</tr>
	<tr>
		
		<td class="titulo2">nome</td>
		<td class="titulo2">idade</td>
		<td class="titulo2">rg</td>
		<td class="titulo2">endereco</td>
		<td class="titulo2">cidade</td>
		<td class="titulo2">estado</td>
		<td class="titulo2">data da consulta</td>
		<td class="titulo2">hora da consulta</td>
		
	</tr>
	<?php  while($dado = $con5->fetch_array()){ ?>
	<tr>
		
		<td class="titulo2"><?php echo $dado["nome"] ; ?></td>
		<td class="titulo2"><?php echo $dado["idade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["rg"] ; ?></td>
		<td class="titulo2"><?php echo $dado["endereco"] ; ?></td>
		<td class="titulo2"><?php echo $dado["cidade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["estado"] ; ?></td>
		<td class="titulo2"><?php echo $dado["da_ta"] ; ?></td>
		<td class="titulo2"><?php echo $dado["hora"] ; ?></td>
		
	</tr>
	<?php  } ?>
</table>
<br>
<table border="1" >
	<tr>
	<td class="titulo">Termoterapia</td>
	</tr>
	<tr>
		
		<td class="titulo2">nome</td>
		<td class="titulo2">idade</td>
		<td class="titulo2">rg</td>
		<td class="titulo2">endereco</td>
		<td class="titulo2">cidade</td>
		<td class="titulo2">estado</td>
		<td class="titulo2">data da consulta</td>
		<td class="titulo2">hora da consulta</td>
		
	</tr>
	<?php  while($dado = $con2->fetch_array()){ ?>
	<tr>
		
		<td class="titulo2"><?php echo $dado["nome"] ; ?></td>
		<td class="titulo2"><?php echo $dado["idade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["rg"] ; ?></td>
		<td class="titulo2"><?php echo $dado["endereco"] ; ?></td>
		<td class="titulo2"><?php echo $dado["cidade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["estado"] ; ?></td>
		<td class="titulo2"><?php echo $dado["da_ta"] ; ?></td>
		<td class="titulo2"><?php echo $dado["hora"] ; ?></td>
		
	</tr>
	<?php  } ?>
</table>
<br>
<table border="1" >
	<tr>
	<td class="titulo">Fisioterapia Pediatrica</td>
	</tr>
	<tr>
		
		<td class="titulo2">nome</td>
		<td class="titulo2">idade</td>
		<td class="titulo2">rg</td>
		<td class="titulo2">endereco</td>
		<td class="titulo2">cidade</td>
		<td class="titulo2">estado</td>
		<td class="titulo2">data da consulta</td>
		<td class="titulo2">hora da consulta</td>
		
	</tr>
	<?php  while($dado = $con6->fetch_array()){ ?>
	<tr>
		
		<td class="titulo2"><?php echo $dado["nome"] ; ?></td>
		<td class="titulo2"><?php echo $dado["idade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["rg"] ; ?></td>
		<td class="titulo2"><?php echo $dado["endereco"] ; ?></td>
		<td class="titulo2"><?php echo $dado["cidade"] ; ?></td>
		<td class="titulo2"><?php echo $dado["estado"] ; ?></td>
		<td class="titulo2"><?php echo $dado["da_ta"] ; ?></td>
		<td class="titulo2"><?php echo $dado["hora"] ; ?></td>
		
	</tr>
	<?php  } ?>
</table>


<br>
	
	

</form>
</center>
<div class="header2">
<h1>Área Restrita</h1>
</div>
</body>
</html>