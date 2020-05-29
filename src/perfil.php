<?php
require_once('banco/conexao.php');
require_once '../vendor/autoload.php';

session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: ../index.php");
}

 
if(!isset($_GET['id'])){
    header('Location: Perfil-user.php');
}

$id = $_GET['id'];

$id_sessao = $_SESSION['logado'];

$sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
$dados = mysqli_fetch_array($sql);

if(mysqli_num_rows($sql) == 0){
    header('Location: Perfil-user.php');
}

$x = rand(0, 99);

if($id == $id_sessao){
    header('Location: Perfil-user.php');
}
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
                </div>

                <div class="container-perfil">
                    <img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt="Sua imagem de perfil" height="150" width="200" class="img_perfil">
                </div>

            </section>

            <section class="main-descricao">

                <div class="content-nome-btn">
                    <h1 class="name-do-user"><?php echo $dados['nome']; ?></h1>
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
            $("#txtPesUser").keyup(function() {
                var users = $(this).val();

                if (users != '') {
                    $.ajax({
                        url: './processos/datalist_user.php',
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