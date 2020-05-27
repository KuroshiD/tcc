<?php
    // require_once('../banco/conexao.php');
    // require_once('../banco/includes/security.php');

    session_start();

    if (!isset($_SESSION['logado'])) {
        header("Location: ../index.php");
    }
    $id = $_SESSION['logado'];
    $sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
    $dados = mysqli_fetch_array($sql);  
    if($dados['last_update'] == null){
        $timestamp = new DateTime();
        $data = $timestamp -> format('Y-m-d');
        $update_date = mysqli_query($con, "UPDATE tb_usuario SET last_update = '$data' WHERE id = '".$dados['id']."'");
        print "fizz isso";
    }else {
        print "nao fiz isso";
    }
    // $nome = security($_POST['nome']);
    // $classe = security($_POST['classe']);
    // $raca = security($_POST['raca']);
    // $descicao = security($_POST['descricao']);
    // $personagem = security($_POST['personagem']);

    
     //header('Location: ../Perfil-user.php');
?> 