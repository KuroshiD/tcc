<?php
require_once('../../banco/conexao.php');
require_once('../../banco/includes/findhttp.php');

session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: ../../index.php");
}
$id = $_SESSION['logado'];
$idComentario = $_POST['idComentario'];

$removeComentario = mysqli_query($con, "DELETE FROM tb_comentario WHERE id = '$idComentario'");

$buscaRecentes = mysqli_query($con, "SELECT * FROM recentes WHERE id_user = $id ORDER BY data_publicacao DESC limit 5");

echo 'Atividade Recentes';
if (mysqli_num_rows($buscaRecentes) > 0) {
    while ($recentes = mysqli_fetch_array($buscaRecentes)) {
        if (findHTTP($recentes['img_anime'])) {
            echo '<div class="container-coment cor">';

            echo '<div class="container-img-rec-anime">';
            echo '<img src="' . $recentes['img_anime'] . '" class="img-click" id="' . $recentes['id_comentario'] . '">';
            echo '</div>';
            echo '<div class="content-coment-name">';
            echo '<h4 class="name-coment">' . $recentes['nome_anime'] . '</h4>';
            echo '<p class="coment leiamais">' . $recentes['descricao_anime'] . '</p>';
            echo '</div>';

            echo '</div>';
        } else {
            echo '<div class="container-coment cor">';

            echo '<div class="container-img-rec-anime">';
            echo '<img src="../../' . $recentes['img_anime'] . '" class="img-click" id="' . $recentes['id_comentario'] . '">';
            echo '</div>';

            echo '<div class="content-coment-name">';
            echo '<h4 class="name-coment">' . $recentes['nome_anime'] . '</h4>';
            echo '<p class="coment leiamais">' . $recentes['descricao_anime'] . '</p>';
            echo '</div>';

            echo '</div>';
        }
    }
} else {
    echo 'Você não tem comentarios';
    echo '
        <script> 
    
            let tela = document.querySelector(".interface"); 
            let main = document.querySelector(".container-main");

            tela.style.height = "100vh";
            main.style.height = "100%";
                            
        </script>';
    echo 'voce ainda nao comentou';
}
