<!DOCTYPE html>
<html lang="pt-br">

<?php
session_start(); // iniciando sessão
include 'includes/conexao.php';
include 'includes/head.php';
include 'includes/cabecario.php';

?>

<?php
// verificando se usuário está logado
if (empty($_SESSION['ID'])) {

	header('location:login/login.php'); // enviando para login.php

}
?>
<section id="hero">

	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
				<div data-aos="zoom-out">
					<h1>ESTANTE</h1>
					<h2>Empreste seu livro e devolva somente daqui 15 dias</h29>
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


<?php
// verificando se o codigo do livro NÃO está vazio
if (!empty($_GET['tombo'])) {

	// inserindo o código do produto na variável $cd_prod
	$tombo = $_GET['tombo'];

	// se a sessão estante não estiver preenchida(setada)
	if (!isset($_SESSION['estante'])) {
		// será criado uma sessão chamado estante para receber um vetor
		$_SESSION['estante'] = array();
	}

	// se a variavel $tombo não estiver setado(preenchida)
	if (!isset($_SESSION['estante'][$tombo])) {

		// será adicionado um livro na estante
		$_SESSION['estante'][$tombo] = 1;
	}

	// incluindo o arquivo 'mostraestante.php'
	include 'includes/mostraestante.php';
} else {

	//mostrando a estante vazia	
	include 'includes/mostraestante.php';
}

?>

<body>
	<div class="row text-center" style="margin-top: 15px;">
		<a href="acervo.php"><button class="btn btn-lg btn-primary">Continuar escolhendo</button></a>
		<?php if (count($_SESSION['estante']) > 0) { ?>
			<a style="margin-top: 5px" href="finalizaremprestimo.php"><button class="btn btn-lg btn-success">Finalizar empréstimo de livro</button></a>
		<?php } ?>
	</div>
	</div>
	<?php
	include 'includes/faleconosco.php';
	include 'includes/footer.php';
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