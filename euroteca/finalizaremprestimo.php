<?php
session_start(); // iniciando a sessão, pois precisamos pegar o id do usuario logado para salvar na tabela de vendas no campo id_aluno 
include 'includes/conexao.php';

$id_aluno = $_SESSION['ID'];  //recebendo o codigo do usuário logado, nesta pagina o usuario ja esta logado pois, em do carrinho de compra
$numero_ticket = uniqid();  // gerando um ticket com função uniqid(); 	gera um id unico    
$data_emprestimo = date('d/m/y');  // variavel que vai pegar a data do dia (dia mes ano -padrão do brasil)
$data_entrega = date('d/m/y', strtotime('+15 days'));

//// criando um loop para sessão estante q recebe o $cd e a quantidade
foreach ($_SESSION['estante'] as $id_livro => $qnt)  {

	$atualizar= $cn->query("UPDATE tab_livros SET disponivel = 0 WHERE tombo = '$id_livro'");


	$inserir = $cn->query("INSERT INTO tab_emprestimos(id_aluno, id_livro, numero_ticket, data_emprestimo, data_entrega)  VALUES
	('$id_aluno','$id_livro','$numero_ticket','$data_emprestimo','$data_entrega')");
	
}

include 'includes/fim.php';

?>
