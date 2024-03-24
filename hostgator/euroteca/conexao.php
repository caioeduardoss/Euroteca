<?php
    
// $servidor = "localhost";
//   $usuario = "usuario";
//    $senha = "Euroalbinodesouza@2021";
  //  $banco = "eurote42_tcc";

    //try {
    
    //$cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha,
    //array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); // coloca o banco de dados em utf8
    //$cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//} catch(PDOException $e) {
  //  echo 'ERROR: ' . $e->getMessage();
//}
    $servidor = "eurote42tcc.mysql.database.azure.com";
    $usuario = "usuario@eurote42tcc";
    $senha = "Euroalbinodesouza@2021";
    $banco = "eurote42_tcc";

    try {
    
    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); // coloca o banco de dados em utf8
    $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>


