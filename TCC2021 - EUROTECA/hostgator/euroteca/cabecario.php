       <?php
       include 'conexao.php';

        function active($currect_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);  
        if($currect_page == $url){
        echo 'active'; //class name in css 
            } 
        }
        ?>

<!-- Inicio Cabeçario  -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">

        <ul> 
          <li><a class="<?php active('index.php');?>" href="index.php">Inicio</a></li>
          <li><a class="<?php active('sobre.php');?>" href="sobre.php">Sobre</a></li>
          <li><a class="<?php active('acervo.php');?>" href="acervo.php">Acervo</a></li>
          <li><a class="nav-link scrollto" href="#contato">Contato</a></li> 
          <li><a class="<?php active('estante.php');?>" href="estante.php"><span class="bi bi-collection"></span> Estante</a></li> 

          <?php if(empty($_SESSION['ID'])) { ?>
          <li><a href="login.php"><span class="bi bi-box-arrow-in-right"></span> Login</a></li>
          <?php } else {

            if($_SESSION['tipo'] == 0) {
            $consulta_usuario = $cn->query("SELECT nome FROM tab_usuarios WHERE id = '$_SESSION[ID]'");
            $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
          ?>
          <li><a href="areauser.php" class="bi bi-person-badge"><?php echo $exibe_usuario['nome']; ?> </a></li>
          <li><a href="sair.php" class="bi bi-box-arrow-left">   Sair </a></li>
          
          <?php } else { ?>
            <li><a href="painel.php"><button class="btn btn-sm btn-danger"> ADMINISTRADOR </button></a></li>
            <li><a href="sair.php" class="bi bi-box-arrow-left"> Sair </a></li>
      
          <?php } } ?>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <!-- Fim Cabeçario -->