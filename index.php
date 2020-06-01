<?php
require_once('src/banco/conexao.php');
require_once('src/banco/includes/security.php');

if (isset($_SESSION['logado'])) {
    session_start();
    session_unset();
    session_destroy();
}

session_start();

if (isset($_POST['logar'])) {

    $saidas = array();

    $email = security($_POST['email']);
    $senha = security($_POST['senha']);

    if (!empty($email) && !empty($senha)) {
        $existeConta = mysqli_query($con, "SELECT * FROM tb_usuario WHERE email = '$email'");

        if (mysqli_num_rows($existeConta) == 1) {
            $dados = mysqli_fetch_array($existeConta);
            $senhaDB = $dados['senha'];
            $id = $dados['id'];

            if (password_verify($senha, $senhaDB)) {
                $loga = mysqli_query($con, "SELECT * FROM tb_usuario WHERE email = '$email' AND senha = '$senhaDB'");
                $_SESSION['logado'] = $dados['id'];
                header('Location: src/home.php');
            } else {
                $saidas[] = 'Senha incorreta! </br>';
            }
        } else {
            $saidas[] = 'Essa conta não existe! </br>';
        }
    } else {
        $saidas[] = 'Preencha todos os campos! </br>';
    }

    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href=".././Imagens/favicon.ico" >
    <link rel="stylesheet" href="CSS/style-home/cadastro.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    <link rel="stylesheet" href="../CSS/normalize/nomalize.css">
    
    <title>Bem-vindo</title>

</head>

<body>
    <div class="container" id="container">
        <div class="form-container cadastro-container cadastro">
            <form id="form-cad">
                <div class="cad-titulo ">
                    <h1>Crie sua Conta</h1>
                </div>
                <div class="campos-cad">
                    <input type="text" id="sigName" name="nome" placeholder="Name" class="campos" />
                    <input type="date" id="sigDate" name="nascimento" class="campos" />
                    <input type="email" id="sigEmail" name="email" placeholder="Email" class="campos" />
                    <input type="password" id="sigPass" name="senha" placeholder="Password" class="campos" />
                    <input type="password" id="sigCPass" name="rtsenha" placeholder="Confirm password" class="campos" />
                </div>
                <div class="btn-link">
                    <button type="button" name="cadastrar" class="form-button" id="btnCad">Inscrever-se</button>
                    <p class="cell-link">Já tem conta? <a href="" id="login">Entrar aqui</a>.</p>
                </div>
                <div id="resposta"></div>
                <div id="respostaOk"></div>
            </form>
        </div>
        <div class="form-container login">
            <form action="" method="POST">
                <div class="entrar-titulos">
                    <h1 id="teste">Faça seu login</h1>
                </div>
                <div class="campos-log">
                    <input type="email" id="logEmail" name="email" placeholder="Email" class="campos" required />
                    <input type="password" id="logPass" name="senha" placeholder="Password" class="campos" required />
                    <a href="#" class="senha-esqueceu">Esqueceu sua senha?</a>
                </div>
                <div class="btn-link">
                    <button id="signIN" name="logar" type="submit" class="form-button">Entrar</button>
                    <p class="cell-link">Ainda não tem conta? <a href="#" id="cadastro">Cadastre-se agora</a>.</p>
                </div>
                <p class="p_retorno">
                    <div id="respostaLogin"></div>
                    <?php
                    if (!empty($saidas)) {
                        foreach ($saidas as $saida) {
                            echo $saida;
                        }
                    }
                    ?>
                </p>
            </form>
        </div>
    </div>

    <script>
        
    </script>

    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            var userId = profile.getId(); // Do not send to your backend! Use an ID token instead.
            var userName = profile.getName();
            var userPic = profile.getImageUrl();
            var userEmail = profile.getEmail(); // This is null if the 'email' scope is not present.
            var userToken = googleUser.getAuthResponse().id_token;
            if (userName != '') {
                var dados = {
                    userId: userId,
                    userName: userName,
                    userPic: userPic,
                    userEmail: userEmail
                }

                $.post('src/processos/googleSignIn.php', dados, function(retorna) {
                    if (retorna == 'Essa conta não existe!') {
                        document.getElementById("respostaLogin").innerHTML = retorna;
                    } else {
                        window.location.href = retorna;
                    }
                });
            }
        }
    </script>

    <script>
        const linkLogin = document.getElementById('login');
        const linkCadastro = document.getElementById('cadastro');
        const formCad = document.querySelector('.cadastro');
        const fromLog = document.querySelector('.login');

        linkCadastro.addEventListener('click', () => {
            formCad.classList.remove("cadastro-container");
            fromLog.classList.add("login-container")
        });

        linkLogin.addEventListener('click', () => {
            formCad.classList.add("cadastro-container");
            fromLog.classList.remove("login-container")
        });
    </script>