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
  <title>Login</title>
</head>


<body>
  
  <main class="login">
    <div class="login__container">
      <h1 class="login__title">Login</h1>
      <form name="frmusuario" method="post" class="login__form" action="validausuario.php">

        <input class="login__input" type="email" placeholder="e-mail" name="txtemail"/>
        <span class="login__input-border"></span>

        <input class="login__input" type="password" placeholder="senha" name="txtsenha"/>
        <span class="login__input-border"></span>

        <button class="login__submit">Login</button>
        
        <a class="login__reset" align="justify"> Como primeiro login, use: seurm@etec.sp.gov.br (ex: 19099@etec.sp.gov.br) e a senha como padrão use: 123 (após o login será possivel redefinir a senha). O login é valido apenas para alunos da ETEC Euro Albino de Souza. </a>
      </form>
    </div>
  </main>
</body>