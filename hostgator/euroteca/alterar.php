<?php
include 'conexao.php';  // incluindo a conexao
include 'resize_class.php'; // classe para redimensionar imagem

$tombo = $_GET['cd_altera'];  // variavel recebe o código do livro que acabamos de receber do formulário

// abaixo criando a consulta pelo codigo do livro que recebemos acima
$consulta = $cn->query("SELECT capa FROM tab_livros WHERE tombo=".$tombo); 

//criando uma array 
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

// todas as laterações feitas nos campos serão salvas nas variaveis abaixo

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
$id_categoria = $_POST['sltcat'];
$sinopse = $_POST['sinopse'];

$recebe_foto1 = $_FILES['txtfoto1'];  // recebendo conteudo do campo file

$destino = "=assets/img/livros/";  //pasta aonde será feito upload da imagem

if (!empty($recebe_foto1['name'])) { // se a propriedade name[propriedade que pega o nome da imagem ] não estiver vazia faça

	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao1); // pegar extensão
	$img_nome1 = md5(uniqid(time())).".".$extencao1[1]; //gerar nome unico para img, enviar esta variável

	$upload_foto1=1; // se variavel criada for 1 precisará trocar imagem

}

else {  // caso não haja alteração na imagem, pegar o nome da imagem que está no banco
	
	$img_nome1=$exibe['capa'];
	$upload_foto1=0;  // zero pq não fará atualização de fotos
	
}
	
try {
	// comando update para realizar as trocas
	$alterar = $cn->query("UPDATE tab_livros SET  

	titulo = '$titulo',
    subtitulo = '$subtitulo',
    volume = $volume,
    edicao = '$edicao',
    disponivel = $disponivel,
    exemplar = '$exemplar',
    autor = '$autor',
    editora = '$editora',
    procedencia = '$procedencia',
    cutter = '$cutter',
    ano_publicacao = '$ano_publicacao',
    isbn = '$isbn',
	capa = '$img_nome1',
    id_categoria = '$id_categoria',
    sinopse = '$sinopse'
	
	WHERE tombo=".$tombo); // as alterações serão feitas baseadas pelo codigo que recebemos
	
	if ($upload_foto1==1) {  // se a foto1 for igual a 1 é pq foi feito alteração será feita
		
		move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);             
		$resizeObj = new resize($destino.$img_nome1);
		$resizeObj -> resizeImage(325, 499, 'crop');
		$resizeObj -> saveImage($destino.$img_nome1, 100);
		
	}
	
	header('location:acervo.php');  // redirecionando para a pagina menu principal (se tudo der certo)
	
} catch(PDOException $e) {  // se exsitir algum problema, será gerado uma mensagem de erro
	
	
	echo $e->getMessage();  
	
}
