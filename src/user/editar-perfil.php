<?php
require_once('../banco/conexao.php');
require_once('../../vendor/autoload.php');
session_start();
if(!isset($_SESSION['logado'])) {
    header("Location: ../../index.php");
}

$id = $_SESSION['logado'];

$sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
$dados = mysqli_fetch_array($sql);
$R = $dados["corr"];
$B = $dados["corb"];
$G = $dados["corg"];
$RGB = "rgb($R, $G, $B)";
$x = rand(0, 99);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../../CSS/style-total/Total-media.css">

    <link rel="stylesheet" href="../../CSS/style-perfilUser/menu-editar.css">
    <link rel="stylesheet" href="../../CSS/style-perfilUser/header-menu.css">

    <link rel="stylesheet" href="../../CSS/nomalize/normalize.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>Editar seu perfil</title>

</head>

<body>

    <div class="interface">

        <header class="container-header">

            <div class="container">

                <div class="icon-voltar">

                    <a href="Perfil-user.php" class="link-voltar"><i class="fas fa-arrow-left arrow-voltar-perfil"></i>Voltar</a>

                </div>

            </div>

        </header>

        <!--  -->

        <main class="container-main">
            <!--active-menu-none-->

            <form class="form-container between-column" method="POST" action="../processos/user/updatePerfil.php">

                <h1 class="titulo-form">Editar seu perfil</h1>


                    <div class="container-campos">
                        <label class="titulo-campo">Nome de usuario:</label>
                        <input type="text" class="campo-input" name="nome" value="<?php print $dados['nome'] ?>">
                    </div>
                    <?php
                    if ($dados['sorte'] != 5000000 & $dados['sorte'] != 1 & $dados['sorte'] != 1000000) {
                    ?>
                        <div class="container-campos">
                        <label class="titulo-campo">Classe:</label>
                        <select name="class" id="" class="campo-select">
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

                    <div class="container-campos">
                        <label class="titulo-campo">Raça:</label>
                        <select name="raca" id="" class="campo-select">
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
                    <?php
                    } else {
                    ?>
                        <div class="content-editar cores">
                            <label class="titulo-campo">Defina o RGB do site</label>
                            <div class="input">
                                <input type="text" class="campos-text cor" name="corr" id="corr" value="<?php print $dados["corr"] ?>">
                                <input type="text" class="campos-text cor" name="corg" id="corg" value="<?php print $dados["corg"] ?>">
                                <input type="text" class="campos-text cor" name="corb" id="corb" value="<?php print $dados["corb"] ?>">
                            </div>
                            <div class="cor-user" style="background: <?php print $RGB ?>"></div>
                        </div>
                        <script>

                        </script>
                    <?php
                    }
                    ?>
                    <div class="container-campos">
                        <label class="titulo-campo">Anime favorito:</label>
                        <input type="text" class="campo-input" name="animefav" value="<?php print $dados['animefav'] ?>">
                    </div>

                    <div class="container-campos">
                        <label class="titulo-campo">Personagem favorito:</label>
                        <input type="text" class="campo-input" name="personagem" value="<?php print $dados['personagem'] ?>">
                    </div>

                    <div class="container-campos">
                        <label class="titulo-campo">Descricao: </label>
                        <input type="text" class="campo-input" name="descricao" value="<?php print $dados['descricao'] ?>" maxlength="255"></input>
                    </div>

                    <button class="btn-salvar classe-fundo" style="background: <?php echo $RGB ?>">Salvar</button>

                </form>

        </main>

    </div>

    <script>
        $(document).ready(() => {
            $(".cor").keyup(() => {
                R = $("#corr").val()
                G = $("#corg").val()
                B = $("#corb").val()
                $(".cor-user").css("background", `rgb(${R}, ${G}, ${B})`)
            })
        })
    </script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

</html>