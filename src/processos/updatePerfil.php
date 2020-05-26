<?php
    // require_once('../banco/conexao.php');
    // require_once('../banco/includes/security.php');

    // session_start();

    // if (!isset($_SESSION['logado'])) {
    //     header("Location: ../index.php");
    // }

    // $id = $_SESSION['logado'];
    // $sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
    // $dados = mysqli_fetch_array($sql);  

    // $nome = security($_POST['nome']);
    // $classe = security($_POST['classe']);
    // $raca = security($_POST['raca']);
    // $descicao = security($_POST['descricao']);
    // $personagem = security($_POST['personagem']);

    
    header('Location: ../Perfil-user.php');
?> 