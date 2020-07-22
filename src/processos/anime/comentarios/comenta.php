<?php
require_once('../../../banco/conexao.php');
require_once('../../../banco/includes/security.php');

session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: ../../../index.php");
}

date_default_timezone_set('America/Sao_Paulo');

$id = $_SESSION['logado'];
$id_anime = security($_POST['id_anime']);
$comentario = security($_POST['comentario']);
$data_atual = new dateTime();
$timestamp = new DateTime();
$data = $timestamp->format('Y-m-d H:i:s');

if (!empty($id_anime) && !empty($comentario)) {
    $insert = mysqli_query($con, "INSERT INTO tb_comentario (id_usuario, id_anime, comentario, data_publicacao) VALUES ('$id', '$id_anime', '$comentario', '$data')");
}

$sql = mysqli_query($con, "SELECT 
        com.id,
        com.comentario,
        DATE_FORMAT(com.data_publicacao, '%d/%m/%Y') as dia,
        DATE_FORMAT(com.data_publicacao, '%H:%i') as hora,
        usu.img_perfil,
        usu.nome
    FROM 
        tb_comentario as com 
    INNER JOIN 
        tb_usuario as usu ON com.id_usuario = usu.id 
    WHERE 
        com.id_anime = '$id_anime'
    ORDER BY com.data_publicacao DESC
    ");

while ($dados_comentarios = mysqli_fetch_array($sql)) {
    echo '<div class="content">';
    echo '<div class="informacoes">';

    echo '<div class="img">';
    echo '<img src="../../' . $dados_comentarios['img_perfil'] . '">';
    echo '</div>';

    echo '<div class="nome">';
    echo '<h3>' . $dados_comentarios['nome'] . '</h3>';
    echo '<span>Dia: ' . $dados_comentarios['dia'] . ' às ' . $dados_comentarios['hora'] . '</span>';
    echo '</div>';

    echo '</div>';

    echo '<div class="comentario">';
    echo '<p>' . nl2br($dados_comentarios['comentario']) . '</p>';
    echo '</div>';
    echo '</div>';
    echo '
            <script>
                $(".menu-icon").click(() => {
                    $(".denuncie").addClass("menu-none").siblings().removeClass("menu-none");
                });
            </script>';
}
