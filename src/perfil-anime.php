<?php 
    require_once('banco/conexao.php');

    session_start();

    if(!isset($_SESSION['logado'])){
        header("Location: ../index.php");
    }

    $id = $_SESSION['logado'];

    $sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
    $dados = mysqli_fetch_array($sql);
    

    $x = rand(0, 99);

    if(!isset($_GET['id'])){
        header("Location: home.php");
    }
    $id_anime = $_GET['id'];
    $select = mysqli_query($con, "SELECT * FROM tb_anime WHERE id_anime = '$id_anime'");
    $dados_animes = mysqli_fetch_array($select);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../CSS/style-total/Total-menu.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../CSS/style-total/Total-media.css">

    <link rel="stylesheet" href="../CSS/style-perfilAnime/main.css">
    <link rel="stylesheet" href="../CSS/style-perfilAnime/medias.css">


    <title><?php print $dados_animes['nome']?></title>

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

                    <a href="Perfil-user.php"><img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt=""></a>

                </div>

                <div class="user-raca-classe">

                    <h2><?php echo $dados['nome'] ?></h2>
                    <span><?php echo $dados['raca'].'/'.$dados['classe'] ?></span>

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
                    <a href="noticias.php" class="link-items">noticias</a>
                </li>

                <li class="list-items sair-mobile">
                    <a href="processos/logout.php" class="link-items">sair</a>
                </li>

            </ul>

        </nav>

    </div>

    <div class="container-img-user">

        <img src="<?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?>" alt="" class="menu-verifica">
        <!-- </?php echo '../' . $dados['img_perfil'] . '?x = ' . $x; ?> -->
    </div>

</div>


</header> 
        <main class="container-main">
            <div class="content-main">
                <div class="main-flex">
                    <div class="container-img-anime">
                        <img src="../<?php print $dados_animes['img_anime']?>">
                        <div class="feedback">
                            <span>&starf;</span>
                            <span>&starf;</span>
                            <span>&starf;</span>
                            <span>&starf;</span>
                            <span>&starf;</span>
                        </div>
                    </div>
                    <div class="descricao-anime">
                        <h1 class="anime-name"><?php print $dados_animes['nome']?></h1>
                        <div class="descri-topicos">
                            <ul class="topicos-list">
                                <li class="topicos-items"><b>Total de Episódios:</b> <?php print $dados_animes['episodios']?></li>
                                <li class="topicos-items"><b>Duração: </b><?php print $dados_animes['duracao']?></li>
                                <li class="topicos-items"><b>Gêneros :</b><?php print $dados_animes['genre']?></li>
                                <li class="topicos-items"><b>Autor: </b> <?php print $dados_animes['Autor']?></li>
                                <li class="topicos-items"><b>Diretor: </b> <?php print $dados_animes['diretor']?></li>
                                <li class="topicos-items"><b>Estúdio:</b> <?php print $dados_animes['estudio']?></li>
                                <li class="topicos-items"><b>OVAs: </b><?php print $dados_animes['ovas']?></li>
                                <li class="topicos-items"><b>Filmes: </b><?php print $dados_animes['filmes']?></li>
                                <li class="topicos-items"><b>Classificação: </b><?php print $dados_animes['classificacao']?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sinopse">
                    <h3 class="descri-sinopse">Sinopse</h3>
                    <p class="sinopse-do-anime">
                        <?php print $dados_animes['descricao']?>
                    </p>
                </div>
                <section class="sec-main-comentarios">
                    <div class="coment-titulo">
                        <h4 class="titulo-do-sec">23 comentários</h4>
                    </div>
                    <div class="coment-user">
                        <div class="coment-img-user">
                            <img src="../Imagens/perfil.jpg">
                        </div>
                        <textarea name="txta-coment" id="coment-txta" cols="30" rows="10" placeholder="Deixe sua critica aqui"></textarea>
                    </div>    
                </section> 
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </main> 
        <footer class="container-footer">

            <p class="footer-des">Esse site é um projeto de TCC e não tem fins lucrativos (ainda).</p>

            <p class="footer-email">E-mail para contato: <br><a href="#">contato.animematch@gmail.com</a></p>

            <p class="footer-copy">&copy; Anime Match</p>

        </footer>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../Js/menu/menu.js"></script>
</body>

</html>