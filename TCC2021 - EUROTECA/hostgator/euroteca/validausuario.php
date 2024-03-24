<html>
<body>
<?php
session_start(); // iniciando uma sessão
include 'conexao.php';

$Vemail = $_POST['txtemail'];
$Vsenha = $_POST['txtsenha'];

$consulta = $cn->query("SELECT id, nome, email, rm, senha, tipo FROM tab_usuarios WHERE email = '$Vemail' AND senha = '$Vsenha'");

if($consulta->rowCount() == 1) {
    $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
   
    if($exibeUsuario['tipo'] == 0) {
        if ($exibeUsuario['senha'] == '123'){
            $_SESSION['ID'] = $exibeUsuario['id'];
            $_SESSION['tipo']=0;
            header('location:/~eurote42/formalterarsenha.php');
        } 
        else {
            $_SESSION['ID'] = $exibeUsuario['id'];
            $_SESSION['tipo']=0;
            header('location:/~eurote42/areauser.php');
        }
    } else {
        $_SESSION['ID'] = $exibeUsuario['id'];
        $_SESSION['tipo']=1;
        header('location:/~eurote42/index.php');
    }
} else {
    header('location:/~eurote42/erro.php');
}
?>
</body>
</html>