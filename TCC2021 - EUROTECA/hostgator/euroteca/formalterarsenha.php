<!DOCTYPE html>
<html lang="pt-br">
<link href="assets/img/favicon.png" rel="icon">

<?php
include 'conexao.php';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>redefinir a senha</title>
</head>


<body>

  <main class="login">
    <div class="login__container">
      <h1 class="login__title">CRIE UMA NOVA SENHA</h1>
      <form name="frmusuario" method="post" class="login__form" action="alterarsenha.php">

        <input class="login__input" type="email" placeholder="e-mail" name="txtemail" />
        <span class="login__input-border"></span>

        <input class="login__input" type="password" placeholder="senha" name="txtsenha" />
        <span class="login__input-border"></span>

        <input class="login__input" type="password" placeholder="confirmar senha" name="txtsenha" />
        <span class="login__input-border"></span>

        <button class="login__submit">REDEFINIR</button>

        <a class="login__reset" align="justify"> A senha não poderá ser 123, caso coloque no proximo login irá pedir para redefinir novamente </a>
      </form>
    </div>
  </main>
</body>

</html>