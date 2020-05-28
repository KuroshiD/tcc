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

                            <a href="Perfil-user.php"><img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt=""></a>

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
                                <a href="#" class="link-items">recomendação aleatoria</a>
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
                    <!-- </?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?> -->
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

            <section class="container-avd-recentes">

                <div class="content-recentes">

                    <div class="titulo-recentes">
                        <h2 class="ttl-rec">Noticias Recentes</h2>
                    </div>

                    <div class="container-coment">
                        <div class="container-img-rec-anime">
                            <img src="../Imagens/dragonBall.jpg">
                        </div>

                        <div class="content-coment-name">
                            <h4 class="name-coment">Dragon Ball Z</h4>
                            <p class="coment">As aventuras de um poderoso guerreiro chamado Goku, seu filho Gohan e seus aliados, que se esforçam para defender a Terra das ameaças.</p>
                        </div>

                    </div>

                    <div class="container-coment">

                        <div class="container-img-rec-anime">
                            <img src="../Imagens/cavalheiros.png">
                        </div>

                        <div class="content-coment-name">
                            <h4 class="name-coment">Dragon Ball Z</h4>
                            <p class="coment">As aventuras de um poderoso guerreiro chamado Goku, seu filho Gohan e seus aliados, que se esforçam para defender a Terra das ameaças.</p>
                        </div>

                    </div>

                    <div class="container-coment">

                        <div class="container-img-rec-anime">
                            <img src="../Imagens/hunter_X_hunter.jpg">
                        </div>

                        <div class="content-coment-name">
                            <h4 class="name-coment">Dragon Ball Z</h4>
                            <p class="coment">As aventuras de um poderoso guerreiro chamado Goku, seu filho Gohan e seus aliados, que se esforçam para defender a Terra das ameaças.</p>
                        </div>

                    </div>

                    <div class="container-coment">

                        <div class="container-img-rec-anime">
                            <img src="../Imagens/naruto.jpg">
                        </div>

                        <div class="content-coment-name">
                            <h4 class="name-coment">Dragon Ball Z</h4>
                            <p class="coment">As aventuras de um poderoso guerreiro chamado Goku, seu filho Gohan e seus aliados, que se esforçam para defender a Terra das ameaças.</p>
                        </div>

                    </div>

                    <div class="container-coment">

                        <div class="container-img-rec-anime">
                            <img src="../Imagens/bleach.jpg">
                        </div>

                        <div class="content-coment-name">
                            <h4 class="name-coment">Dragon Ball Z</h4>
                            <p class="coment">As aventuras de um poderoso guerreiro chamado Goku, seu filho Gohan e seus aliados, que se esforçam para defender a Terra das ameaças.</p>
                        </div>

                    </div>

                    <div class="container-coment">

                        <div class="container-img-rec-anime">
                            <img src="../Imagens/cavalheiros.png">
                        </div>

                        <div class="content-coment-name">
                            <h4 class="name-coment">Dragon Ball Z</h4>
                            <p class="coment">As aventuras de um poderoso guerreiro chamado Goku, seu filho Gohan e seus aliados, que se esforçam para defender a Terra das ameaças.</p>
                        </div>

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

    <script src="../package/js/swiper.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../Js/menu/menu.js"></script>

</body>

</html>