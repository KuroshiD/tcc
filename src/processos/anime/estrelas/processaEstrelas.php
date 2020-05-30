<?php
    require_once('../../../banco/conexao.php');
    require_once('../../../banco/includes/security.php');

    session_start();

    date_default_timezone_set('America/Sao_Paulo');

    if (!isset($_SESSION['logado'])) {
        header('Location ../../../../index.php');
    }

    $id_user = $_SESSION['logado'];
    $estrelas = security($_POST['estrelas']);
    $id_anime = security($_POST['id_anime']);

    if (!empty($id_user) && !empty($estrelas) && !empty($id_anime)) {
        $verificaExistencia = mysqli_query($con, "SELECT * FROM tb_estrelas WHERE id_anime = '$id_anime' AND id_user = '$id_user'");

        if (mysqli_num_rows($verificaExistencia) == 0) {
            $insereAvaliacao = mysqli_query($con, "INSERT INTO tb_estrelas (id_user, id_anime, estrelas) VALUES ('$id_user', '$id_anime', '$estrelas')");
            echo 'Avaliação registrada';
        } else {
            $timestamp = new DateTime();
            $hora = $timestamp -> format('Y-m-d H:i:s');
            $atualizaAvaliacao = mysqli_query($con, "UPDATE tb_estrelas SET estrelas = '$estrelas', hora = '$hora' WHERE id_anime = '$id_anime' AND id_user = '$id_user'");
            echo 'Avaliação atualizada';
        }
    }
?>