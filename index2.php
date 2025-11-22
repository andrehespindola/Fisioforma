<?php
	include 'php/ponte1.php';

?>
<!DOCTYPE html>
<html lang="pt-bt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>FisioForma - Marque suas consultas de um novo jeito.</title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link rel="icon"  href="img/fisioforma.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
		
	</head>
	<body>
	<?php
	

		session_start();
		if (!isset($_SESSION['email']) || $_SESSION['senha'] !== 1){
	
		} else { 
		$username = $_SESSION['user'];
		$idusername = $_SESSION['iduser'];
		session_destroy();
		exit;
}
?>
	

		<header class="cabecalho">
		<a href="index.html"> <h1 class="logo"> FisioForma - Marque suas consultas de um novo jeito.</h1></a>
		<button class="btn-menu"><i class="fa fa-bars fa-lg"></i></button>
		<nav class="menu">
			<a class="btn-close"><i class="fa fa-times"></i></a>
			<ul>
			
				<li><a href="marcar_consulta.php">Marcar consulta</a></li>
			
				
				<li><a href="php/logout.php">SAIR</a></li>
			</ul>

		</header>
		</nav>
		<nav class="cadastrar">
			<a class="btn-closes"><i class="fa fa-times"></i></a>

			<form method="POST" action="php/cadastro.php">
			<ul>
				<li class="title02">Cadastre-se</li>
				<li><a href="#"><input type="text" name="nome" placeholder="Nome completo"></a></li>
				<li><a href="#"><input type="text" name="idade" placeholder="Idade"></a></li>
				<li><a href="#"><input type="text" name="cpf" placeholder="CPF"></a></li>
				<li><a href="#"><input type="text" name="telefone" placeholder="Telefone com o ddd"></a></li>
				<li><a href="#"><input type="email" name="email" placeholder="E-mail"></a></li>
				<li><a href="#"><input type="password" name="senha" placeholder="Senha"></a></li>
				<button > cadastrar </button>
				
			</ul>
			</form>
		</header>
		</nav>
		<nav class="login">
			<a class="btn-closess"><i class="fa fa-times"></i></a>

			<form method="POST" action="php/login.php">
			<ul>
				<li class="title02">Login</li>
				
				<li><a href="#"><input type="email" name="email" placeholder="Seu email"></a></li>
				<li><a href="#"><input type="password" name="senha" placeholder="Senha"></a></li>
				<button >Logar </button>
				
			</ul>
			</form>
		</header>
		</nav>

		<div class="banner"> 
			<div class="title">
				<h2>FisioForma!</h2>
				<h3>Seja bem-vindo a FisioForma! A nova forma de marcar suas consultas.</h3>
			</div>

			<div class="buttons">
			
			</div>
		</div>
		<div class="maisprocurados">
		<p>Dicas para melhorar sua vida</p>
		</div>
		 <main class="servicos">
            <article class="servico">
               <a href="qualidadevida.html"><img src="img/qualidadevida.jpg" alt="Campanhas publicitárias"></a>
               <div class="inner">
                   <a href="qualidadevida.html">10 Passos para Melhorar sua Qualidade de Vida </a>
                  
                   <p>Você já parou para pensar como está a sua qualidade de vida? O que você tem feito para melhorar sua saúde, seu bem-estar?Dados do Ministério da Saúde apontam que doenças associadas ao estilo de vida matam mais que o trânsito e a violência. Essas doenças normalmente estão relacionadas com o aparelho circulatório: infartos, derrames, diabetes e hipertensão, entre outras. A maior parte dos cânceres também é relacionada com estilo de vida. </p>
               </div>
            </article>
            <article class="servico">
               <a href="vidasaudavel.html"><img src="img/vidasaudavel.jpg" alt="Marketing Digital"></a>
               <div class="inner">
                   <a href="vidasaudavel.html"> 10 Pequenas Mudanças para uma Vida mais Saudável</a>
                   
                   <p>Muitas vezes não temos tempo para dedicar cuidando de nosso corpo. Preocupações com trabalho, faculdade, até com os filhos… A vida moderna não é fácil e nem sempre é possível dedicar algumas horas de seu tempo na academia para cultivar o corpo e saúde que sempre quis. Existem, porém, pequenas mudanças que podem transformar uma rotina até então sedentária e passiva em uma empreitada rumo à boa forma.</p>
               </div>
            </article>
            <article class="servico">
               <a href="habitos.html"><img src="img/habitos.jpg" alt="Criação de Sites"></a>
               <div class="inner">
                   <a href="habitos.html">10 Hábitos Saudáveis para sua Vida </a>
                   
                   <p> Tosso corpo sempre reage de acordo com o tratamento que recebe. Existem alguns hábitos saudáveis simples que devemos cultivar. Seu corpo e sua mente agradecem!

Incluindo hábitos saudáveis no seu dia-a-dia você mantém sua saúde física e mental, melhora a auto-estima, ameniza os sintomas da depressão e da ansiedade, reduz o risco de doenças cardíacas e fortalece o organismo — enfim, aumenta sensivelmente sua qualidade de vida.</p>
               </div>
            </article>
            </main>
            
        <footer class="rodape ">
          	<div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
         	</div>
          	<p class="copyright">
            Copyright © FisioForma 2017. Todos os direitos reservados.
        </footer>       
		<script src="http://code.jquery.com/jquery-1.12.0.min.js" ></script>
		<script>
				// menu
			$(".btn-menu").click(function(){
				$(".menu").show();
			});
			$(".btn-close").click(function(){
				$(".menu").hide();
			});
				// cadastrar
			$(".btn-cadastrar").click(function(){
				$(".cadastrar").show();
			});
			$(".btn-closes").click(function(){
				$(".cadastrar").hide();
			});
				// login
			$(".btn-sobre").click(function(){
				$(".login").show();
			});
			$(".btn-closess").click(function(){
				$(".login").hide();
			});
			
		</script>
	</body>
</html>