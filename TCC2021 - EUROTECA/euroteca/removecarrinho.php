<?php
include ('includes/conexao.php');
    session_start();
    $tombo = $_GET('tombo');
    unset($_SESSION['estante'][$tombo]);

    header('location:estante.php');
?>