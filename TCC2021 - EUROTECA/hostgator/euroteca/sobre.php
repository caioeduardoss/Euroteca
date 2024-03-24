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
  <br>
  <br>
  <!-- Inicio Detalhes -->

  <section id="details" class="details">
    <div class="container">
      <header class="section-header">
        <center>
          <h1>Nosso Site</h1>
          <p>Entenda mais sobre o site.</p>
        </center>


      </header>

      <div class="row content">
        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
          <img src="assets/img/detalhes1.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
          <h3>A Criação do Site</h3>
          <p>
            A Euroteca é a criação de: Caio Eduardo, Lívia Albino, Naiely Gabrielle, Stéphany Ferro e Vitor Marcelo.
            A ideia surgiu na escola, de criar uma plataforma que auxiliará a biblioteca, no qual reúne um vasto acervo de livros,
            com milhares de títulos técnicos, acadêmicos e científicos.
          </p>
          <p>
            O site tem como objetivo facilitar a interação escola e aluno, dar um upgrade nas tarefas realizadas pelo bibliotecário, que explanou as dificuldades com o programa atual, dando assim o gatilho a um futuro projeto.
          </p>

        </div>
      </div>

      <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5" data-aos="fade-up">
          <h3>Seu Objetivo</h3>
          <p>Isso facilitará e auxiliará a busca de exemplares disponíveis na biblioteca, como também o aluguel dos mesmos.</p>
          <p>
            O ponto de partida do projeto deu-se por meio de pesquisas realizadas com alunos,
            que apontaram para a demora em fila para alugar um exemplar.
            Desse modo, elaboramos uma ferramenta para agilizar o atendimento e levar os alunos a terem uma experiência mais dinâmica.</p>

        </div>
      </div>

    </div>
  </section>
  <!-- Fim detalhes -->
  <br>
  <br>
  <!-- ======= Team Section ======= -->
  <section id="details" class="details">
    <div class="container">
      <header class="section-header">
        <center>
          <h1>Nossa Equipe</h1>
          <p>Conheça mais sobre a equipe responsável pela criação do site.</p>
        </center>


      </header>

      <div class="row content">
        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
          <img src="assets/img/time/1.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
          <h3>Caio Eduardo</h3>
          <p>
            Prazer, Caio Eduardo!
          </p>
          <p>
            Fui responsável pelo banco de dados, sua criação e manuseio. Também fui responsável por grande parte
            da programação
          </p>
          <p>"Todo mundo deveria ser aplaudido de pé pelo menos uma vez na vida, porque todos nós vencemos o mundo"</p>
          <p>- R.J Palacio</p>

        </div>
      </div>

      <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
          <img src="assets/img/time/5.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5" data-aos="fade-up">
          <h3>Lívia Albino</h3>
          <p>Olá, sou a Lívia Albino.</p>
          <p>
            Fiquei responsável pelo design do site junto com a Stéphany, axiliei na busca de informações dos livros.</p>
            <p>"Não é nada como a respiração profunda depois de uma gargalhada. Nada no mundo se compara com á barriga dolorida
            pelas razões certas."</p>
          <p>- Stephen Chbosky</p>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
          <img src="assets/img/time/2.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
          <h3>Naiély Gabrielle</h3>
          <p>
            Olá, eu sou a Naiély!
          </p>
          <p>
            Fui responsável por liderar a equipe e ao mesmo tempo organizar todo roteiro e desenvolvimento do projeto,
            e cuidei principalmente da área da documentação/monografia do mesmo.
          </p>
          <p>"Não será facil. E teremos de nos empenhar a cada dia. Mas quero fazer isso porque te quero. Quero tudo de ti, para 
          sempre, você e eu. A cada dia."</p>
          <p>- Nicholas Sparks</p>

        </div>
      </div>

      <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
          <img src="assets/img/time/3.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5" data-aos="fade-up">
          <h3>Stéphany Ferro</h3>
          <p>Meu nome é Stephany Ferro.</p>
          <p>
            Responsável por criar toda a estética ultilizada no site. Ela definiu as cores ultilizadas, produziu a logo e elaborou o
            protótipo da criação do sistema online.</p>
            <p>"Cada qual sabe amar seu modo, o mode pouca importa, o essencial, é que saiba como amar."</p>
          <p>- Machado de Assis</p>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
          <img src="assets/img/time/4.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
          <h3>Vitor Marcelo</h3>
          <p>
            Prazer meu nome é Vitor!
          </p>
          <p>
            Fui responsável pela criação do site, sua estrutura basica, seu design, algumas de suas funcionalidades. Além de auxiliar 
            o Caio com alguns códigos relacionados ao banco de dados.
          </p>
          <p>"É preciso que eu suporte duas ou três larvar se quiser conhecer as borboletas."</p>
          <p>- Antoine de Saint-Exupéry</p>
        </div>
      </div>

    </div>
  </section>
  <!-- End Team Section -->
  <br>
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