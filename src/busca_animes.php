<?php
    require_once('../../banco/conexao.php');
    require_once('../../banco/includes/security.php');

    session_start();
    
    if(!isset($_SESSION['logado'])){
        header('Location: ../../index.php');
    }
    $id = $_SESSION['logado'];

    $sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
    $dados = mysqli_fetch_array($sql);
    

    $x = rand(0, 99);

    $pesquisa = security($_POST['pesquisa']);

    $sql = mysqli_query($con, "SELECT * FROM tb_anime WHERE nome LIKE '%$pesquisa%'");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descri6666666666666667ption" content="">
    <meta name="keywords" content="Animes, Melhores animes, ">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Luis Gustavo, Jefferson Santos, Gabriel Paiva, Eduardo de Matos">

    <link rel="stylesheet" href="../package/css/swiper.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../../CSS/nomalize/normalize.css">
    <link rel="icon" href="../....//Imagens/favicon.ico" >

    <link rel="stylesheet" href="../../../CSS/style-total/Total-menu.css">
    <link rel="stylesheet" href="../../../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../../../CSS/style-total/Total-media.css">
    <link rel="stylesheet" href="../../../CSS/style-total/classe.css">
    
</head>
<body>
<div class="interface back">

    <header class="container-header">

        <div class="content-center">

            <div class="container-logo">

                <img src="../../../Imagens/Logo.png" alt="Logotipo desse website">

            </div>

            <div class="menu-mobile">

                <div class="content-user">

                    <div class="mobile-user">

                    <a href="Perfil-user.php"><img src="<?php echo '../../../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt=""></a>

                    </div>

                    <div class="user-raca-classe">

                        <h2><?php echo $dados['nome'] ?></h2>
                        <span><?php echo $dados['raca'].'/'.$dados['classe'] ?></span>

                    </div>

                </div>

                <nav class="nav-list">

                    <ul class="list">

                        <li class="list-items">
                            <a href="../../home.php" class="link-items">home</a>
                        </li>
                        
                        <li class="list-items">
                            <a href="#" class="link-items">recomendação aleatoria</a>
                        </li>
                        
                        <li class="list-items">
                            <a href="../../news.php" class="link-items">noticias</a>
                        </li>

                        <li class="list-items sair-mobile">
                            <a href="logout.php" class="link-items">sair</a>
                        </li>

                    </ul>

                </nav>

            </div>

            <div class="container-img-user">

                <img src="<?php echo '../../../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt="" class="menu-verifica img-none">
                <i class="fas fa-bars icon-none"></i>
            </div>

        </div>


    </header> 
        <!-- <div class="container">
            <a href="../home.php"><button><-- Home</button></a>
            <div class="animes">
                <?php
                    // while($animes = mysqli_fetch_array($sql)){
                    //     echo '<div class="anime">';
                    //     echo '<div class="image">';
                    //     echo "<img src='../../".$animes['img_anime']."' class='anime-img'>";
                    //     echo '</div>';
                    //     echo '<div class="info">';
                    //     echo '<h4>' . 'Nome: ' . $animes['nome'] . '</h4>';
                    //     echo '<h4>' . 'Gênero: ' . $animes['genre'] . '</h4>';
                    //     echo '</div>';
                    //     echo '</div>';
                    // }
                ?>
            </div>
        </div> -->

        <main class="container-main">
             <div class="main-form">

                <form action="processos/busca_animes.php" class="content-form" method="post" autocomplete="off">
                    <datalist id="sugestoes">
                    </datalist>
                    <input type="text" id="txtPes" class="txt-pes" name="pesquisa" placeholder="Ex: Bleach" list="sugestoes">
                    <button type="submit" id="btnPes" class="fa fa-search btn-pes"></button>
                </form>

            </div>
        </main>
    
    <footer class="container-footer">

            <p class="footer-des">Esse site é um projeto de TCC e não tem fins lucrativos (ainda).</p>

            <p class="footer-email">E-mail para contato: <br><a href="#">contato.animematch@gmail.com</a></p>

            <p class="footer-copy">&copy; Anime Match</p>

    </footer>

</div>

    <script>
        $("#txtPes").keyup(function(){
            var pesquisa = $(this).val();
            $.post('datalist_home.php', { pesquisa: pesquisa }, function(dados){
                $("#sugestoes").html(dados);
            })
        });
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../../../Js/menu/menu.js"></script>
</body>
</html>