<?php
include '../includes/conexao.php';  // incluindo a conexao

$Vemail = $_POST['txtemail'];
$Vsenha = $_POST['txtsenha'];

try {
	// comando update para realizar as trocas
	$alterar = $cn->query("UPDATE tab_usuarios SET  

	senha ='$Vsenha'
    
	WHERE email='$Vemail'"); // as alterações serão feitas baseadas pelo codigo que recebemos
	header('location:../areauser.php');  // redirecionando para a pagina menu principal (se tudo der certo)
	
} catch(PDOException $e) {  // se exsitir algum problema, será gerado uma mensagem de erro
	
	
	echo $e->getMessage();  
	
}
