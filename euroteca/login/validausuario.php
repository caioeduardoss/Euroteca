<html>
<?php
include '../includes/conexao.php';

session_start(); // iniciando uma sessão

$Vemail = $_POST['txtemail'];
$Vsenha = $_POST['txtsenha'];

echo $Vemail, $Vsenha;
$consulta = $cn->query("SELECT id, nome, email, rm, senha, tipo FROM tab_usuarios WHERE email = '$Vemail' AND senha = '$Vsenha'");

if($consulta->rowCount() == 1) {
    $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
   
    if($exibeUsuario['tipo'] == 0) {
        if ($exibeUsuario['senha'] == '123'){
            $_SESSION['ID'] = $exibeUsuario['id'];
            $_SESSION['tipo']=0;
            header('location:formalterarsenha.php');
        } 
        else {
            $_SESSION['ID'] = $exibeUsuario['id'];
            $_SESSION['tipo']=0;
            header('location:../areauser.php');
        }
    } else {
        $_SESSION['ID'] = $exibeUsuario['id'];
        $_SESSION['tipo']=1;
        header('location:../index.php');
    }
} else {
    header('location:erro.php');
}
?>
</html>