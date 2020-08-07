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
			<div class="col s6 offset-s3">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Cadastrar filme</span>

						<div class="row">
							<div class="input-field col s12">
								<input type="text" class="validate" id="titulo" required>
								<label for="titulo">Título do filme</label>
							</div>
						</div>

						<div class="row">
							<form class="col s12">
								<div class="row">
									<div class="input-field col s12">
										<textarea class="materialize-textarea" id="sinopse"></textarea>
										<label for="textarea1">Sinopse</label>
									</div>
								</div>
							</form>
						</div>

						<div class="row">
							<div class="input-field col s2">
								<input type="number" step=".1" min=0 max=10 class="validate" id="nota">
								<label for="titulo">Nota</label>
							</div>
							<div class="file-field input-field col s9">
								<div class="btn purple lighten-2 black-text">
									<span>Imagem de capa</span>
									<input type="file" id="capa">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
								</div>
							</div>
						</div>

						<div class="card-action">
						<a class="btn waves-effect waves-light purple" href="home.php">Incluir</a>
						<a class="btn waves-effect waves-light grey" href="home.php">Cancelar</a>
					</div>
				</div>
			</div>
		</div>
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
