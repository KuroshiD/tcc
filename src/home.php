<?php 
    require_once('banco/conexao.php');

    session_start();

    if(!isset($_SESSION['logado'])){
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
    <meta name="descri6666666666666667ption" content="">
    <meta name="keywords" content="Animes, Melhores animes, ">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Luis Gustavo, Jefferson Santos, Gabriel Paiva, Eduardo de Matos">

    <link rel="stylesheet" href="../package/css/swiper.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/nomalize/normalize.css">
    <link rel="icon" href=".././Imagens/favicon.ico" >

    <link rel="stylesheet" href="../CSS/style-total/Total-menu.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-media.css">
    <link rel="stylesheet" href="../CSS/style-total/classe.css">

    <link rel="stylesheet" href="../CSS/style-home/home-main.css">
    <link rel="stylesheet" href="../CSS/style-home/slider.css">
    <link rel="stylesheet" href="../CSS/style-home/home-medias.css">
    

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

                           <a href="Perfil-user.php"><img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt=""></a>

                        </div>

                        <div class="user-raca-classe">

                            <h2><?php echo $dados['nome'] ?></h2>
                            <span><?php echo $dados['raca'].'/'.$dados['classe'] ?></span>

                        </div>

                    </div>

                    <nav class="nav-list">

                        <ul class="list">

                            <li class="list-items">
                                <a href="home.php" class="link-items">home</a>
                            </li>
                            
                            <li class="list-items">
                                <a href="#" class="link-items">recomendação aleatoria</a>
                            </li>
                            
                            <li class="list-items">
                                <a href="noticias.php" class="link-items">noticias</a>
                            </li>

                            <li class="list-items sair-mobile">
                                <a href="processos/logout.php" class="link-items">sair</a>
                            </li>

                        </ul>

                    </nav>

                </div>

                <div class="container-img-user">

                    <img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt="" class="menu-verifica img-none">
                    <!-- </?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?> -->
                    <i class="fas fa-bars icon-none"></i>
                </div>

            </div>


        </header> 

        <main class="container-main">

            <div class="main-form">

                <form action="processos/busca_animes.php" class="content-form" method="post" autocomplete="off">
                    <datalist id="sugestoes">
                    </datalist>
                    <input type="text" id="txtPes" class="txt-pes" name="pesquisa" placeholder="Ex: Bleach" list="sugestoes">
                    <button type="submit" id="btnPes" class="fa fa-search btn-pes"></button>
                </form>

            </div>

            <section class="main-slider">

                <div class="slideshow-container">

                    
                    <?php 
                        $sql_anime = mysqli_query($con, "SELECT * FROM tb_anime WHERE data_lancamento >= 2019 ORDER BY data_lancamento desc LIMIT 5");
                        $i = 1;
                        while($dados_animes_slider = mysqli_fetch_array($sql_anime)){?>
                            <div class="mySlides fade">
                                <div class="numbertext"><?php print $i . " / " . mysqli_num_rows($sql_anime) ?></div>
                                <img src="../<?php print $dados_animes_slider['banner_anime'];?>" alt="">
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
                            <!-- <?php 
                                //$animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime ORDER BY data_lancamento DESC LIMIT 10 ");
                                // while($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)){?>
                                <div class="swiper-slide"><img src="../<?php //print $dados_swiper_recentes['img_anime'];?>" alt=""></div>
                            <?php
                                // }
                            ?> -->
                            <?php 
                                $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime ORDER BY data_lancamento DESC LIMIT 10 ");
                                while($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)){?>
                                <div class="swiper-slide"><?php print "<a href=perfil-anime.php?id=".$dados_swiper_recentes['id_anime'].">" ?><img src="../<?php print $dados_swiper_recentes['img_anime'];?>" alt="<?php print $dados_swiper_recentes['nome'];?>"></a></div>
                            <?php
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
                                $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Terror%' LIMIT 10 ");
                                while($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)){?>
                                <div class="swiper-slide"><img src="../<?php print $dados_swiper_recentes['img_anime'];?>" alt=""></div>
                            <?php
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
                                $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Slice of life%'  LIMIT 10 ");
                                while($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)){?>
                                <div class="swiper-slide"><img src="../<?php print $dados_swiper_recentes['img_anime'];?>" alt=""></div>
                            <?php
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
                                $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Ação%'   LIMIT 10 ");
                                while($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)){?>
                                <div class="swiper-slide"><img src="../<?php print $dados_swiper_recentes['img_anime'];?>" alt=""></div>
                            <?php
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
                                $animes_swiper_recentes = mysqli_query($con, "SELECT * FROM tb_anime WHERE genre LIKE '%Aventura%' ORDER BY data_lancamento desc LIMIT 10 ");
                                while($dados_swiper_recentes = mysqli_fetch_array($animes_swiper_recentes)){?>
                                <div class="swiper-slide"><img src="../<?php print $dados_swiper_recentes['img_anime'];?>" alt=""></div>
                            <?php
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
        $("#txtPes").keyup(function(){
            var pesquisa = $(this).val();
            $.post('datalist_home.php', { pesquisa: pesquisa }, function(dados){
                $("#sugestoes").html(dados);
            })
        });
    </script>
    <script src="../package/js/swiper.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../Js/menu/menu.js"></script>
    <script src="../Js/slider/slider.js"></script>
    <script src="../Js/slider/swiper.js"></script>
    <script src="../|Js/menu/swiperLink.js"></script>

</body>

</html>