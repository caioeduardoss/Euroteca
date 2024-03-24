<?php

include 'conexao.php';
include 'resize_class.php';


//variáveis que vão receber os dados do formulário que esta na pagina formProduto
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$volume = $_POST['volume'];
$edicao = $_POST['edicao'];
$disponivel = $_POST['disponivel'];
$exemplar = $_POST['exemplar'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$procedencia = $_POST['procedencia'];
$cutter = $_POST['cutter'];
$ano_publicacao = $_POST['ano_publicacao'];
$isbn = $_POST['isbn'];
$id_categoria = $_POST['sltcat'];  // recebendo o valor do campo select, valor numérico
$sinopse = $_POST['sinopse'];

$recebe_foto1 = $_FILES['txtfoto1'];

$destino = "assets/img/livros/";  // informando para qual diretorio será enviado a imagem

//gerando numero aleatorio para imagem
// preg_match vai pegar imagens nas extensões jpg|jpeg|png|gif
// do nome que esta na variavel $recebe_foto1 do parametro name e a $extensão vai receber o formato
preg_match("/\.(jpg|jpeg|png|gif){1}$/i", $recebe_foto1['name'], $extencao1);

// a função md5 vai gerar um valor randomico  com base no horario "time"
// incrementar o ponto e a extensão
// função md5 é criado para gerar criptografia
$img_nome1 = md5(uniqid(time())) . "." . $extencao1[1];

try {  // tentar para tentar inserir

	$inserir = $cn->query("INSERT INTO tab_livros(titulo, subtitulo, volume, edicao, disponivel, exemplar, autor, editora, procedencia, cutter, ano_publicacao, isbn, capa, id_categoria, sinopse) VALUES ('$titulo', '$subtitulo', '$volume', '$edicao', '$disponivel', '$exemplar', '$autor', '$editora', '$procedencia', '$cutter', '$ano_publicacao', '$isbn', '$img_nome1', '$id_categoria', '$sinopse')");

	move_uploaded_file($recebe_foto1['tmp_name'], $destino . $img_nome1);
	$resizeObj = new resize($destino . $img_nome1);
	$resizeObj->resizeImage(325, 499, 'crop');
	$resizeObj->saveImage($destino . $img_nome1, 100);

	header('Location:acervo.php');
} catch (PDOException $e) {  // se houver algum erro explodir na tela a mensagem de erro


	echo $e->getMessage();
}
