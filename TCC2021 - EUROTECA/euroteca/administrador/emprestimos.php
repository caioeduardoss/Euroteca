<!doctype html>
<html lang="pt-br">

<meta charset="utf-8">
<title>ADM - EMPRESTIMOS</title>

<?php
session_start();
// se a sessão id estiver vazia ou se a sessão tipo for diferente de adm entao execute
if (empty($_SESSION['tipo']) || $_SESSION['tipo'] != 1) {
    header('location:../index.php');  // redireciona para página index.php
}

include '../includes/conexao.php';
include '../includes/head.php';
include '../includes/cabecario.php';

// Consultar no banco de dados
$consulta = $cn->query("SELECT * FROM view_emprestimo ORDER BY id DESC");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

$data_emprestimo = date('d/m/y');  // variavel que vai pegar a data do dia (dia mes ano -padrão do brasil)
$data_entrega = date('d/m/y', strtotime('+15 days'));

?>

<body>
    <!--  Inicio Inicio  -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>LISTA DE EMPRÉSTIMOS DE LIVROS</h1>
                        <h2>Lista com todos os emprestimos de livros feito pelos alunos.</h29>
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

    <!-- Verificar se encontrou resultado na view emprestimo -->

        <div class="container">
            <div class="row justify-content-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Aluno</th>
                            <th scope="col">Livro</th>
                            <th scope="col">Numero do ticket</th>
                            <th scope="col">Data de empréstimo</th>
                            <th scope="col">Data de entrega</th>
                        </tr>
                    </thead>
                    <?php
    while ($row_usuario = $consulta->fetch(PDO::FETCH_ASSOC)) {
    ?>
                    <tbody>
                            <tr>
                                <th scope="row"><?php echo $row_usuario['id']; ?></th>
                                <td><?php echo $row_usuario['nome']; ?></td>
                                <td><?php echo $row_usuario['titulo']; ?></td>
                                <td><?php echo $row_usuario['numero_ticket']; ?></td>
                                <td><?php echo $row_usuario['data_emprestimo']=date('d/m/y'); ?></td>
                                <td><?php echo $row_usuario['data_entrega']=date('d/m/y', strtotime('+15 days')); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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