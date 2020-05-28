<?php
require_once('banco/conexao.php');
require_once '../vendor/autoload.php';

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

    <link rel="stylesheet" href="../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-media.css">
    <link rel="icon" href=".././Imagens/favicon.ico">
    <link rel="stylesheet" href="../CSS/style-perfilUser/header-menu.css">
    <link rel="stylesheet" href="../CSS/style-perfilUser/User-main.css">
    <link rel="stylesheet" href="../CSS/style-perfilUser/menu-editar.css">
    <link rel="stylesheet" href="../CSS/style-perfilUser/User-medias.css">
    <link rel="stylesheet" href="../CSS/normalize/nomalize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>

    <title><?php echo $dados['nome'] ?></title>

</head>

<body>

    <div class="interface">



        <div class="container-menu-editar active-menu-none">
            <!--active-menu-none-->

            <i class="fas fa-times icon-sair"></i>

            <form class="form-menu-editar" method="POST" action="./processos/updatePerfil.php">
                <h1 class="titulo-editar">Editar seu perfil</h1>


                <div class="content-editar content-nome">
                    <label for="">Nome: </label>
                    <input type="text" class="items-editar item-nome" name="nome" value="<?php print $dados['nome'] ?>">
                </div>

                <div class="content-editar content-classe">
                    <label for="">Classe:</label>
                    <select name="class" id="" class="items-editar">
                        <option value="<?php print $dados['classe']; ?>" selected disabled><?php print $dados['classe'] ?></option>
                        <option value="Adventurer">Adventurer</option>
                        <option value="Arqueiro">Arqueiro</option>
                        <option value="Bardo">Bardo</option>
                        <option value="Berseker">Berseker</option>
                        <option value="Druida">Druida</option>
                        <option value="Guerreiro">Guerreiro</option>
                        <option value="Ladino">Ladino</option>
                        <option value="Mago">Mago</option>
                        <option value="Necromante">Necromante</option>
                        <option value="Berseker">Berseker</option>
                        <option value="Bardo">Bardo</option>
                        <option value="loli">Loli</option>
                    </select>
                </div>

                <div class="content-editar content-raca">
                    <label for="raca">Raça:</label>
                    <select name="raca" id="" class="items-editar">
                        <option value="<?php print $dados['raca']; ?>" selected disabled><?php print $dados['raca'] ?></option>
                        <option value="Angels">Angel</option>
                        <option value="Anao">Anão</option>
                        <option value="Demons">demon</option>
                        <option value="Elfo">Elfo</option>
                        <option value="Humano">Humano</option>
                        <option value="Ogro">Ogro</option>
                        <option value="Demi-human">Demi-human</option>
                    </select>
                </div>
                <div class="content-editar content-classe">
                    <label for="">Anime favorito: </label>
                    <input type="text" class="items-editar item-nome" name="animefav" value="<?php print $dados['animefav'] ?>">
                </div>
                <div class="content-editar content-raca">
                    <label for="">Personagem Favorito: </label>
                    <input type="text" class="items-editar item-nome" name="personagem" value="<?php print $dados['personagem'] ?>">
                </div>
                <div class="content-editar content-descricao">
                    <label for="">Descricao: </label>
                    <input type="text" class="items-editar item-nome" name="descricao" value="<?php print $dados['descricao'] ?>" maxlength="255"></input>
                </div>
                <button class="btn-salvar">Salvar</button>

            </form>

        </div>

        <header class="container-header">

            <div class="container">

                <div class="icon-voltar">

                    <a href="home.php"><i class="fas fa-arrow-left arrow-voltar"></i></a>

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
                    <img src="<?php print "../" . $dados['img_capa'] ?>" alt="Sua imagem de capa" class="img_capa">
                    <!-- </?php echo "../" . $dados['img_capa'] ?> -->
                    <form action="processos/img_capa.php" method="post" enctype="multipart/form-data" id="form-capa">
                        <input id="up_capa" type="file" name="arquivo" hidden />
                        <input type="text" name="id" value="<?php echo $id; ?>" hidden />
                        <i for="id" class="fas fa-pencil-alt icon img_capa_icon" id="lapisCapa"></i>
                    </form>
                </div>

                <div class="container-perfil">
                    <img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt="Sua imagem de perfil" height="150" width="200" class="img_perfil">
                    <!-- </?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?> -->
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
                                url: './processos/img_capa.php',
                                type: 'POST',
                                success: function(data) {
                                    if (data == 'Não suportado') {
                                        alert('Formato de arquivo não suportado');
                                    } else {
                                        $(".img_capa").attr("src", '../' + data);
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
                        <input type="button" name="editar-btn" id="bttn-editar" class="btn-editar" value="Editar">
                    </div>
                </div>

                <div class="container-descricao">
                    <p><b>Classe: </b><?php echo $dados['classe'] . " / " . $dados['raca']; ?></p>
                    <p><b>Personagem Favorito: </b><?php echo $dados['personagem']; ?> </p>
                    <p><b>Anime favorito: </b><?php echo $dados['animefav'] ?></p>
                    <p><b>Descrição: </b> <?php echo $dados['descricao']; ?></p>

                </div>

            </section>

            <div class="main-btns-interacoes">

                <button type="button" id="" class="btns-interacoes btn-atvddR active">Atividade recentes</button>
                <button type="button" id="" class="btns-interacoes btn-assistindo">Assistindo</button>
                <button type="button" id="" class="btns-interacoes btn-assistidos">Assistidos</button>
                <button type="button" id="" class="btns-interacoes btn-dropados">Dropados</button>
                <button type="button" id="" class="btns-interacoes btn-favorito">Favorito</button>

            </div>

            <section class="container-avd-recentes">

                <div class="content-recentes">

                    <div class="titulo-recentes">
                        <h2 class="ttl-rec">Atividades Recentes</h2>
                    </div>

                    <?php
                    $buscaRecentes = mysqli_query($con, "SELECT * FROM recentes WHERE id = $id ORDER BY data_publicacao DESC");
                    while ($recentes = mysqli_fetch_array($buscaRecentes)) {
                        echo '<div class="container-coment">';

                            echo '<div class="container-img-rec-anime">';
                                echo '<img src="../' . $recentes['img_anime'] . '">';
                            echo '</div>';

                            echo '<div class="content-coment-name">';
                                echo '<h4 class="name-coment">' . $recentes['nome'] . '</h4>';
                                echo '<p class="coment">' . $recentes['descricao'] . '</p>';
                            echo '</div>';
                            
                        echo '</div>';
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
                        url: './processos/img_perfil.php',
                        type: 'POST',
                        success: function(data) {
                            if (data == 'Não suportado') {
                                alert('Formato de arquivo não suportado');
                            } else {
                                $(".img_perfil").attr("src", '../' + data);
                            }
                        }
                    }).submit();
                }
            })

            $("#txtPesUser").keyup(function() {
                var users = $(this).val();

                if (users != '') {
                    $.ajax({
                        url: './processos/busca_user.php',
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
        });
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../Js/Buttons-Perfil-User/btn-editar.js"></script>
    <script src="../Js/Buttons-Perfil-User/btns.js"></script>

</body>

</html>