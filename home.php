<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Clorocine - A sua plataforma de vídeos">
	<meta name="author" content="Fábio de Almeida Martins">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="index" title="Clorocine - A sua plataforma de vídeos - Home" href="./home.html">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="./estilos.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<title>Clorocine - A sua plataforma de vídeos</title>
</head>

<body>

<?php
include "cria_bd.php";
$bd = new SQLite3("filmes.db");
$consulta = "SELECT * FROM filmes";
$result = $bd->query($consulta);
?>

	<script type="text/javascript" src="./js/script-body.js">
	</script>

	<header>
		<nav class="nav-extended purple lighten-3">
			<div class="nav-wrapper">
				<ul id="nav-mobile" class="right">
					<li><a href="home.php">Galeria</a></li>
					<li><a href="cadastrar.php">Cadastrar</a></li>
				</ul>
			</div>
			<div class="nav-header center">
				<h1>CLOROCINE</h1>
			</div>
			<div class="nav-content">
				<ul class="tabs tabs-transparent purple darken-1">
					<li class="tab"><a href="#test1" class="active">Todos</a></li>
					<li class="tab"><a href="#test2">Assistidos</a></li>
					<li class="tab"><a href="#test3">Favoritos</a></li>
 				</ul>
 			</div>
 		</nav>
 <!--
		<a id="topo"><figure id="imagem1">
			<img src="./img/logo.jpg" alt="Logotipo Clorocine" title="Clorocine - A sua plataforma de vídeos">
			<figcaption class="imgdescr"></figcaption>
		</figure></a>
		<br>
		<h1 class="titulo">CLOROCINE - A sua plataforma de vídeos</h1>
		<br>
-->
	</header>

	<main>

		<div class="row">
			<?php 
				while($filme = $result -> fetchArray()):   
			?>
			<div class="col s3">
				<div class="card hoverable">
					<div class="card-image">
						<img src="<?php echo $filme["poster"] ?>">
						<a class="btn-floating halfway-fab waves-effect waves-light red">
							<i class="material-icons">favorite_border</i>
						</a>
					</div>
					<div class="card-content">
						<p class="valign-wrapper"><i class="material-icons amber-text">star</i> <?php echo $filme["nota"] ?></p>
						<span class="card-title"><?php echo $filme["titulo"] ?></span>
						<p><?php echo $filme["sinopse"] ?></p>
					</div>
				</div>
			</div>
			<?php endwhile ?>

		</div>
<!--	
		<nav>
			<ol>
				<li><a href="./psalmi-light.html">PSALMI I </a></li>
				<li><a href="./psalmi-light.html">PSALMI II </a></li>
				<li><a href="./psalmi-light.html">PSALMI III </a></li>
				<li><a href="./psalmi-light.html">PSALMI IV </a></li>
				<li><a href="./psalmi-light.html">PSALMI V </a></li>
			</ol>
			<a href="./psalmi-90-light.html"><p>PSALMI XC</p></a>
		</nav>
-->
	</main>
<!---
	<br><br><br>
	<nav class="links">
		<a href="#topo">Voltar para o topo</a><br>
	</nav>
	<br><br><br>
-->
	<footer class="rodape"><br>Desenvolvido por <strong>Fábio de Almeida Martins</strong>. <br><strong>ETEC Irmã Agostina</strong> - <strong>Centro Paula Souza</strong> <br>Aluno do curso de Desenvolvimento de Sistemas. <br> 1o semestre de 2020. </footer>
</body>
</html>