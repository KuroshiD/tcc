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

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/nomalize/normalize.css">
    <link rel="icon" href="../../Imagens/favicon.ico">

    <link rel="stylesheet" href="../CSS/style-total/Total-menu.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-media.css">
    <link rel="stylesheet" href="../CSS/style-total/classe.css">

    <link rel="stylesheet" href="../CSS/style-recomendacao/main.css">
    <link rel="stylesheet" href="../CSS/style-recomendacao/media.css">

    <title>Recomendação Aleatória</title>
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

            <section class="recomendacao">

                <form id="recomendacao" class="form-container">

                    <div class="content-campo">

                        <label for="genero">Escolha um gênero</label>
                        <select name="genero" id="genero" class="campo-genero">

                            <option value="Action">Ação</option>
                            <option value="Adventure">Aventura</option>
                            <option value="Martial arts">Artes Marciais</option>
                            <option value="Comedy">Comédia</option>
                            <option value="Drama">Drama</option>
                            <option value="Horror">Horror</option>
                            <option value="Game">Jogos</option>
                            <option value="Sports">Esportes</option>
                            <option value="Romance">Romance</option>
                            <option value="School">School</option>
                            <option value="slice of life">Slice of life</option>
                            <option value="mystery">misterio</option>
                            <option value="Supernatural">Supernatural</option>
                            <option value="Psychological">Psicologico</option>
                            <option value="Demons">Demonios</option>
                            <option value="Seinen">Seinen</option>

                        </select>

                    </div>

                    <button id="recomendar" class="btn-recomendar">Recomendar</button>

                </form>

                <div id="divRecomendados" class="animes-recomendados">
                    <div class="nenhum-recomendado">
                        <img src="../Imagens/recomendacao.gif" alt="Gif de recomendção.">
                        <span>Gere uma recomendação aleatória.</span>
                    </div>
                </div>

            </section>

        </main>
        <footer class="container-footer">

            <p class="footer-p footer-des">Esse site é um projeto de TCC e não tem fins lucrativos (ainda).</p>

            <p class="footer-p footer-email">E-mail para contato: <br><a href="#">contato.animematch@gmail.com</a></p>

            <p class="footer-p footer-copy">&copy; Anime Match</p>

        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../Js/menu/menu.js?<?php echo $x; ?>"></script>
    <script src="../Js/tela/tela.js"></script>

</body>

<script>
    $(document).ready(() => {
        const divRecomendacao = document.querySelector("#divRecomendados");
        $('#recomendacao').submit(event => {
            event.preventDefault();
            const select = $("#genero").val();
            $.ajax({
                url: "./processos/anime/recomendaprocesso.php",
                type: 'post',
                data: {
                    genero: select
                },
                success: result => {
                    if ($(".content-animes").length) {
                        $(divRecomendacao).html("");
                    }
                    $(".interface").css("height", "100%")
                    $(divRecomendacao).append(result);
                    $(".nenhum-recomendado").css("display", "none");
                    
                }
            })
        })
        if (!$(".content-animes").length) {
            $(".interface").css("height", "100vh")
            $(".container-main").css("height", "100%");
        }
    })
</script>

</html>