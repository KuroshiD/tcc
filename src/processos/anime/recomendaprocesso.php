<?php
require_once('../../banco/conexao.php');
require_once('../../banco/includes/findhttp.php');
$genero = $_POST["genero"];

$sql_anime = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%$genero%' ORDER BY RAND() desc LIMIT 6");

while ($animeAleatorizados = mysqli_fetch_array($sql_anime)) {
    if (findHTTP($animeAleatorizados['img_anime'])) {
        echo '<div class="content-animes">';
        echo '<div class="container-img">';
        echo '<a href="./anime/perfil-anime.php?id='.$animeAleatorizados["id_anime"].'">';
        echo '<img class="img-anime" id="'.$animeAleatorizados["id_anime"].'" src="' . $animeAleatorizados["img_anime"] . '" alt="' . $animeAleatorizados["nome"] . '">';
        echo '</a>';
        echo '</div>';
        echo '<div class="info">';
        echo '<h2 class="titulo">' . $animeAleatorizados["nome"] . '</h2>';
        echo '<span><b>Genêro</b>: ' . $animeAleatorizados["genre"] . '</span>';
        echo '<span><b>Ano</b>: ' . $animeAleatorizados["Data_lancamento"] . '</span>';
        echo '<span><b>Tipo</b>: ' . $animeAleatorizados["tipo"] . '</span>';
        echo '</div>';
        echo '</div>';
    } else {
        echo '<div class="content-animes">';
        echo '<div class="container-img">';
        echo '<a href="./anime/perfil-anime.php?id='.$animeAleatorizados["id_anime"].'">';
        echo '<img class="img-anime" id="'.$animeAleatorizados["id_anime"].'" src="' . $animeAleatorizados["img_anime"] . '" alt="' . $animeAleatorizados["nome"] . '">';
        echo '</a>';
        echo '</div>';
        echo '<div class="info">';
        echo '<h2 class="titulo">' . $animeAleatorizados["nome"] . '</h2>';
        echo '<span><b>Genêro</b>: ' . $animeAleatorizados["genre"] . '</span>';
        echo '<span><b>Ano</b>: ' . $animeAleatorizados["Data_lancamento"] . '</span>';
        echo '<span><b>Tipo</b>: ' . $animeAleatorizados["tipo"] . '</span>';
        echo '</div>';
        echo '</div>';
    }
}
?>
