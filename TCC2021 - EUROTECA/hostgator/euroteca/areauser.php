<!doctype html>
<html lang="pt-br">

<?php
session_start();
if (empty($_SESSION['ID'])) {
  header("location:login.php");
}
include 'conexao.php';
include 'head.php';
include 'cabecario.php';

$id_usuario = $_SESSION['ID'];

$consultaemprestimo = $cn->query("SELECT * FROM view_emprestimo WHERE id_aluno = '$id_usuario'");
$consultausuario = $cn->query("SELECT * FROM tab_usuarios WHERE id='$id_usuario'");
$exibeusuario = $consultausuario->fetch(PDO::FETCH_ASSOC);

?>


<!--  Inicio Inicio  -->
<section id="hero">

  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
        <div data-aos="zoom-out">
          <h1>Grande acervo no sistema</h1>
          <h2>Veja todos nossos livros na nossa plataforma</h29>
            <div class="text-center text-lg-start">
              <a href="#sobre" class="btn-get-started scrollto">Saiba Mais</a>
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

<body>
  <br>
  <br>
  <div class="container">
	<div class="row justify-content-center">

  <div class="col-sm-4 col-sm-offset-1">
				<img src="assets/img/alunos/<?php echo $exibeusuario['foto']; ?>" class="img-responsive" style="width:50%;">
			</div>

			<div class="col-sm-7">
				<h1><?php echo $exibeusuario['nome']; ?></h1>
				<?php echo $exibeusuario['email']; ?>
				<br>

				<b>RM: </b><?php echo $exibeusuario['rm']; ?>
				<br>
				<b>SÉRIE: </b><?php echo $exibeusuario['serie']; ?>
				<br>
				<b>CURSO: </b><?php echo $exibeusuario['curso']; ?>
				<br>
				<b>PERIODO: </b><?php echo $exibeusuario['periodo']; ?>
				<br>
				<br>

    <div class="row">
      <div class="col-sm-5"><b> Livro </b></div>
      <div class="col-sm-3"><b> Ticket </b></div>
      <div class="col-sm-2"><b> Emprestimo </b></div>
      <div class="col-sm-2"><b> Devolução </b></div>
    </div>


    <?php while ($exibeemprestimo = $consultaemprestimo->fetch(PDO::FETCH_ASSOC)) { ?>
      <div class="row">
        <div class="col-sm-5"><?php echo $exibeemprestimo['titulo']; ?></div>
        <div class="col-sm-3"><?php echo $exibeemprestimo['numero_ticket']; ?></div>
        <div class="col-sm-2"><?php echo $exibeemprestimo['data_emprestimo']=date('d/m/y'); ?></div>
        <div class="col-sm-2"><?php echo $exibeemprestimo['data_entrega']=date('d/m/y', strtotime('+15 days')); ?></div>
    </div>

      <?php } ?>

      </div>

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