<!DOCTYPE html>
<html lang="pt-br">
<link href="assets/img/favicon.png" rel="icon">

<meta charset="utf-8">
<title>ADM - PAINEL</title>

<?php
session_start();
// se a sessão id estiver vazia ou se a sessão tipo for diferente de adm entao execute
if (empty($_SESSION['tipo']) || $_SESSION['tipo'] != 1) {
  header('location:../index.php');  // redireciona para página index.php
}

include '../includes/conexao.php';

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script defer src="./script.js"></script>
  <title>Painel Administrativo</title>
</head>

<body>
  <main class="login">
    <div class="login__container">
      <h1 class="login__title">Painel Adminstrativo</h1>
      <form class="login__form">
        <a href="../administrador/inserir.php" class="login__input">INSERIR</a>
        <br>
        <a href="../administrador/lista.php" class="login__input">ALTERAR/EXCLUIR</a>
        <br>
        <a href="../administrador/emprestimos.php" class="login__input">EMPRÉSTIMOS</a>
        <br>
        <a href="../index.php" class="login__input">VOLTAR AO SITE</a>
      </form>
    </div>
  </main>
</body>

</html>