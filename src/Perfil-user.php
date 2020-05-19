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

    <link rel="stylesheet" href="../CSS/style-total/Total-menu.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-media.css">

    <link rel="stylesheet" href="../CSS/style-perfilUser/User-main.css">
    <link rel="stylesheet" href="../CSS/style-perfilUser/menu-editar.css">
    <link rel="stylesheet" href="../CSS/style-perfilUser/User-medias.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>

    <title>Perfil</title>

    <style>
        img {
            object-fit: cover;
        }
    </style>

</head>

<body>

    <div class="interface">

        <header class="container-header">

            <div class="container-logo-img">
                <img src="../Imagens/Logo.png">
            </div>

            <nav class="container-menu">

                <div class="content-profile">

                    <div class="container-profile-img">
                        <img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" id="foto_perfil">
                    </div>

                    <div class="content-nome-classe">
                        <h3>Petista</h3>
                        <legend>humano/Guerreiro</legend>
                    </div>

                </div>

                <ul class="list-nav">

                    <li class="list-item">
                        <a href="home.php" class="link-item active-link">home</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="link-item">animes recentes</a>
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

                <img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" class="verificacao">

            </div>

        </header>

        <div class="container-menu-editar">
            <!--active-menu-none-->

            <i class="fas fa-times icon-sair"></i>

            <form class="form-menu-editar">

                <h1 class="titulo-editar">Editar seu perfil</h1>

                <div class="content-editar content-nome">
                    <label for="">Nome: </label>
                    <input type="text" class="items-editar item-nome">
                </div>

                <div class="content-editar content-classe">
                    <label for="">Classe:</label>
                    <select name="" id="" class="items-editar">
                        <option value="Arqueiro">Arqueiro</option>
                        <option value="Druida">Druida</option>
                        <option value="Guerreiro">Guerreiro</option>
                        <option value="Ladino">Ladino</option>
                        <option value="Mago">Mago</option>
                        <option value="Necromante">Necromante</option>
                    </select>
                </div>

                <div class="content-editar content-raca">
                    <label for="">Raça:</label>
                    <select name="" id="" class="items-editar">
                        <option value="Angels">Angels</option>
                        <option value="Anao">Anão</option>
                        <option value="Demons">demons</option>
                        <option value="Elfo">Elfo</option>
                        <option value="Humano">Humano</option>
                        <option value="Ogro">Ogro</option>
                    </select>
                </div>

                <div class="content-editar content-sexo">
                    <label for="">Sexo:</label>
                    <select name="" id="" class="items-editar">
                        <option value="Homem">Homem</option>
                        <option value="Mulher">Mulher</option>
                        <option value="Emo">Emo</option>
                        <option value="Comunista">Comunista</option>
                        <option value="lula livre">Lula livre</option>
                        <option value="otaku">Otaku</option>
                        <option value="Capitalista">Capitalista</option>
                        <option value="Pokemon">Pokemon</option>
                    </select>
                </div>

                <div class="content-editar content-sexualidade">
                    <label for="">Sexualidade:</label>
                    <select name="" id="" class="items-editar">
                        <option value="Lesbicas">Lésbicas</option>
                        <option value="Gays">Gays</option>
                        <option value="Bisexuais">Bisexuais</option>
                        <option value="Trnassexual">Trnassexual</option>
                        <option value="Queer">Queer</option>
                        <option value="Questioning">Questioning</option>
                        <option value="Interssexuais">Interssexuais</option>
                        <option value="Asexuados">Asexuados</option>
                        <option value="Sem genero">Sem Gênero</option>
                        <option value="Simpatizantes">Simpatizantes</option>
                        <option value="Curiosos">Curiosos</option>
                        <option value="Panssexuais">Panssexuais</option>
                        <option value="Polissexuais">Polissexuais</option>
                        <option value="Friends and Family">Friends and Family</option>
                        <option value="Two-spirit">Two-spirit</option>
                        <option value="kink">Kink</option>
                    </select>
                </div>

                <button class="btn-salvar">Salvar</button>

            </form>

        </div>

        <main class="container-main">

            <section class="main-capa-peril">

                <div class="container-capa">
                    <img src="../Imagens/cavalheiros.png" alt="Sua imagem de capa">
                </div>

                <div class="container-perfil">
                    <img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt="Sua imagem de perfil" class="img_perfil" height="150" width="200">
                    <form action="processos/img_perfil.php" method="post" enctype="multipart/form-data" id="form-foto">
                        <input id="up_foto" type="file" name="arquivo" hidden />
                        <input type="text" name="id" value="<?php echo $id; ?>" hidden />
                    </form>
                </div>

            </section>

            <section class="main-descricao">

                <div class="content-nome-btn">
                    <h1 class="name-do-user"><?php echo $dados['nome']; ?></h1>
                    <div class="container-btn">
                        <input type="button" name="editar-btn" id="bttn-editar" class="btn-editar" value="Editar">
                    </div>
                </div>

                <div class="container-descricao">
                    <p><b>Classe: <?php echo $dados['classe']; ?></b> </p>
                    <p><b>Personagem Favorito: <?php echo $dados['personagem']; ?></b> </p>
                    <p><b>Descrição: <?php echo $dados['descricao']; ?></b> </p>
                </div>
                <a href="processos/logout.php">Sair</a>

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

                    <div class="container-coment">
                        <div class="container-img-rec-anime">
                            <img src="../Imagens/Dragon ball.jpg">
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

    </div>

    <script>
        $(document).ready(function() {
            $(".img_perfil").click(function() {
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
                                $(".verificacao").attr("src", '../' + data);
                            }

                        }
                    }).submit();
                }
            })
        });
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../Js/menu/menu.js"></script>
    <script src="../Js/Buttons-Perfil-User/btn-editar.js"></script>
    <script src="../Js/Buttons-Perfil-User/btns.js"></script>

</body>

</html>