<div class="container">
    <br>
    <br>
	<div class="row text-center" style="margin-top: 15px;">
		<h1>SUA ESTANTE</h1>
	</div>
	
	<?php
	$total = null; // variavel total que recebe valor nulo

	if(!isset($_SESSION['estante'])){
		$_SESSION['estante'] = array();
	}
	
    // criando um loop para sessão estante recebe o $cd e a quantidade
    foreach ($_SESSION['estante'] as $tombo => $qnt)  {
    $consulta = $cn->query("SELECT * FROM tab_livros WHERE tombo='$tombo'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    $livro = $exibe['titulo'];  // variável que recebe o livro

	?>
	
	<div class="container-fluid">

	<div class="row justify-content-center" style="margin-top: 15px;">
			
		<div class="col-sm-2 col-sm-offset-2">
        <img src="assets/img/livros/<?php echo $exibe['capa']; ?>" style="width: 120px; height: 140px; object-fit: contain;">
		</div>
		
		<div class="col-sm-4">
			<h4 style="padding-top:20px"><?php echo $livro; ?></h4>
		</div>	
		
		<div class="col-sm-2" style="padding-top:20px">
			<h4><?php echo $qnt; ?> </h4>
		</div>
		
		<div class="col-sm-1 col-xs-offset-right-1" style="padding-top:20px">
		
		<!--remove o item da estante pelo tombo -->
		<a href="removecarrinho.php?tombo=<?php echo $tombo;?>">	
		<button class="btn btn-lg btn-block btn-danger">
		<span class="bi bi-archive"></span>		
		</button>
			</a>
		</div> 
				
	</div>	
	
	
	<?php } ?>