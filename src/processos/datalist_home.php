<?php
    require_once('banco/conexao.php');
    require_once('banco/includes/security.php');

    $termo = security($_POST['pesquisa']);
    $sql = mysqli_query($con, "SELECT * FROM tb_anime WHERE nome LIKE '$termo%' LIMIT 10");
    
    while($animes = mysqli_fetch_array($sql)){
        echo '<option class="anime-datalist id="'. $animes['id_anime'] . '" value="' . $animes['nome'] . '">' . $animes['nome'] . '</option>';
    }
?>
