<!doctype html>
<html>

<meta charset="utf-8">

<title>ADM - ALTERAR</title>

<?php

session_start();

// se a sessão id estiver vazia ou se a sessão tipo for diferente de adm entao execute
if (empty($_SESSION['tipo']) || $_SESSION['tipo'] != 1) {
	header('location:../index.php');  // redireciona para página index.php
}

// recuperando os ids que foram enviados pela pagina listaphp	
$cd = $_GET['id'];
$cd2 = $_GET['id2'];

include '../includes/conexao.php';
include '../includes/head.php';
include '../includes/cabecario.php';

$consulta = $cn->query("SELECT * FROM tab_livros WHERE tombo='$cd'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

$consultaCat = $cn->query("SELECT id, categoria FROM tab_categorias where id='$cd2' union select id, categoria FROM tab_categorias where id !='$cd2'");

?>

<body>
	<!--  Inicio Inicio  -->
	<section id="hero">

		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
					<div data-aos="zoom-out">
						<h1>ALTERAR/EXCLUIR LIVROS</h1>
						<h2>Altere ou exclua os livros facilmente na nossa plataforma.</h29>
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

	<div class="container">
		<div class="row justify-content-center">

			<div class="col-sm-4 col-sm-offset-4">

				<h2>Alteração de produto</h2>

				<form method="post" action="alterar.php?cd_altera=<?php echo $cd; ?>" name="incluiProd" enctype="multipart/form-data">

					<div class="form-group">
						<label for="titulo">Titulo</label>
						<input type="text" name="titulo" value="<?php echo $exibe['titulo']; ?>" class="form-control" required id="titulo">
					</div>

					<br>

					<div class="form-group">
						<label for="subtitulo">Subtitulo</label>
						<input type="text" name="subtitulo" value="<?php echo $exibe['subtitulo']; ?>" class="form-control" required id="subtitulo">
					</div>

					<br>

					<div class="form-group">
						<label for="volume">Volume</label>
						<input type="number" name="volume" value="<?php echo $exibe['volume']; ?>" class="form-control" required id="volume">
					</div>

					<br>

					<div class="form-group">
						<label for="txtedicao">Edição</label>
						<input type="text" name="edicao" value="<?php echo $exibe['edicao']; ?>" class="form-control" required id="txtedicao">
					</div>

					<br>

					<div class="form-group">
						<label for="txtdisponivel">Disponivel? 1-Sim 0-Não</label>
						<input type="number" name="disponivel" value="<?php echo $exibe['disponivel']; ?>" class="form-control" required id="txtdisponivelo">
					</div>

					<br>

					<div class="form-group">
						<label for="txtexemplar">Exemplar</label>
						<input type="number" name="exemplar" value="<?php echo $exibe['exemplar']; ?>" class="form-control" required id="txtexemplar">
					</div>

					<br>

					<div class="form-group">
						<label for="txtautor">Autor</label>
						<input type="text" name="autor" value="<?php echo $exibe['autor']; ?>" class="form-control" required id="txtautor">
					</div>

					<br>

					<div class="form-group">
						<label for="txteditora">Editora</label>
						<input type="text" name="editora" value="<?php echo $exibe['editora']; ?>" class="form-control" required id="txteditora">
					</div>

					<br>

					<div class="form-group">
						<label for="txtprocedencia">Procedencia</label>
						<input type="text" name="procedencia" value="<?php echo $exibe['procedencia']; ?>" class="form-control" required id="txtprocedencia">
					</div>

					<br>

					<div class="form-group">
						<label for="txtcutter">Cutter</label>
						<input type="text" name="cutter" value="<?php echo $exibe['cutter']; ?>" class="form-control" required id="txtprocedencia">
					</div>

					<br>

					<div class="form-group">
						<label for="txtanopub">Ano de Publicação</label>
						<input type="number" name="ano_publicacao" value="<?php echo $exibe['ano_publicacao']; ?>" class="form-control" required id="txtanopub">
					</div>

					<br>

					<div class="form-group">
						<label for="txtisbn">ISBN</label>
						<input type="txt" name="isbn" value="<?php echo $exibe['isbn']; ?>" class="form-control" required id="txtisbn">
					</div>

					<br>

					<div class="form-group">
						<label for="sltcat">Categoria</label>
						<select class="form-control" name="sltcat">
							<?php while ($exibecat = $consultaCat->fetch(PDO::FETCH_ASSOC)) { ?>
								<option value="<?php echo $exibecat['id']; ?>"> <?php echo $exibecat['categoria']; ?> </option>;
							<?php }	?>
						</select>
					</div>

					<br>

					<div class="form-group">
						<label for="txtsinopse">Sinopse da obra</label>
						<textarea rows="5" class="form-control" name="sinopse"><?php echo $exibe['sinopse']; ?></textarea>
					</div>

					<br>

					<div class="form-group">
						<label for="txtfoto1">Capa do livro</label>
						<input type="file" accept="image/*" class="form-control" name="txtfoto1" id="foto1">
					</div>

					<div class="form-group">
						<img src="/euroteca/assets/img/livros/<?php echo $exibe['capa']; ?>" width="100px">
					</div>

			</div>

			<br>
			<button type="submit" class="btn btn-lg btn-light">
				<span class="bi bi-pencil"> Alterar </span>
			</button>
			</form>
		</div>
	</div>

	<br>
	<br>

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