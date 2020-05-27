<?php
    require_once('../banco/conexao.php');
    require_once('../banco/includes/security.php');

    date_default_timezone_set('America/Sao_Paulo');

    session_start();

    if (!isset($_SESSION['logado'])) {
        header("Location: ../index.php");
    }

    $id = $_SESSION['logado'];
    $sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
    $dados = mysqli_fetch_array($sql);

    if ($dados['last_update'] == null) {
        $timestamp = new DateTime();
        $data = $timestamp->format('Y-m-d');
        $update_date = mysqli_query($con, "UPDATE tb_usuario SET last_update = '$data' WHERE id = '$id'");

        $nome = security($_POST['nome']);
        $classe = security($_POST['classe']);
        $raca = security($_POST['raca']);
        $descricao = security($_POST['descricao']);
        $personagem = security($_POST['personagem']);
        $atualiza = mysqli_query($con, "UPDATE tb_usuario SET nome = '$nome', classe = '$classe', raca = '$raca', descricao = '$descricao', personagem = '$personagem' WHERE id = '$id'");
    } else {
        $data_atual = new DateTime();
        $ultimo_update = new DateTime($dados['last_update']);
        $intervalo = $ultimo_update->diff($data_atual);
        echo $intervalo->format('%R%a dias');

        if ($intervalo >= 90) {
            $timestamp = new DateTime();
            $data = $timestamp->format('Y-m-d');
            $update_date = mysqli_query($con, "UPDATE tb_usuario SET last_update = '$data' WHERE id = '$id'");

            $nome = security($_POST['nome']);
            $classe = security($_POST['classe']);
            $raca = security($_POST['raca']);
            $descricao = security($_POST['descricao']);
            $personagem = security($_POST['personagem']);
            $atualiza = mysqli_query($con, "UPDATE tb_usuario SET nome = '$nome', classe = '$classe', raca = '$raca', descricao = '$descricao', personagem = '$personagem' WHERE id = '$id'");
        }else{
            echo 'Ainda não se passaram três meses!';
        }
    }
?>