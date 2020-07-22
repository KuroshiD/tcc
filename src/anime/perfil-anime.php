<?php
require_once('../banco/conexao.php');
require_once('../banco/includes/findhttp.php');
session_start();

if (!isset($_GET['id'])) {
    header('Location: Perfil-user.php');
}
if (!isset($_SESSION['logado'])) {
    header("Location: ../../index.php");
}


$id = $_SESSION['logado'];

$sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
$dados = mysqli_fetch_array($sql);



$x = rand(0, 99);

if (!isset($_GET['id'])) {
    header("Location: ../home.php");
}
$id_anime = $_GET['id'];
$select = mysqli_query($con, "SELECT * FROM tb_anime WHERE id_anime = '$id_anime'");
if (mysqli_num_rows($select) == 0) {
    header("Location: ../home.php");
} else {
    $dados_animes = mysqli_fetch_array($select);
}
$R = $dados['corr'];
$G = $dados['corg'];
$B = $dados['corb'];

$RGB = "RGB($R, $G, $B)";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../CSS/style-total/Total-menu.css">
    <link rel="stylesheet" href="../../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../../CSS/style-total/Total-media.css">

    <link rel="stylesheet" href="../../CSS/style-perfilAnime/main.css?">
    <link rel="stylesheet" href="../../CSS/style-perfilAnime/comentario.css">
    <link rel="stylesheet" href="../../CSS/style-perfilAnime/medias.css">
    <link rel="stylesheet" href="../../CSS/style-perfilAnime/estrelas.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title><?php print $dados_animes['nome'] ?></title>

</head>

