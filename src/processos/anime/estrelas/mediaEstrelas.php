<?php
    require_once('../../../banco/conexao.php');
    require_once('../../../banco/includes/security.php');

    $id_anime = security($_POST['id_anime']);

    $consultaMedia = mysqli_query($con, "SELECT AVG(estrelas) as estrelas FROM tb_estrelas WHERE id_anime = '$id_anime'");
    $media = mysqli_fetch_array($consultaMedia);
    echo round($media['estrelas']);
?>