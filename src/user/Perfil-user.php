<?php
require_once('../banco/conexao.php');
require_once '../../vendor/autoload.php';
require_once('../banco/includes/findhttp.php');
session_start();


if (!isset($_SESSION['logado'])) {
    header("Location: ../../index.php");
}

$id = $_SESSION['logado'];

$sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
$dados = mysqli_fetch_array($sql);

$x = rand(0, 99);

$R = $dados['corr'];
$G = $dados['corg'];
$B = $dados['corb'];
$RGB = "RGB($R, $G, $B)"
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../../CSS/style-total/Total-media.css">

    <link rel="stylesheet" href="../../CSS/style-perfilUser/header-menu.css">
    <link rel="stylesheet" href="../../CSS/style-perfilUser/User-main.css">
    <link rel="stylesheet" href="../../CSS/style-perfilUser/User-medias.css">

    <link rel="stylesheet" href="../../CSS/normalize/nomalize.css">
    <link rel="icon" href="../../Imagens/favicon.ico">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>

    <title><?php echo $dados['nome'] ?></title>

</head>

<body>

    <div class="interface">

        <header class="container-header">

            <div class="container">

                <div class="icon-voltar">

                    <a href="../home.php"><i class="fas fa-arrow-left arrow-voltar"></i></a>

                </div>

                <form class="form-content" id="form-user">

                    <datalist id="datalist_users">
                    </datalist>
                    <input type="text" name="" id="txtPesUser" class="pesquisa-user" placeholder="Pesquise outra pessoa" list="datalist_users" autocomplete="off">
                    <button class="btn-pesquisa-user"><i class="fa fa-search"></i></button>

                </form>

            </div>

        </header>

        <main class="container-main">

            <section class="main-capa-peril">

                <div class="container-capa">
                    <img src="<?php print "../../" . $dados['img_capa'] ?>" alt="Sua imagem de capa" class="img_capa">
                    <form action="processos/img_capa.php" method="post" enctype="multipart/form-data" id="form-capa">
                        <input id="up_capa" type="file" name="arquivo" hidden />
                        <input type="text" name="id" value="<?php echo $id; ?>" hidden />
                        <i for="id" class="fas fa-pencil-alt icon img_capa_icon" id="lapisCapa"></i>
                    </form>
                </div>

                <div class="container-perfil">
                    <img src="<?php echo '../../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt="Sua imagem de perfil" height="150" width="200" class="img_perfil">
                    <form action="processos/img_perfil.php" method="post" enctype="multipart/form-data" id="form-foto">
                        <input id="up_foto" type="file" name="arquivo" hidden />
                        <input type="text" name="id" value="<?php echo $id; ?>" hidden />
                    </form>
                    <i for="id" class="fas fa-pencil-alt icon img_perfil_icon" id="lapisPerfil"></i>
                </div>

            </section>

            <script>
                $(document).ready(function() {
                    $("#lapisCapa").click(function() {
                        $("#up_capa").trigger("click");
                    })

                    $("#up_capa").change(function() {
                        if ($(this).val() != '') {
                            $('#form-capa').ajaxForm({
                                url: '../processos/user/img_capa.php',
                                type: 'POST',
                                success: function(data) {
                                    if (data == 'Não suportado') {
                                        alert('Formato de arquivo não suportado');
                                    } else {
                                        $(".img_capa").attr("src", '../../' + data);
                                    }
                                }
                            }).submit();
                        }
                    })
                })
            </script>

            <section class="main-descricao">

                <div class="content-nome-btn">
                    <h1 class="name-do-user"><?php echo $dados['nome']; ?></h1>
                    <div class="container-btn">
                        <input type="button" name="editar-btn" id="bttn-editar" class="btn-editar cor" value="Editar">
                    </div>
                </div>

                <div class="container-descricao">
                    <p><b>Classe: </b><?php echo $dados['classe'] . " / " . $dados['raca']; ?></p>
                    <p><b>Personagem Favorito: </b><?php echo $dados['personagem']; ?> </p>
                    <p><b>Anime favorito: </b><?php echo $dados['animefav'] ?></p>
                    <p><b>Descrição: </b> <?php echo $dados['descricao']; ?></p>

                </div>

            </section>

            <div class="main-btns-interacoes abas">

                <a href="#aba_1" class="btns-interacoes active">Atividade recentes</a>
                <a href="#aba_2" class="btns-interacoes">Assistindo</a>
                <a href="#aba_3" class="btns-interacoes">Assistidos</a>
                <a href="#aba_4" class="btns-interacoes">Dropados</a>
                <a href="#aba_5" class="btns-interacoes">Favorito</a>

            </div>

            <section class="container-avd-recentes abas">

                <div id="aba_1" class="content-abas aba">

                    <div class="titulo-recentes">
                        <h2 class="ttl-rec">Atividades Recentes</h2>
                    </div>

                    <?php
                    $buscaRecentes = mysqli_query($con, "SELECT * FROM recentes WHERE id_user = $id ORDER BY data_publicacao DESC limit 5");
                    if (mysqli_num_rows($buscaRecentes) > 0) {
                        while ($recentes = mysqli_fetch_array($buscaRecentes)) {
                            if (findHTTP($recentes['img_anime'])) {
                                echo '<div class="container-coment cor">';

                                echo '<div class="container-img-rec-anime">';
                                echo '<img src="' . $recentes['img_anime'] . '" class="img-click" id="'.$recentes['id_comentario'].'">';
                                echo '</div>';
                                echo '<div class="content-coment-name">';
                                echo '<h4 class="name-coment">' . $recentes['nome_anime'] . '</h4>';
                                echo '<p class="coment leiamais">' . $recentes['descricao_anime'] . '</p>';
                                echo '</div>';

                                echo '</div>';
                            } else {
                                echo '<div class="container-coment cor">';

                                echo '<div class="container-img-rec-anime">';
                                echo '<img src="../../' . $recentes['img_anime'] . '" class="img-click" id="'.$recentes['id_comentario'].'">';
                                echo '</div>';

                                echo '<div class="content-coment-name">';
                                echo '<h4 class="name-coment">' . $recentes['nome_anime'] . '</h4>';
                                echo '<p class="coment leiamais">' . $recentes['descricao_anime'] . '</p>';
                                echo '</div>';

                                echo '</div>';
                            }
                        }
                    } else {
                        echo '<div class="nenhum-recomendado">';
                        echo    '<img src="../../Imagens/naoAdicionado.gif" alt="Gif de nenhum comentário.">';
                        echo    '<span class="nao-fez-nada-ainda">Você anida não fez nenhum comentário.</span>';
                        echo'</div>';
                    }
                    ?>

                </div>

                <div id="aba_2" class="content-abas aba">
                    <div class="titulo-recentes">
                        <h2 class="ttl-rec">Assistindo</h2>
                    </div>

                    <?php
                    $buscaAssitindos = mysqli_query($con, "SELECT 
                        *
                    FROM
                        tb_assistindo ass
                    INNER JOIN
                        tb_anime ani
                    ON
                        ass.id_anime = ani.id_anime
                    WHERE 
                        id_user = $id
                ");
                    if(mysqli_num_rows($buscaAssitindos)){
                        while ($Assistindo = mysqli_fetch_array($buscaAssitindos)) {
                            if (findHTTP($Assistindo['img_anime'])) {
                                echo '<div class="container-coment cor">';

                                echo '<div class="container-img-rec-anime">';
                                echo '<img src="' . $Assistindo['img_anime'] . '">';
                                echo '</div>';

                                echo '<div class="content-coment-name">';
                                echo '<h4 class="name-coment">' . $Assistindo['nome'] . '</h4>';
                                echo '<p class="coment leiamais">' . $Assistindo['descricao'] . '</p>';
                                echo '</div>';

                                echo '</div>';
                            } else {
                                echo '<div class="container-coment cor">';

                                echo '<div class="container-img-rec-anime">';
                                echo '<img src="../../' . $Assistindo['img_anime'] . '">';
                                echo '</div>';

                                echo '<div class="content-coment-name">';
                                echo '<h4 class="name-coment">' . $Assistindo['nome'] . '</h4>';
                                echo '<p class="coment leiamais">' . $Assistindo['descricao'] . '</p>';
                                echo '</div>';

                                echo '</div>';
                            }
                        }
                    }else{

                        echo '<div class="nenhum-recomendado">';
                        echo    '<img src="../../Imagens/naoAdicionado.gif" alt="Gif de nenhum comentário.">';
                        echo    '<span class="nao-fez-nada-ainda">Você anida não adicionou nenhum nenhum anime no assistindo.</span>';
                        echo'</div>';
                        
                    }
                    ?>
                </div>

                <div id="aba_3" class="content-abas aba">
                    <div class="titulo-recentes">
                        <h2 class="ttl-rec">Assistidos</h2>
                    </div>

                    <?php
                    $buscaAssistidos = mysqli_query($con, "SELECT 
                        *
                    FROM
                        tb_assistidos ass
                    INNER JOIN
                        tb_anime ani
                    ON
                        ass.id_anime = ani.id_anime
                    WHERE 
                        id_user = $id
                    ");
                    if (mysqli_num_rows($buscaAssistidos) > 0) {
                        while ($Assistidos = mysqli_fetch_array($buscaAssistidos)) {
                            if (findHTTP($Assistidos['img_anime'])) {
                                echo '<div class="container-coment cor">';

                                echo '<div class="container-img-rec-anime">';
                                echo '<img src="' . $Assistidos['img_anime'] . '">';
                                echo '</div>';

                                echo '<div class="content-coment-name">';
                                echo '<h4 class="name-coment">' . $Assistidos['nome'] . '</h4>';
                                echo '<p class="coment leiamais">' . $Assistidos['descricao'] . '</p>';
                                echo '</div>';

                                echo '</div>';
                            } else {
                                echo '<div class="container-coment cor">';

                                echo '<div class="container-img-rec-anime">';
                                echo '<img src="../../' . $Assistidos['img_anime'] . '">';
                                echo '</div>';

                                echo '<div class="content-coment-name">';
                                echo '<h4 class="name-coment">' . $Assistidos['nome'] . '</h4>';
                                echo '<p class="coment leiamais">' . $Assistidos['descricao'] . '</p>';
                                echo '</div>';

                                echo '</div>';
                            }
                        }
                    } else {

                        echo '<div class="nenhum-recomendado">';
                        echo    '<img src="../../Imagens/naoAdicionado.gif" alt="Gif de nenhum comentário.">';
                        echo    '<span class="nao-fez-nada-ainda">Você anida não adicionou nenhum anime para assistidos.</span>';
                        echo'</div>';
                        
                    }
                    ?>
                </div>

                <div id="aba_4" class="content-abas aba">
                    <div class="titulo-recentes">
                        <h2 class="ttl-rec">Dropados</h2>
                    </div>

                    <?php
                    $buscaDropados = mysqli_query($con, "SELECT 
                        *
                    FROM
                        tb_dropados ass
                    INNER JOIN
                        tb_anime ani
                    ON
                        ass.id_anime = ani.id_anime
                    WHERE 
                        id_user = $id
                ");
                    if(mysqli_num_rows($buscaDropados)){
                        while ($Dropados = mysqli_fetch_array($buscaDropados)) {
                            if (findHTTP($Dropados['img_anime'])) {
                                echo '<div class="container-coment cor">';

                                echo '<div class="container-img-rec-anime">';
                                echo '<img src="' . $Dropados['img_anime'] . '">';
                                echo '</div>';

                                echo '<div class="content-coment-name">';
                                echo '<h4 class="name-coment">' . $Dropados['nome'] . '</h4>';
                                echo '<p class="coment leiamais">' . $Dropados['descricao'] . '</p>';
                                echo '</div>';

                                echo '</div>';
                            } else {
                                echo '<div class="container-coment cor">';

                                echo '<div class="container-img-rec-anime">';
                                echo '<img src="../../' . $Dropados['img_anime'] . '">';
                                echo '</div>';

                                echo '<div class="content-coment-name">';
                                echo '<h4 class="name-coment">' . $Dropados['nome'] . '</h4>';
                                echo '<p class="coment leiamais">' . $Dropados['descricao'] . '</p>';
                                echo '</div>';

                                echo '</div>';
                            }
                        }
                    }else{

                        echo '<div class="nenhum-recomendado">';
                        echo    '<img src="../../Imagens/comentario.gif" alt="Gif de nenhum comentário.">';
                        echo    '<span class="nao-fez-nada-ainda">Você anida não adicionou nenhum anime para dropados.</span>';
                        echo'</div>';
                        
                    }
                    ?>
                </div>
                <div id="aba_5" class="content-abas aba">
                    <div class="titulo-recentes">
                        <h2 class="ttl-rec">Favoritos</h2>
                    </div>

                    <?php
                    $buscaFavoritos = mysqli_query($con, "SELECT 
                        *
                    FROM
                        tb_favoritos ass
                    INNER JOIN
                        tb_anime ani
                    ON
                        ass.id_anime = ani.id_anime
                    WHERE 
                        id_user = $id
                ");
                    if(mysqli_num_rows($buscaFavoritos)){
                        while ($Favoritos = mysqli_fetch_array($buscaFavoritos)) {
                            if (findHTTP($Favoritos['img_anime'])) {
                                echo '<div class="container-coment cor">';

                                echo '<div class="container-img-rec-anime">';
                                echo '<img src="' . $Favoritos['img_anime'] . '">';
                                echo '</div>';

                                echo '<div class="content-coment-name">';
                                echo '<h4 class="name-coment">' . $Favoritos['nome'] . '</h4>';
                                echo '<p class="coment leiamais">' . $Favoritos['descricao'] . '</p>';
                                echo '</div>';

                                echo '</div>';
                            } else {
                                echo '<div class="container-coment cor">';

                                echo '<div class="container-img-rec-anime">';
                                echo '<img src="../../' . $Favoritos['img_anime'] . '">';
                                echo '</div>';

                                echo '<div class="content-coment-name">';
                                echo '<h4 class="name-coment">' . $Favoritos['nome'] . '</h4>';
                                echo '<p class="coment leiamais">' . $Favoritos['descricao'] . '</p>';
                                echo '</div>';

                                echo '</div>';
                            }
                        }
                    }else{

                        echo '<div class="nenhum-recomendado">';
                        echo    '<img src="../../Imagens/favorito.gif" alt="Gif de nenhum comentário.">';
                        echo    '<span class="nao-fez-nada-ainda">Você anida não adicionou nenhum anime aos favoritos.</span>';
                        echo'</div>';
                        
                    }
                    ?>
                </div>

            </section>

        </main>

    </div>

    <script>
        $(document).ready(function() {
            $(".img_perfil_icon").click(function() {
                $("#up_foto").trigger("click");
            })
            // bind 'myForm' and provide a simple callback function 
            $("#up_foto").change(function() {
                if ($(this).val() != '') {
                    $('#form-foto').ajaxForm({
                        url: '../processos/user/img_perfil.php',
                        type: 'POST',
                        success: function(data) {
                            if (data == 'Não suportado') {
                                alert('Formato de arquivo não suportado');
                            } else {
                                $(".img_perfil").attr("src", '../../' + data);
                            }
                        }
                    }).submit();
                }
            })

            $("#txtPesUser").keyup(function() {
                var users = $(this).val();

                if (users != '') {
                    $.ajax({
                        url: '../processos/user/busca_user.php',
                        method: 'POST',
                        data: {
                            users: users
                        },
                        success: function(retorno) {
                            $("#datalist_users").html(retorno);
                        }
                    })
                }
            })
            $('.cor').css('background', '<?php echo $RGB ?>')
            $('.btns-interacoes').css('border-bottom-color', '<?php echo $RGB ?>')
        });
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../../Js/Buttons-Perfil-User/btn-editar.js"></script>
    <script src="../../Js/Buttons-Perfil-User/btns.js"></script>
    <script src="../../Js/comentario/user-coment.js"></script>
    <script src="../../Js/tela/tela.js"></script>
</body>

</html>