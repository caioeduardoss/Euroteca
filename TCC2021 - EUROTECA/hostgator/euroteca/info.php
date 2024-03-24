<!DOCTYPE html>
<html lang="pt-br">

<?php
session_start();
include 'conexao.php';
include 'head.php';
include 'cabecario.php';

if (!empty($_GET['tombo'])) { // Se não estiver vazia a variavel tombo

	$tombo = $_GET['tombo'];

	$consulta = $cn->query("SELECT * FROM view_livro WHERE tombo='$tombo'");
	$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
} else {
	header("location:index.php");
}
?>

<body>

	<!--  Inicio Inicio  -->
	<section id="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
					<div data-aos="zoom-out">
						<h1>Grande acervo no sistema</h1>
						<h2>Veja todos nossos livros na nossa plataforma</h29>
							<div class="text-center text-lg-start">
								<a href="acervo.php" class="btn-get-started scrollto">Saiba Mais</a>
							</div>
					</div>
				</div>
				<div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
					<img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
				</div>
			</div>
		</div>

		<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
			<defs>
				<path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
			</defs>
			<g class="wave1">
				<use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
			</g>
			<g class="wave2">
				<use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
			</g>
			<g class="wave3">
				<use xlink:href="#wave-path" x="50" y="9" fill="#fff">
			</g>
		</svg>

	</section>
	<!-- Fim Inicio -->

	<div class="container">
		<br>
		<br>

		<div class="row">

			<div class="col-sm-4 col-sm-offset-1">
				<a align="center">
					<h2>INFORMAÇÕES DO LIVRO</h2>
				</a>
				<img src="assets/img/livros/<?php echo $exibe['capa']; ?>" class="img-responsive" style="width:100%;">
			</div>

			<div class="col-sm-7">
				<h1><?php echo $exibe['titulo']; ?></h1>
				<?php echo $exibe['subtitulo']; ?>
				<br>

				<b>Tombo: </b><?php echo $exibe['tombo']; ?>
				<br>
				<b> Autor: </b><?php echo $exibe['autor']; ?>
				<br>
				<b> Editora: </b><?php echo $exibe['editora']; ?>
				<br>
				<b>Categoria: </b><?php echo $exibe['categoria']; ?>
				<br>
				<br>

				<b> Edição: </b><?php echo $exibe['edicao']; ?>
				<br>
				<b>Volume: </b><?php echo $exibe['volume']; ?>
				<br>
				<b>Exemplar: </b><?php echo $exibe['exemplar']; ?>
				<br>
				<b>Procedencia: </b><?php echo $exibe['procedencia']; ?>
				<br>
				<br>

				<b>Cutter: </b><?php echo $exibe['cutter']; ?>
				<br>
				<b>ISBN: </b><?php echo $exibe['isbn']; ?>
				<br>
				<br>
				<b>Sinopse: </b><br><?php echo $exibe['sinopse']; ?>

				<p><a href="acervo.php">
						<button class="btn btn-light" style="margin-left:4px">
							<span class="bi bi-arrow-bar-left"> VOLTAR AO ACERVO</span>
						</button>
					</a>

					<?php if ($exibe['disponivel'] >= 1) { ?>
						<a href="estante.php?tombo=<?php echo $exibe['tombo']; ?>">
							<button class="btn btn-info" style="margin-left:4px">
								<span class="bi bi-journal-arrow-up"> RESERVAR</span>
							</button>
						</a>

					<?php } else { ?>
						<button class="btn btn-danger" disabled>
							<span class="bi bi-journal-x"> INDISPON... </span>
						</button>

					<?php } ?>
				</p>

			</div>

		</div>



	</div>
	</div>

	<br>
	<br>

	<?php
	include 'faleconosco.php';
	include 'footer.php';
	?>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/purecounter/purecounter.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>