<body>
    <div class="interface back">

        <header class="container-header">

            <div class="content-center">

                <div class="container-logo">

                    <img src="../../Imagens/Logo.png" alt="Logotipo desse website">

                </div>

                <div class="menu-mobile">

                    <div class="content-user">

                        <div class="mobile-user">

                            <a href="../user/Perfil-user.php"><img src="<?php echo '../../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt=""></a>

                        </div>

                        <div class="user-raca-classe">

                            <h2><?php echo $dados['nome'] ?></h2>
                            <span><?php echo $dados['raca'] . '/' . $dados['classe'] ?></span>

                        </div>

                    </div>

                    <nav class="nav-list">

                        <ul class="list">

                            <li class="list-items">
                                <a href="../home.php" class="link-items">home</a>
                            </li>

                            <li class="list-items">
                                <a href="../recomenda.php" class="link-items">recomendação aleatoria</a>
                            </li>

                            <li class="list-items">
                                <a href="../news.php" class="link-items">noticias</a>
                            </li>

                            <li class="list-items">
                                <a href="../sobre.php" class="link-items">sobre</a>
                            </li>

                            <li class="list-items sair-mobile">
                                <a href="../processos/user/logout.php" class="link-items">sair</a>
                            </li>

                        </ul>

                    </nav>

                </div>

                <div class="container-img-user">

                    <img src="<?php echo '../../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt="" class="img img-none">
                    <div class="menuzinho-hover hover-efeito">
                        <span class="triangulo"></span>
                        <a href="../user/Perfil-user.php">perfil</a>
                        <a href="../processos/user/logout.php">sair</a>
                    </div>
                    <i class="fas fa-bars icon-none"></i>
                </div>

            </div>

        </header>

        <main class="container-main">
            <div class="content-main">
                <div class="main-flex">
                    <div class="container-img-anime">
                        <?php
                        if (findHTTP($dados_animes['img_anime'])) {
                            print '<img src="' . $dados_animes['img_anime'] . '">';
                        } else {
                            print '<img src="../../' . $dados_animes['img_anime'] . '">';
                        }
                        ?>

                        <div class="feedback">
                            <input type="radio" name="estrela" id="vazio" value="" checked>

                            <label for="estrela_1"><i class="fa"></i></label>
                            <input type="radio" name="estrela" id="estrela_1" value="1">

                            <label for="estrela_2"><i class="fa"></i></label>
                            <input type="radio" name="estrela" id="estrela_2" value="2">

                            <label for="estrela_3"><i class="fa"></i></label>
                            <input type="radio" name="estrela" id="estrela_3" value="3">

                            <label for="estrela_4"><i class="fa"></i></label>
                            <input type="radio" name="estrela" id="estrela_4" value="4">

                            <label for="estrela_5"><i class="fa"></i></label>
                            <input type="radio" name="estrela" id="estrela_5" value="5">
                        </div>
                    </div>
                    <div class="descricao-anime">
                        <h1 class="anime-name"><?php print $dados_animes['nome'] ?></h1>
                        <div class="descri-topicos">
                            <ul class="topicos-list">
                                <li class="topicos-items corLetra"><b>Total de Episódios:</b> <?php print $dados_animes['episodios'] ?></li>
                                <li class="topicos-items corLetra"><b>Duração: </b><?php print $dados_animes['duracao'] ?></li>
                                <li class="topicos-items corLetra"><b>Gêneros :</b><?php print $dados_animes['genre'] ?></li>
                                <li class="topicos-items corLetra"><b>Autor: </b> <?php print $dados_animes['Autor'] ?></li>
                                <li class="topicos-items corLetra"><b>Diretor: </b> <?php print $dados_animes['diretor'] ?></li>
                                <li class="topicos-items corLetra"><b>Estúdio:</b> <?php print $dados_animes['estudio'] ?></li>
                                <li class="topicos-items corLetra"><b>Tipo: </b><?php print $dados_animes['tipo'] ?></li>
                                <li class="topicos-items corLetra"><b>Origem: </b><?php print $dados_animes['origem'] ?></li>
                                <li class="topicos-items corLetra"><b>Classificação: </b><?php print $dados_animes['classificacao'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container-icons-atividades">
                    <i class="material-icons icons-atvdd assistindo">ondemand_video</i>
                    <i class="material-icons icons-atvdd assistidos">personal_video</i>
                    <i class="material-icons icons-atvdd dropados">delete_outline</i>
                    <i class="material-icons icons-atvdd favoritos">favorite_border</i>
                </div>
                <script>
                    $(document).ready(() => {
                        const idAnime = window.location.search.replace("?id=", "")
                        $('.assistindo').click(() => {
                            $.ajax({
                                url: '.././processos/anime/status/assistindo.php',
                                method: 'POST',
                                data: {
                                    idAnime: idAnime
                                },
                                success: result => {
                                    alert(result)
                                }
                            })
                        })
                        $('.assistidos').click(() => {
                            $.ajax({
                                url: '.././processos/anime/status/assistidos.php',
                                method: 'POST',
                                data: {
                                    idAnime: idAnime
                                },
                                success: result => {
                                    alert(result)
                                }
                            })

                        })
                        $('.dropados').click(() => {
                            $.ajax({
                                url: '.././processos/anime/status/dropados.php',
                                method: 'POST',
                                data: {
                                    idAnime: idAnime
                                },
                                success: result => {
                                    alert(result)
                                    prencheDropados()
                                }
                            })

                        })
                        $('.favoritos').click(() => {
                            $.ajax({
                                url: '.././processos/anime/status/favoritos.php',
                                method: 'POST',
                                data: {
                                    idAnime: idAnime
                                },
                                success: result => {
                                    alert(result)
                                }
                            })
                        })
                    })
                </script>
                <div class="sinopse">
                    <h3 class="descri-sinopse">Sinopse</h3>
                    <p class="sinopse-do-anime">
                        <?php print $dados_animes['descricao'] ?>
                    </p>
                </div>
                <section class="sec-main-comentarios">
                    <div class="coment-titulo">
                        <h4 class="titulo-do-sec"></h4>
                    </div>
                    <div class="coment-user">
                        <div class="coment-img-user">
                            <img src="../../<?php echo $dados['img_perfil'] ?>">
                        </div>
                        <form id="form-comentario" class="comentario-form">
                            <textarea name="coment" id="coment-txta" placeholder="Deixe sua critica aqui"></textarea>
                            <button type="button" id="btnComenta" class="btn-comentar cor">Comentar</button>
                        </form>
                    </div>
                    <div class="comentarios">
                    </div>
                    <div class="nenhum-comentario">
                        <img src="../../Imagens/comentario.gif" alt="Gif de nenhum comentário.">
                        <span>Seja o primeiro a fazer um comentário!</span>
                    </div>
                </section>

            </div>
        </main>

        <footer class="container-footer">

            <p class="footer-p footer-des">Esse site é um projeto de TCC e não tem fins lucrativos (ainda).</p>

            <p class="footer-p footer-email">E-mail para contato: <br><a href="#">contato.animematch@gmail.com</a></p>

            <p class="footer-p footer-copy">&copy; Anime Match</p>

        </footer>
    </div>

    <script>
        $(document).ready(function() {
            var loading = true;

            $(document).click(function() {
                loading = false;
            })

            function carregaComentarios() {
                let id_anime = <?php echo $id_anime; ?>;

                $.ajax({
                    url: '../processos/anime/comentarios/carregaComentarios.php',
                    method: 'POST',
                    data: {
                        id_anime: id_anime
                    },
                    success: function(retorno) {
                        $(".comentarios").html(retorno);
                    }
                })

                $.ajax({
                    url: '../processos/anime/comentarios/contaComentarios.php',
                    method: 'POST',
                    data: {
                        id_anime: id_anime
                    },
                    success: function(retorno) {
                        $(".titulo-do-sec").html(retorno);
                    }
                })
            }

            function carregaEstrelas() {
                let id_anime = <?php echo $id_anime; ?>;

                $.ajax({
                    url: '../processos/anime/estrelas/mediaEstrelas.php',
                    method: 'POST',
                    data: {
                        id_anime: id_anime
                    },
                    success: function(retorno) {
                        if (retorno == 1) {
                            $("#estrela_1").trigger("click");
                        }

                        if (retorno == 2) {
                            $("#estrela_2").trigger("click");
                        }

                        if (retorno == 3) {
                            $("#estrela_3").trigger("click");
                        }

                        if (retorno == 4) {
                            $("#estrela_4").trigger("click");
                        }

                        if (retorno == 5) {
                            $("#estrela_5").trigger("click");
                        }
                    }
                })
            }

            carregaComentarios();
            carregaEstrelas();

            $("#btnComenta").click(function() {
                let comentario = $("#coment-txta").val();
                let id_anime = <?php echo $id_anime; ?>;

                if (comentario !== '' && id_anime !== '') {
                    $.ajax({
                        url: '../processos/anime/comentarios/comenta.php',
                        method: 'POST',
                        data: {
                            comentario: comentario,
                            id_anime: id_anime
                        },
                        success: function(retorno) {
                            $(".comentarios").html(retorno);
                            $("#coment-txta").val('');
                        }
                    })

                    $.ajax({
                        url: '../processos/anime/comentarios/contaComentarios.php',
                        method: 'POST',
                        data: {
                            id_anime: id_anime
                        },
                        success: function(retorno) {
                            $(".titulo-do-sec").html(retorno);
                        }
                    })
                }
            })

            $("[name='estrela']").click(function() {

                if (loading == false) {

                    let estrelas = $(this).val();
                    let id_anime = <?php echo $id_anime; ?>;

                    $.ajax({
                        url: '../processos/anime/estrelas/processaEstrelas.php',
                        method: 'POST',
                        data: {
                            estrelas: estrelas,
                            id_anime: id_anime
                        },
                        success: function() {
                            $(".feedback").css({
                                "transform": "rotateX(360deg)",
                                "transition-duration": "2s",
                            });

                            setTimeout(function() {
                                carregaEstrelas();
                                loading = true;
                            }, 2000);
                        }
                    })

                    $(".feedback").css({
                        "transform": "rotateX(0deg)",
                        "transition-duration": "0s",
                    });
                }
            })
            $("#coment-txta").autoResize();
            $('.cor').css('background', '<?php echo $RGB ?>')
            $('.corLetra').css('color', '<?php echo $RGB ?>')

        })
    </script>
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../../Js/menu/menu.js?<?php echo $x; ?>"></script>
    <script src="../../Js/comentario/textareaComent.js"></script>
    <script src="../../Js/tela/tela.js"></script>
</body>

</html>