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
    <link rel="stylesheet" href="../CSS/normalize/nomalize.css">
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

        

        <div class="container-menu-editar active-menu-none">
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
                        <option value="Bardo">Bardo</option>
                        <option value="Berseker">Berseker</option>
                        <option value="Druida">Druida</option>
                        <option value="Guerreiro">Guerreiro</option>
                        <option value="Ladino">Ladino</option>
                        <option value="Mago">Mago</option>
                        <option value="Necromante">Necromante</option>
                        <option value="Berseker">Berseker</option>
                        <option value="Bardo">Bardo</option>
                    </select>
                </div>

                <div class="content-editar content-raca">
                    <label for="">Raça:</label>
                    <select name="" id="" class="items-editar">
                        <option value="Angels">Angel</option>
                        <option value="Anao">Anão</option>
                        <option value="Demons">demon</option>
                        <option value="Elfo">Elfo</option>
                        <option value="Humano">Humano</option>
                        <option value="Ogro">Ogro</option>
                        <option value="Demi-human">Demi-human</option>
                    </select>
                </div>

                <button class="btn-salvar">Salvar</button>

            </form>

        </div>

        <main class="container-main">

            <section class="main-capa-peril">

                <div class="container-capa">
                    <img src="<?php  echo "../" . $dados['img_capa'] ?>" alt="Sua imagem de capa" class="img_capa">
                    <form action="processos/img_capa.php" method="post" enctype="multipart/form-data" id="form-capa">
                        <input id="up_capa" type="file" name="arquivo" hidden />
                        <input type="text" name="id" value="<?php echo $id; ?>" hidden />
                        <i for="id" class="fas fa-pencil-alt icon img_capa_icon"></i>
                    </form>
                </div>
                <script>
                    $(document).ready(function() {
                        $(".img_capa_icon").click(function() {
                        $("#up_capa").trigger("click");
                    })
                    // bind 'myForm' and provide a simple callback function 
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
                                $(".verificacao").attr("src", '../' + data);
                            }                                
                        }
                    }).submit();
                }
            })
        });
                </script>
                <div class="container-perfil">
                    <img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt="Sua imagem de perfil" height="150" width="200" class="img_perfil">
                    <form action="processos/img_perfil.php" method="post" enctype="multipart/form-data" id="form-foto">
                        <input id="up_foto" type="file" name="arquivo" hidden />
                        <input type="text" name="id" value="<?php echo $id; ?>" hidden />
                        <i for="id" class="fas fa-pencil-alt icon img_perfil_icon"></i>
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