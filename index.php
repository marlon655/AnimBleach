<!DOCTYPE html>
<html>
<head>
	<title>Animes On</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="center">

		<div class="logo">
			<a href="">Animes On</a>
		</div><!-- logo -->	

		<nav class="desktop">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Categorias</a></li>
				<li><a href="">Lançamentos</a></li>
				<li><a href="">Contato</a></li>
			</ul>
		</nav><!--desktop -->

		<nav class="mobile">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Categorias</a></li>
				<li><a href="">Lançamentos</a></li>
				<li><a href="">Contato</a></li>
			</ul>
		</nav><!-- mobile -->
		<div class="clear"></div>
	</div><!-- center -->
	</header>

	<section class="banner">
		<div class="center">
			<div class="box-single w60">
				<div class="box-imagem">
					<div class="box-imagem-wraper">
						<!-- <img src="ichigo.gif"> -->
						<img src="images/gif2.gif">
					</div><!-- box-imagem-wraper -->
				</div><!-- box-imagem -->
			</div><!-- box-single -->

			<div class="box-single w35">
			<div class="temporadas">
					<div class="temporada-item">
						<h2>1°</h2>
						<h2>2°</h2>
						<h2>3°</h2>
						<h2>4°</h2>
						<h2>5°</h2>
						<h2>6°</h2>
						<h2>7°</h2>
						<h2>8°</h2>
						<h2>9°</h2>
						<h2>10°</h2>
						<h2>11°</h2>
						<h2>12°</h2>
						<h2>13°</h2>
						<h2>14°</h2>	
					</div><!-- temporada-item -->
					<div class="border-temporada"></div><!--  borda interna ^^ -->
				</div><!-- temporadas -->
				<div class="play-list">
					
					<a href="1">
					<div class="list-link">
						<div class="img-video">
							<div class="img-video-wraper">
								<img src="images/ichigo.gif">
							</div><!-- img-video-wraper -->
						</div><!-- img-video -->
						<div class="descricao-video">
							<h2><span>1° Temporada - Ep 1</span></h2>
						</div><!-- descricao-video -->
					</div><!-- list-link -->
					<div class="clear"></div>
					</a>

				</div><!-- play-list -->
			</div><!-- box-single -->
			<div class="clear"></div>
	</div><!-- center -->
	</section><!-- banner -->

	<section class="catalogos">
		<h2>Em Destaque</h2>
			<div class="destaques">

				<div class="destaques-wraper">

<?php for ($i=0; $i < 5 ; $i++) { ?>

					<div class="box">
						<div class="box-catalogo">
							<div class="catalogo-imagem">
								<img src="images/giphy.gif">
							</div><!-- catalogo-imagem -->

							<div class="overlay">
							<div class="descricao-catalogo">
								<span>Nulla facilisi. In ut tortor a nulla sodales feugiat. Pellentesque ac fringilla est, id maximus ipsum. Quisque pellentesque bibend modoooooooo</span>
							</div><!-- descricao-catalogo -->
						</div><!-- overlay -->

						</div><!-- box-catalogo -->
					</div><!-- box -->

<?php } ?>

				<div class="clear"></div>
				</div><!-- destaques-wraper -->
			</div><!-- destaques -->
	</section><!-- catalogos -->

<footer>
	
</footer>
	<script src="script.js"></script>
	<script src="lista.js"></script>
</body>
</html> 