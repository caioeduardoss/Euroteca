<!DOCTYPE html>
<html lang="pt-br">

<?php
session_start();
include 'includes/conexao.php';
include 'includes/head.php';
include 'includes/cabecario.php';

// Variavel consulta vai receber variavel $cn que receberá o resultado de uma query
$consulta = $cn->query('SELECT tombo, titulo, subtitulo, capa, disponivel FROM view_livro ORDER BY tombo');

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


  <!-- Page Features -->

  <div class="container">
    <br>
    <br>

    <button type="button" class="btn btn-info"><a href="acervo.php">Todos</a></button>
    <button type="button" class="btn btn-light"><a href="categorias.php?cat=infanto-juvenil">Infanto-juvenil</a></button>
    <button type="button" class="btn btn-info"><a href="categorias.php?cat=ficção">Ficção</a></button>
    <button type="button" class="btn btn-light"><a href="categorias.php?cat=literatura brasileira">Lieratura-brasileira</a></button>
    <button type="button" class="btn btn-info"><a href="categorias.php?cat=aprendizagens">Aprendizagens</a></button>
    <button type="button" class="btn btn-light"><a href="categorias.php?cat=suspense">Suspense</a></button>
    <button type="button" class="btn btn-info"><a href="categorias.php?cat=romance">Romance</a></button>

    <br>
    <br>

    <div class="row">
      <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
            <img class="card-img-top" src="assets/img/livros/<?php echo $exibe['capa']; ?>" class="img-fluid" style="width:100%">
            <div class="card-body">
              <h5>
                <p class="card-title"><?php echo $exibe['titulo']; ?>
              </h5>
              </p>
              <p align="justify" class="card-text"><?php echo $exibe['subtitulo']; ?></p>
            </div>
            <div class="card-footer">
              <a href="info.php?tombo=<?php echo $exibe['tombo']; ?>">
                <button class="btn btn-primary">
                  <span class="bi bi-info-circle"> INFO</span>
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

            </div>
          </div>
        </div>
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