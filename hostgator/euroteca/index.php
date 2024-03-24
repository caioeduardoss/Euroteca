<!DOCTYPE html>
<html lang="pt-br">

<?php
session_start();
include 'conexao.php';
include 'head.php';
include 'cabecario.php';
?>

<body>

  <!--  Inicio Inicio  -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Confira todos os livros disponíveis em nossa plataforma!</h1>
            <h2>Milhares de títulos técnicos, acadêmicos e científicos de diversas áreas do conhecimento.</h2>
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

  <!-- Inicio Sobre  -->

  <section id="sobre" class="sobre">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h1>Sobre o site</h1>
        <p>Tudo que você precisa saber sobre...</p>
        <br>
        <br>
      </header>

      <div class="row">

        <div class="col-lg-4">
          <div class="box" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/1.png" class="img-fluid" alt="">
            <h3>O login</h3>
            <p>O aluno pode entrar no site usando seu email institucional e seu RM como senha. Somente com o login ele consegue
              reservar o livro de seu interesse.
            </p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/2.png" class="img-fluid" alt="">
            <h3>O acervo</h3>
            <p>No nosso acervo é possivel consultar os livros disponiveis na biblioteca sem precisar de login. Já para reservar um livro, é preciso uma conta.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="assets/img/3.png" class="img-fluid" alt="">
            <h3>E sobre nós</h3>
            <p>O site tem como objetivo facilitar a interação escola e aluno, dar um upgrade nas tarefas realizadas pelo bibliotecário.
              que explanou as dificuldades atuais.
            </p>
          </div>
        </div>

      </div>

    </div>
    <br>
    <br>
  </section>
  <!-- Fim Sobre -->



  <!-- Acervo -->
  <section id="acervo" class="acervo">
    <div class="container" data-aos="zoom-in">

      <div class="row">
        <div class="col-lg-9 text-center text-lg-start">
          <h3>Nosso Acervo</h3>
          <p> Confira todos os livros disponíveis em nossa plataforma!.
            Milhares de títulos técnicos, acadêmicos e científicos de diversas áreas do conhecimento.
          </p>
        </div>
        <div class="col-lg-3 acervo-btn-container text-center">
          <a class="acervo-btn align-middle" href="acervo.php">Acervo</a>
        </div>
      </div>

    </div>
  </section>
  <!-- Acervo -->

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