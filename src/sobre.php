<?php
require_once('./banco/conexao.php');
require_once('./banco/includes/findhttp.php');
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

    <link rel="stylesheet" href="../CSS/nomalize/normalize.css">
    <link rel="icon" href="../../Imagens/favicon.ico">

    <link rel="stylesheet" href="../CSS/style-total/Total-menu.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-media.css">
    <link rel="stylesheet" href="../CSS/style-total/classe.css">

    <link rel="stylesheet" href="../CSS/style-sobre/main.css">

    <title>Sobre</title>
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

            <div class="anime-match">

                <div class="img-card">
                    <img src="../Imagens/animeMatch.jpg" alt="Imagem do desenvolvedor front-end, Jefferson Santos.">
                </div>

                <div class="info">
                    <h1>Anime Match</h1>
                    <p class="item-description">Anime Match é um projeto de TCC onde o objetivo é criar uma plataforma de recomendção, pesquisa, informações e notícias sobre animes.
                        A plataforma também conta com um sistema de comentários, onde você pode deixar a sua critica para qualquer anime.
                    </p>
                    <span>E-mail de contato:</span>
                    <span>contato.animematch@gmail.com</span>
                    <span>Redes sociais</span>
                    <div class="redes-sociais redes-anime">
                        <a href="https://www.facebook.com/AnimeMatchPage"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/match_anime/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

            </div>

            <div class="container">

                <div class="container-card jef">

                    <div class="img-card">
                        <img src="../Imagens/jefferson.jpg" alt="Imagem do desenvolvedor front-end, Jefferson Santos.">
                    </div>

                    <div class="info">
                        <h1>Jefferson Santos</h1>
                        <p class="item-description">
                            "Quem sabe, Deus não é uma fantasia lúdica inventada para incentivar um futuro de vida para idiotas"
                        </p>
                        <span>E-mail de contato:</span>
                        <span>jefferson.hofstadter@gmail.com</span>
                        <span>Redes sociais</span>
                        <div class="redes-sociais">
                            <a href="https://www.linkedin.com/in/jefferson-felipe-dos-santos-pereira-6a5327186/"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100015115591528"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.instagram.com/f_hofstadter/"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/hofstadter_j"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                </div>

                <div class="container-card gus">

                    <div class="img-card">
                        <img src="../Imagens/gustavo.jpeg" alt="Imagem do desenvolvedor front-end, Jefferson Santos.">
                    </div>

                    <div class="info">
                        <h1>Gustavo sanches</h1>
                        <p class="item-description">
                            "Se você quiser jogar comigo, é melhor conhecer bem o jogo"
                        </p>
                        <span>E-mail de contato:</span>
                        <span>gusanches601@gmail.com</span>
                        <span>Redes sociais</span>
                        <div class="redes-sociais">
                            <a href="https://www.linkedin.com/in/luis-gustavo-sanches-687b62183/"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.facebook.com/gus.uzocrack.5"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.instagram.com/gustavodsanches/"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/BotWaifu2"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                </div>

                <div class="container-card gab">

                    <div class="img-card">
                        <img src="../Imagens/paiva.jpg" alt="Imagem do desenvolvedor front-end, Jefferson Santos.">
                    </div>

                    <div class="info">
                        <h1>Paiva Gabriel</h1>
                        <p class="item-description">
                            "Na internet nada se cria, tudo se reutiliza"
                        </p>
                        <span>E-mail de contato:</span>
                        <span>bielpaiva.lg@gmail.com</span>
                        <span>Redes sociais</span>
                        <div class="redes-sociais">
                            <a href="https://www.linkedin.com/in/gabriel-paiva-91311319a/"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.facebook.com/Paiva190/"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.instagram.com/gabriel.paiva.56232/"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/Stingg12"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                </div>

                <div class="container-card edu">

                    <div class="img-card">
                        <img src="../Imagens/eduardo.jpg" alt="Imagem do desenvolvedor front-end, Jefferson Santos.">
                    </div>

                    <div class="info">
                        <h1>Eduardo Rodrigues</h1>
                        <p class="item-description">
                            "Não é falta de café nem tequila, é meu código que não compila"
                        </p>
                        <span>E-mail de contato:</span>
                        <span>eduardoooax@gmail.com</span>
                        <span>Redes sociais</span>
                        <div class="redes-sociais redes-edu">
                            <a href="https://www.facebook.com/profile.php?id=100010894394398"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://twitter.com/Dudu671"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </main>

        <footer class="container-footer">

            <p class="footer-p footer-des">Esse site é um projeto de TCC e não tem fins lucrativos (ainda).</p>

            <p class="footer-p footer-email">E-mail para contato: <br><a href="#">contato.animematch@gmail.com</a></p>

            <p class="footer-p footer-copy">&copy; Anime Match</p>

        </footer>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../Js/menu/menu.js?<?php echo $x; ?>"></script>

</body>

</html>