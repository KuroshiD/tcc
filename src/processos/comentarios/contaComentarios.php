<?php
    require_once('../../banco/conexao.php');
    require_once('../../banco/includes/security.php');

    $id_anime = security($_POST['id_anime']);
    $query = mysqli_query($con, "SELECT COUNT(comentario) as numero FROM tb_comentario WHERE id_anime = '$id_anime'");
    $count_dados = mysqli_fetch_array($query);

    echo $count_dados['numero'] . ' comentários';
?>