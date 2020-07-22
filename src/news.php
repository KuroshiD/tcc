<?php
require_once('../src/banco/conexao.php');
require_once('../src/banco/includes/security.php');

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

    <link rel="stylesheet" href="../CSS/style-total/Total-menu.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-media.css">

    <link rel="stylesheet" href="../CSS/style-noticia/noticia-main.css">

    <title>Noticias</title>
</head>

<body>

    <div class="interface">

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
                                <a href="./news.php" class="link-items">noticias</a>
                            </li>

                            <li class="list-items">
                                <a href="./sobre.php" class="link-items">sobre</a>
                            </li>

                            <li class="list-items sair-mobile">
                                <a href="./processos/user/logout.php" class="link-items">sair</a>
                            </li>

                        </ul>

                    </nav>

                </div>

                <div class="container-img-user">

                    <img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt="" class="img img-none">
                    <div class="menuzinho-hover hover-efeito">
                        <span class="triangulo"></span>
                        <a href="./user/Perfil-user.php">perfil</a>
                        <a href="./processos/user/logout.php">sair</a>
                    </div>
                    <i class="fas fa-bars icon-none"></i>
                </div>

            </div>


        </header>

        <main class="container-main">

            <div class="main-form">

                <form action="" class="content-form">
                    <input type="text" id="txtPes" class="txt-pes" placeholder="Ex: Bleach">
                    <button type="submit" class="fa fa-search btn-pes"></button>
                </form>

            </div>

            <div class="titulo-recentes">
                <h2 class="ttl-rec">Noticias Recentes</h2>
            </div>

            <section class="container-avd-recentes">


                <div class="container-coment">

                    <div class="container-img-rec-anime">
                        <img src="../Imagens/koji.jpg">
                    </div>

                    <div class="content-coment-name">
                        <h4 class="title-news">Boruto: Koji Kashin utiliza o Modo Sábio de Jiraiya no mangá</h4>
                        <p class="horario">21 de julho de 2020</p>
                    </div>

                </div>

                <div class="container-coment">

                    <div class="container-img-rec-anime">
                        <img src="../Imagens/server/Capa-Primeiras-impreso-v2-520x245.jpg">
                    </div>

                    <div class="content-coment-name">
                        <h4 class="title-news">Primeiras Impressões – Temporada de Julho 2020</h4>
                        <p class="horario">10 de julho de 2020</p>
                    </div>

                </div>

                <div class="container-coment">

                    <div class="container-img-rec-anime">
                        <img src="../Imagens/server/mangamaisvendid.jpg">
                    </div>

                    <div class="content-coment-name">
                        <h4 class="title-news">Mangás mais Vendidos (Julho 06 – Julho 12)</h4>
                        <p class="horario">20 de julho de 2020</p>
                    </div>

                </div>

                <div class="container-coment">

                    <div class="container-img-rec-anime">
                        <img src="../Imagens/server/81LJKM-TooL-tile-520x245.jpg">
                    </div>

                    <div class="content-coment-name">
                        <h4 class="title-news">Mangás e Novels a metade do preço! – Dicas de Compra IntoxiAnime</h4>
                        <p class="horario">21 de julho de 2020</p>
                    </div>

                </div>

                <div class="container-coment">

                    <div class="container-img-rec-anime">
                        <img src="../Imagens/server/trailerrezero.jpg">
                    </div>

                    <div class="content-coment-name">
                        <h4 class="title-news">Trailer do episódio 28 de Re:Zero foca em nova bruxa e personagens</h4>
                        <p class="horario">20 de julho de 2020</p>
                    </div>

                </div>

                <div class="container-coment">

                    <div class="container-img-rec-anime">
                        <img src="../Imagens/server/decadance.jpg">
                    </div>

                    <div class="content-coment-name">
                        <h4 class="title-news">Deca-Dence tem Plot Twist completamente inesperado no 2º episódio!</h4>
                        <p class="horario">19 de julho de 2020</p>
                    </div>

                </div>

                <div class="container-coment">

                    <div class="container-img-rec-anime">
                        <img src="../Imagens/server/oshino.jpg">
                    </div>

                    <div class="content-coment-name">
                        <h4 class="title-news">Oshi no Ko – Novo mangá dos autores de Kaguya-sama e Kuzo no Honkai ganha comercial de lançamento</h4>
                        <p class="horario">19 de julho de 2020</p>
                    </div>

                </div>

                <div class="container-coment">

                    <div class="container-img-rec-anime">
                        <a href="https://www.intoxianime.com/2020/07/anime-de-acao-e-romance-com-bruxa-e-cavaleiro-ganha-trailer-estendido-com-ed/" target="_blank"><img src="../Imagens/server/romance.jpg"></a>
                    </div>

                    <div class="content-coment-name">
                        <h4 class="title-news">Anime de ação e romance com bruxa e cavaleiro ganha trailer estendido com ED</h4>
                        <p class="horario">15 de julho de 2020</p>
                    </div>

                </div>
                
                <div class="container-coment">

                    <div class="container-img-rec-anime">
                        <img src="../Imagens/server/thegod.jpg">
                    </div>

                    <div class="content-coment-name">
                        <h4 class="title-news">The God of HighSchool #01 a #02 – Alguém pediu boas lutas? | Impressões Semanais</h4>
                        <p class="horario">15 de julho de 2020</p>
                    </div>

                </div>

                

            </section>

        </main>

        <footer class="container-footer">

            <p class="footer-p footer-des">Esse site é um projeto de TCC e não tem fins lucrativos (ainda).</p>

            <p class="footer-p footer-email">E-mail para contato: <br>contato.animematch@gmail.com</p>

            <p class="footer-p footer-copy">&copy; Anime Match</p>

        </footer>

    </div>

    <script src="../package/js/swiper.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../Js/menu/menu.js"></script>

</body>

</html>