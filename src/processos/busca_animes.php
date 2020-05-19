<?php
    require_once('../banco/conexao.php');
    require_once('../banco/includes/security.php');

    session_start();
    
    if(!isset($_SESSION['logado'])){
        header('Location: ../index.php');
    }

    $pesquisa = security($_POST['pesquisa']);

    $sql = mysqli_query($con, "SELECT * FROM tb_anime WHERE nome LIKE '%$pesquisa%'");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../package/css/swiper.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/style-total/Total-menu.css">
    <link rel="stylesheet" href="../../CSS/style-total/Total-main.css">
    <link rel="stylesheet" href="../../CSS/style-total/Total-media.css">
    <link rel="stylesheet" href="../../CSS/style-home/home-main.css">
    <link rel="stylesheet" href="../../CSS/style-home/slider.css">
    <link rel="stylesheet" href="../../CSS/style-home/home-medias.css">
    <title>Animes</title>
    <style>
        .anime {
            text-align: justify;
            background: #191919;
            width: 30vw;
            color: white;
            padding: 20px;
            border-bottom: 1px solid white;
        }
    </style>
</head>
<body>
    <center>
        <div class="container">
            <a href="../home.php"><button><-- Home</button></a>
            <div class="animes">
                <?php
                    while($animes = mysqli_fetch_array($sql)){
                        echo '<div class="anime">';
                        echo '<div class="image">';
                        echo '<img src=' . $animes['img_anime'] . '>';
                        echo '</div>';
                        echo '<div class="info">';
                        echo '<h4>' . 'Nome: ' . $animes['nome'] . '</h4>';
                        echo '<h4>' . 'Gênero: ' . $animes['genre'] . '</h4>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </center>
</body>
</html>