<!doctype html>
<html lang="pt-br">

<?php
include 'conexao.php';
include 'head.php';
include 'cabecario.php';

?>

<body>
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

    <div class="container">
    <div class="row justify-content-center" style="margin-top: 15px;">
        <br>
        <br>
                <h2>
                    <p>Empréstimo efetuado com sucesso!! Retire agora o livro na biblioteca com o seu numero de registro.</p>

                    <p>DATA DE EMPRÉSTIMO: <?php echo $data_emprestimo; ?></p>

                    <p>DATA DA DEVOLUÇÃO: <?php echo $data_entrega; ?></p>

                    <p> Seu número de registro é: <?php echo $numero_ticket; ?></p>
                </h2>
                <br>
                <h4>
                    <p> OBSERVAÇÃO: se a data de devolução cair em um dia não util, o vencimento contará apenas a partir do primeiro dia util após o vencimento</p>
                </h4>
            </div>
        </div>
        <br>
        <br>
</div>
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