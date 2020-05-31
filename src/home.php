<?php
require_once('banco/conexao.php');
require_once('banco/includes/findhttp.php');
session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: ../index.php");
}

$id = $_SESSION['logado'];

$sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
$dados = mysqli_fetch_array($sql);


$x = rand(0, 99);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="Animes, Melhores animes, ">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Luis Gustavo, Jefferson Santos, Gabriel Paiva, Eduardo de Matos">

    <link rel="stylesheet" href="../package/css/swiper.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/nomalize/normalize.css">
    <link rel="icon" href="../../Imagens/favicon.ico">

    <link rel="stylesheet" href="../CSS/style-total/Total-menu.css?<?php echo $x;?>">
    <link rel="stylesheet" href="../CSS/style-total/Total-main.css?<?php echo $x;?>">
    <link rel="stylesheet" href="../CSS/style-total/Total-media.css?<?php echo $x;?>">
    <link rel="stylesheet" href="../CSS/style-total/classe.css?<?php echo $x;?>">

    <link rel="stylesheet" href="../CSS/style-home/home-main.css?<?php echo $x;?>">
    <link rel="stylesheet" href="../CSS/style-home/slider.css?<?php echo $x;?>">
    <link rel="stylesheet" href="../CSS/style-home/home-medias.css?<?php echo $x;?>">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Anime Match</title>

</head>

<body>

    <div class="interface back">

        <header class="container-header">

            <div class="content-center">

                <div class="container-logo">

                    <img src=".././Imagens/Logo.png" alt="Logotipo desse website">

                </div>

                <div class="menu-mobile">

                    <div class="content-user">

                        <div class="mobile-user">

                            <a href="user/Perfil-user.php"><img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt=""></a>

                        </div>

                        <div class="user-raca-classe">

                            <h2><?php echo $dados['nome'] ?></h2>
                            <span><?php echo $dados['raca'] . '/' . $dados['classe'] ?></span>

                        </div>

                    </div>

                    <nav class="nav-list">

                        <ul class="list">

                            <li class="list-items">
                                <a href="home.php" class="link-items">home</a>
                            </li>

                            <li class="list-items">
                                <a href="./recomenda.php" class="link-items">recomendação aleatoria</a>
                            </li>

                            <li class="list-items">
                                <a href="news.php" class="link-items">noticias</a>
                            </li>

                            <li class="list-items sair-mobile">
                                <a href="processos/logout.php" class="link-items">sair</a>
                            </li>

                        </ul>

                    </nav>

                </div>

                <div class="container-img-user">

                    <img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt="" class="menu-verifica img-none">
                    <i class="fas fa-bars icon-none"></i>
                </div>

            </div>


        </header>

        <main class="container-main">

            <div class="main-form">

                <form action="processos/anime/busca_animes.php" class="content-form" method="post" autocomplete="off">
                    <datalist id="sugestoes">
                    </datalist>
                    <input type="text" id="txtPes" class="txt-pes" name="pesquisa" placeholder="Ex: Bleach" list="sugestoes">
                    <button type="submit" id="btnPes" class="fa fa-search btn-pes"></button>
                </form>

            </div>

            <section class="main-slider">

                <div class="slideshow-container">


                    <?php
                    $sql_anime = mysqli_query($con, "SELECT * FROM tb_anime WHERE data_lancamento >= 2019 AND id_anime <= 20 ORDER BY data_lancamento desc LIMIT 5");
                    $i = 1;
                    while ($dados_animes_slider = mysqli_fetch_array($sql_anime)) { ?>
                        <div class="mySlides fade">
                            <div class="numbertext"><?php print $i . " / " . mysqli_num_rows($sql_anime) ?></div>
                            <img src="../<?php print $dados_animes_slider['banner_anime']; ?>" alt="">
                        </div>
                    <?php
                        $i++;
                    }
                    ?>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>

                <!-- The dots/circles -->
                <div class="icones-slide">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                </div>


            </section>
            
            <section class="main-animes">
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Recentes</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE data_lancamento >= 2019 ORDER BY data_lancamento,score DESC ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Shounen</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Shounen%' ORDER BY data_lancamento,score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Artes marciais</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Artes marciais%' or genre like '%Martial Arts%' ORDER BY data_lancamento,score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Seinen</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Seinen%' AND origem != 'manga' ORDER BY data_lancamento, score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                                
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Magia</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%magic%' ORDER BY data_lancamento,score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Romance</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Romance%' ORDER BY data_lancamento,score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Terror</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Terror%' or genre LIKE '%horror%' LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>

                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Slice of Life</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Slice of life%'  LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Ação</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Ação%' or genre LIKE '%action%' LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Aventura</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Aventura%' or genre LIKE '%adventure%' ORDER BY data_lancamento,score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Comédia</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Comédia%' or genre like '%comedy%' ORDER BY data_lancamento,score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Drama</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%drama%' AND origem != 'manga' ORDER BY data_lancamento,score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Superpoderes</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Super Power%' or genre like '%superpoder%' ORDER BY data_lancamento,score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>  
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Supernatural</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Supernatural%' ORDER BY data_lancamento,score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes esportes</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Sports%' ORDER BY data_lancamento,score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes mecha</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%mecha%' ORDER BY data_lancamento,score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Ecchi</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Ecchi%' ORDER BY data_lancamento,score desc LIMIT 20 ");
                            while ($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)) {
                                if(findHTTP($dados_swiper_recentes['img_anime'])){
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="imgAnime" src="../' . $dados_swiper_recentes['img_anime'] . '" alt="' . $dados_swiper_recentes['nome'] . '">';
                                    echo '<input type="text" class="txtId" value="' . $dados_swiper_recentes['id_anime'] . '" hidden>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>

            </section>

        </main>

        <footer class="container-footer">

            <p class="footer-des">Esse site é um projeto de TCC e não tem fins lucrativos (ainda).</p>

            <p class="footer-email">E-mail para contato: <br><a href="#">contato.animematch@gmail.com</a></p>

            <p class="footer-copy">&copy; Anime Match</p>

        </footer>

    </div>

    <script>
        $(document).ready(function() {
            $("#txtPes").keyup(function() {
                var pesquisa = $(this).val();
                $.ajax({
                    url: 'processos/datalist_home.php',
                    method: 'POST',
                    data: {
                        pesquisa: pesquisa
                    },
                    success: function(dados) {
                        $("#sugestoes").html(dados);
                    }
                })
            });
            $(".imgAnime").click(function() {
                var id = $(this).next(".txtId").val();
                window.location.href = 'anime/perfil-anime.php?id=' + id;
            });

            $(".menu-verifica").click(function(){
                window.location.href = 'user/Perfil-user.php';
            })
            $("#txtPes").keyup(function(){
            var pesquisa = $(this).val();
            $.post('./processos/datalist_home.php', { pesquisa: pesquisa }, function(dados){
                $("#sugestoes").html(dados);
            })
        }); 
        })
    </script>
    <script src="../package/js/swiper.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../Js/menu/menu.js?<?php echo $x;?>"></script>
    <script src="../Js/slider/slider.js"></script>
    <script src="../Js/slider/swiper.js"></script>
    <script src="../|Js/menu/swiperLink.js"></script>

</body>

</html> 