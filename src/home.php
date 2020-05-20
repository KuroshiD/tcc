<?php 
    require_once('banco/conexao.php');

    session_start();

    if(!isset($_SESSION['logado'])){
        header("Location: ../index.php");
    }

    $id = $_SESSION['logado'];

    $sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
    $dados = mysqli_fetch_array($sql);
    $sql_anime = mysqli_query($con, "SELECT * FROM tb_anime");
    $dados_animes = mysqli_fetch_array($sql_anime);

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
    <meta name="author" content="Jefferson santos">

    <link rel="stylesheet" href="../package/css/swiper.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/normalize/nomalize.css">

    <link rel="stylesheet" href="../CSS/style-total/Total-menu.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-media.css">
    <link rel="stylesheet" href="../CSS/style-total/classe.css">

    <link rel="stylesheet" href="../CSS/style-home/home-main.css">
    <link rel="stylesheet" href="../CSS/style-home/slider.css">
    <link rel="stylesheet" href="../CSS/style-home/home-medias.css">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Home</title>

</head>

<body>

    <div class="interface back">

        <header class="container-header">

            <div class="container">

                <div class="container-logo-img">
                    <img src="../Imagens/Logo.png">
                </div>

                <nav class="container-menu">

                    <div class="content-profile">

                        <div class="container-profile-img">
                            <a href="Perfil-user.php"><img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>"></a>
                        </div>

                        <div class="content-nome-classe">
                            <h3> <?php echo $dados['nome']; ?> </h3>
                            <span><?php echo $dados['raca'].'/'.$dados['classe'] ?></span>
                        </div>

                    </div>

                    <ul class="list-nav">

                        <li class="list-item">
                            <a href="#" class="link-item active-link <?php print $dados['classe']?>">home</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="link-item" >animes recentes</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="link-item">recomendação aleatoria</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="link-item">temporadaras</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="link-item">noticias</a>
                        </li>

                    </ul>

                </nav>

                <div class="container-icone-profile">

                    <a><img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" class="menu-verifica"></a>

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

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 5</div>
                        <img src="../Imagens/animes/kaguya.jpg">
                    </div>
                    

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 5</div>
                        <img src="../Imagens/animes/onepiece.jpg">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 5</div>
                        <img src="../Imagens/animes/lovelive.jpg">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 5</div>
                        <img src="../Imagens/animes/jojo.jpg">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">5 / 5</div>
                        <img src="../Imagens/animes/yuno.jpg">
                        <!-- <div class="text">Caption Text</div> -->
                    </div>

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
                            <div class="swiper-slide"><img src="../Imagens/animes/BNA.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Fruits-Basket-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Gleipnir.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Honzuki-no-Gekokujou-Shisho-ni-Naru-Tame-ni-wa-Shudan-wo-Erandeiraremasen-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kaguya-sama-wa-Kokurasetai-Tensai-tachi-no-Renai-Zunousen.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kakushigoto-TV.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kami-no-Tou.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Otome-Game-no-Hametsu-Flag-shika-Nai-Akuyaku-Reijou-ni-Tensei-shiteshimatta....jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Shokugeki-no-Souma-Gou-no-Sara.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Sword-Art-Online-Alicization-War-of-Underworld-2nd-Season.jpg" alt=""></div>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>

                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Novos</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Imagens/animes/BNA.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Fruits-Basket-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Gleipnir.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Honzuki-no-Gekokujou-Shisho-ni-Naru-Tame-ni-wa-Shudan-wo-Erandeiraremasen-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kaguya-sama-wa-Kokurasetai-Tensai-tachi-no-Renai-Zunousen.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kakushigoto-TV.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kami-no-Tou.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Otome-Game-no-Hametsu-Flag-shika-Nai-Akuyaku-Reijou-ni-Tensei-shiteshimatta....jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Shokugeki-no-Souma-Gou-no-Sara.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Sword-Art-Online-Alicization-War-of-Underworld-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Fruits-Basket-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Gleipnir.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Honzuki-no-Gekokujou-Shisho-ni-Naru-Tame-ni-wa-Shudan-wo-Erandeiraremasen-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kaguya-sama-wa-Kokurasetai-Tensai-tachi-no-Renai-Zunousen.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kakushigoto-TV.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kami-no-Tou.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Otome-Game-no-Hametsu-Flag-shika-Nai-Akuyaku-Reijou-ni-Tensei-shiteshimatta....jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Shokugeki-no-Souma-Gou-no-Sara.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Sword-Art-Online-Alicization-War-of-Underworld-2nd-Season.jpg" alt=""></div>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>

                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Melhores animes</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Imagens/animes/BNA.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Fruits-Basket-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Gleipnir.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Honzuki-no-Gekokujou-Shisho-ni-Naru-Tame-ni-wa-Shudan-wo-Erandeiraremasen-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kaguya-sama-wa-Kokurasetai-Tensai-tachi-no-Renai-Zunousen.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kakushigoto-TV.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kami-no-Tou.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Otome-Game-no-Hametsu-Flag-shika-Nai-Akuyaku-Reijou-ni-Tensei-shiteshimatta....jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Shokugeki-no-Souma-Gou-no-Sara.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Sword-Art-Online-Alicization-War-of-Underworld-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Fruits-Basket-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Gleipnir.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Honzuki-no-Gekokujou-Shisho-ni-Naru-Tame-ni-wa-Shudan-wo-Erandeiraremasen-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kaguya-sama-wa-Kokurasetai-Tensai-tachi-no-Renai-Zunousen.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kakushigoto-TV.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kami-no-Tou.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Otome-Game-no-Hametsu-Flag-shika-Nai-Akuyaku-Reijou-ni-Tensei-shiteshimatta....jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Shokugeki-no-Souma-Gou-no-Sara.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Sword-Art-Online-Alicization-War-of-Underworld-2nd-Season.jpg" alt=""></div>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>

                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Renomados</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Imagens/animes/BNA.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Fruits-Basket-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Gleipnir.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Honzuki-no-Gekokujou-Shisho-ni-Naru-Tame-ni-wa-Shudan-wo-Erandeiraremasen-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kaguya-sama-wa-Kokurasetai-Tensai-tachi-no-Renai-Zunousen.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kakushigoto-TV.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kami-no-Tou.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Otome-Game-no-Hametsu-Flag-shika-Nai-Akuyaku-Reijou-ni-Tensei-shiteshimatta....jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Shokugeki-no-Souma-Gou-no-Sara.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Sword-Art-Online-Alicization-War-of-Underworld-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Fruits-Basket-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Gleipnir.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Honzuki-no-Gekokujou-Shisho-ni-Naru-Tame-ni-wa-Shudan-wo-Erandeiraremasen-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kaguya-sama-wa-Kokurasetai-Tensai-tachi-no-Renai-Zunousen.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kakushigoto-TV.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kami-no-Tou.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Otome-Game-no-Hametsu-Flag-shika-Nai-Akuyaku-Reijou-ni-Tensei-shiteshimatta....jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Shokugeki-no-Souma-Gou-no-Sara.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Sword-Art-Online-Alicization-War-of-Underworld-2nd-Season.jpg" alt=""></div>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Ação</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Imagens/animes/BNA.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Fruits-Basket-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Gleipnir.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Honzuki-no-Gekokujou-Shisho-ni-Naru-Tame-ni-wa-Shudan-wo-Erandeiraremasen-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kaguya-sama-wa-Kokurasetai-Tensai-tachi-no-Renai-Zunousen.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kakushigoto-TV.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kami-no-Tou.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Otome-Game-no-Hametsu-Flag-shika-Nai-Akuyaku-Reijou-ni-Tensei-shiteshimatta....jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Shokugeki-no-Souma-Gou-no-Sara.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Sword-Art-Online-Alicization-War-of-Underworld-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Fruits-Basket-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Gleipnir.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Honzuki-no-Gekokujou-Shisho-ni-Naru-Tame-ni-wa-Shudan-wo-Erandeiraremasen-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kaguya-sama-wa-Kokurasetai-Tensai-tachi-no-Renai-Zunousen.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kakushigoto-TV.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kami-no-Tou.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Otome-Game-no-Hametsu-Flag-shika-Nai-Akuyaku-Reijou-ni-Tensei-shiteshimatta....jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Shokugeki-no-Souma-Gou-no-Sara.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Sword-Art-Online-Alicization-War-of-Underworld-2nd-Season.jpg" alt=""></div>
                        </div>
                        <div class="swiper-button-next btns-N-P"></div>
                        <div class="swiper-button-prev btns-N-P"></div>
                    </div>
                </div>
                <div class="container-slide-swiper">
                    <h2 class="titulo-swiper">Animes Aventura</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Imagens/animes/BNA.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Fruits-Basket-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Gleipnir.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Honzuki-no-Gekokujou-Shisho-ni-Naru-Tame-ni-wa-Shudan-wo-Erandeiraremasen-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kaguya-sama-wa-Kokurasetai-Tensai-tachi-no-Renai-Zunousen.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kakushigoto-TV.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kami-no-Tou.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Otome-Game-no-Hametsu-Flag-shika-Nai-Akuyaku-Reijou-ni-Tensei-shiteshimatta....jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Shokugeki-no-Souma-Gou-no-Sara.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Sword-Art-Online-Alicization-War-of-Underworld-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Fruits-Basket-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Gleipnir.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Honzuki-no-Gekokujou-Shisho-ni-Naru-Tame-ni-wa-Shudan-wo-Erandeiraremasen-2nd-Season.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kaguya-sama-wa-Kokurasetai-Tensai-tachi-no-Renai-Zunousen.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kakushigoto-TV.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Kami-no-Tou.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Otome-Game-no-Hametsu-Flag-shika-Nai-Akuyaku-Reijou-ni-Tensei-shiteshimatta....jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Shokugeki-no-Souma-Gou-no-Sara.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../Imagens/animes/Sword-Art-Online-Alicization-War-of-Underworld-2nd-Season.jpg" alt=""></div>
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
    <script src="../Js/interface/back-img.js"></script>
    <script src="../Js/menu/menu.js"></script>
    <script src="../Js/slider/slider.js"></script>
    <script src="../Js/slider/swiper.js"></script>
    <script src="../Js/interface/content.js"></script>

</body>

</html>