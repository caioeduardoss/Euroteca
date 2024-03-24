<!DOCTYPE html>
<html lang="pt-br">

<meta charset="utf-8">
<title>ADM - INSERIR</title>

<?php
session_start();
// se a sessão id estiver vazia ou se a sessão tipo for diferente de adm entao execute
if (empty($_SESSION['tipo']) || $_SESSION['tipo'] != 1) {
	header('location:index.php');  // redireciona para página index.php
}

include 'conexao.php';
include 'head.php';
include 'cabecario.php';

$consultaCat = $cn->query("SELECT * FROM tab_categorias");

?>

<body>
	<!--  Inicio Inicio  -->
	<section id="hero">

		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
					<div data-aos="zoom-out">
						<h1>INSERIR LIVROS</h1>
						<h2>Insira livros facilmente na nossa plataforma.</h29>
					</div>
				</div>
				<div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
					<img src="assets/img/adm-img.png" class="img-fluid animated" alt="">
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

		<div class="row justify-content-center">

			<div class="col-sm-4 col-sm-offset-4">
				<br>
				<br>

				<h2>Cadastro de Livros</h2>
				<br>

				<form method="post" action="insprod.php" name="incluiProd" enctype="multipart/form-data">


					<div class="form-group">
						<label for="txttitulo">Nome do Livro</label>
						<input name="titulo" type="text" class="form-control" required id="titulo">
					</div>

					<br>

					<div class="form-group">
						<label for="txtsubtitulo">Subtitulo do Livro</label>
						<input name="subtitulo" type="text" class="form-control" required id="subtitulo">
					</div>

					<br>

					<div class="form-group">
						<label for="txtvolume">Volume</label>
						<input type="number" class="form-control" name="volume" required id="volume">
					</div>

					<br>

					<div class="form-group">
						<label for="txtedicao">Edição</label>
						<input type="text" class="form-control" name="edicao" required id="edicao">
					</div>

					<br>

					<div class="form-group">
						<label for="txtdisponivel">O livro esta disponivel? (digite 1 - para sim, ou, 0 - para não) </label>
						<input type="number" class="form-control" name="disponivel" required id="disponivel">
					</div>

					<br>

					<div class="form-group">
						<label for="txtexemplar">Exemplar</label>
						<input type="number" class="form-control" name="exemplar" required id="exemplar">
					</div>

					<br>

					<div class="form-group">
						<label for="txtautor">Autor</label>
						<input type="text" class="form-control" name="autor" required id="autor">
					</div>

					<br>

					<div class="form-group">
						<label for="txteditora">Editora</label>
						<input type="text" class="form-control" name="editora" required id="editora">
					</div>

					<br>

					<div class="form-group">
						<label for="txtprocedencia">Procedencia</label>
						<input type="text" class="form-control" name="procedencia" required id="procedencia">
					</div>

					<br>

					<div class="form-group">
						<label for="txtcutter">Cutter</label>
						<input type="text" class="form-control" name="cutter" required id="cutter">
					</div>

					<br>

					<div class="form-group">
						<label for="txtanopublicacao">Ano de Publicação</label>
						<input type="number" class="form-control" name="ano_publicacao" required id="ano_publicacao">
					</div>

					<br>

					<div class="form-group">
						<label for="txtisbn">ISBN</label>
						<input name="isbn" type="text" class="form-control" required id="isbn">
					</div>

					<br>

					<div class="form-group">
						<label for="txtfoto1">Capa do livro</label>
						<input type="file" accept="image/*" class="form-control" name="txtfoto1" required id="txtfoto1">
					</div>

					<br>

					<div class="form-group">
						<label for="sltcat">Categoria</label>
						<select class="form-control" name="sltcat">
							<option value="">Selecione</option>
							<?php while ($listaCat = $consultaCat->fetch(PDO::FETCH_ASSOC)) { ?>
								<option value="<?php echo $listaCat['id'] ?>"><?php echo $listaCat['categoria'] ?></option>
							<?php } ?>
						</select>
					</div>

					<br>

					<div class="form-group">
						<label for="txtsinopse">Sinopse da obra</label>
						<textarea rows="5" class="form-control" name="sinopse" required id="isbn"></textarea>
					</div>

					<br>

					<button type="submit" class="btn btn-lg btn-primary"> Cadastrar </button>

					<br>
					<br>

				</form>
			</div>
		</div>

	</div>

	<?php include 'footer.php'; ?>

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