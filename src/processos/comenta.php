<?php 
    require_once('../banco/conexao.php');
    require_once '../../vendor/autoload.php';
    require_once('../banco/includes/security.php');
    session_start();
    if (!isset($_SESSION['logado'])) {
        header("Location: ../index.php");
    }

    date_default_timezone_set('America/Sao_Paulo');
    $id = $_SESSION['logado'];

    $id_anime = $_GET['id'];
    $comentario = security($_POST['coment']);
    $data_atual = new dateTime();$timestamp = new DateTime();
    $data = $timestamp->format('Y-m-d H:i:s');
    $insert = mysqli_query($con, "INSERT INTO `tb_comentario` (id, id_usuario, id_anime, comentario, data_publicacao) VALUES (0, '$id', '$id_anime', '$comentario', '$data')");
    header("Location: ../perfil-anime.php?id=".$id_anime)
    // INSERT INTO tb_usuario (nome, email, senha, nascimento) VALUES ('$nome', '$email', '$senhaSegura', '$nascimento')
    //INSERT INTO `tb_comentario` (id, id_usuario, id_anime, comentario, data_publicacao) VALUES (0, '$id', '$id_anime', '$comentario', '$data');
?>