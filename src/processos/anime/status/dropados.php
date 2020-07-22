<?php
    require_once('../../../banco/conexao.php');
    session_start();
    if (!isset($_SESSION['logado'])) {
        header("Location: ../../index.php");
    }
    $id = $_SESSION['logado'];
    $id_anime = $_POST['idAnime'];

    $select = mysqli_query($con, "SELECT * FROM tb_dropados WHERE id_anime = $id_anime");
    if(mysqli_num_rows($select) == 0){
        mysqli_query($con, "INSERT tb_dropados VALUES(0, $id_anime, $id)");
        echo "Dropado adicionado com sucesso";

    }else{
        mysqli_query($con, "DELETE FROM tb_dropados WHERE id_anime = $id_anime");
        echo "Assistido removido com sucesso";
    }

?>