<!doctype html>
<html lang="pt-br">

<meta charset="utf-8">
<title>ADM - LISTA</title>

<?php
session_start();
// se a sessão id estiver vazia ou se a sessão tipo for diferente de adm entao execute
if (empty($_SESSION['tipo']) || $_SESSION['tipo'] != 1) {
	header('location:../index.php');  // redireciona para página index.php
}

include '../includes/conexao.php';
include '../includes/head.php';
include '../includes/cabecario.php';

$consulta = $cn->query("SELECT * from tab_livros");

?>

<body>
	<!--  Inicio Inicio  -->
	<section id="hero">

		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
					<div data-aos="zoom-out">
						<h1>LISTA DE LIVROS</h1>
						<h2>Lista de livros para poder altera-los ou exclui-los.</h29>
					</div>
				</div>
				<div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
					<img src="../assets/img/adm-img.png" class="img-fluid animated" alt="">
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
	<br>
	<br>
	<div class="container-fluid">

		<?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>

			<div class="row justify-content-center" style="margin-top: 15px;">

				<div class="col-sm-2 col-sm-offset-2"><img src="../assets/img/livros/<?php echo $exibe['capa']; ?> " style="width: 120px; height: 140px; object-fit: contain;" class="img-responsive"></div>
				<div class="col-sm-5">
					<h4 style="padding-top:20px"><?php echo $exibe['titulo']; ?></h4>
				</div>
				<div class="col-sm-2" style="padding-top:20px">


					<a href="../administrador/formalterar.php?id=<?php echo $exibe['tombo']; ?>&id2=<?php echo $exibe['id_categoria']; ?>">
						<button class="btn btn-lg btn-block btn-light">
							<span class="bi bi-pencil"> Alterar</span>
						</button>
					</a>
				</div>

				<div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">
					<a href="../administrador/excluir.php?id=<?php echo $exibe['tombo']; ?>">
						<button class="btn btn-lg btn-block btn-danger">
							<span class="bi bi-archive"> Excluir</span>
						</button>
					</a>
				</div>

			</div>
			<br>
			<br>

		<?php } ?>

	</div>

	<?php include '../includes/footer.php'; ?>

	<!-- Vendor JS Files -->
	<script src="/euroteca/assets/vendor/aos/aos.js"></script>
	<script src="/euroteca/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/euroteca/assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="/euroteca/assets/vendor/php-email-form/validate.js"></script>
	<script src="/euroteca/assets/vendor/purecounter/purecounter.js"></script>
	<script src="/euroteca/assets/vendor/swiper/swiper-bundle.min.js"></script>

	<!-- Template Main JS File -->
	<script src="/euroteca/assets/js/main.js"></script>
</body>

</html>