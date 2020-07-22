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
    <link rel="stylesheet" href="css/style-home/cadastro.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    <meta name="google-signin-client_id" content="158825657011-8jhq9pdj1q7l6ml0ao2i532n0ip6q8p6.apps.googleusercontent.com">
    <title>Bem-vindo</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container cadastro tudo-none">
            <form id="form-cad">
                <div class="titulos">
                    <h1>Crie sua Conta</h1>
                    <div class="container-img">
                        <img src="./Imagens/LogoPequena.png" alt="Logotipo do site">
                    </div>
                </div>
                <div class="campos-cad">
                    <input type="text" id="sigName" name="nome" placeholder="Name" class="campos anima-left" />
                    <input type="date" id="sigDate" name="nascimento" class="campos delay-cad anima-right" />
                    <input type="email" id="sigEmail" name="email" placeholder="Email" class="campos delay-cad anima-left" />
                    <input type="password" id="sigPass" name="senha" placeholder="Password" class="campos delay-cad anima-right" />
                    <input type="password" id="sigCPass" name="rtsenha" placeholder="Confirm password" class="campos delay-cad anima-left" />
                </div>
                <div class="btn-link">
                    <button type="button" name="cadastrar" class="form-button" id="btnCad">Inscrever-se</button>
                </div>
                <div id="resposta"></div>
                <div id="respostaOk"></div>
            </form>
        </div>
        <div class="form-container login">
            <form action="index.php" method="POST">
                <div class="titulos">
                    <h1>Faça seu login</h1>
                    <div class="container-img">
                        <img src="./Imagens/LogoPequena.png" alt="Logotipo do site">
                    </div>
                </div>
                <div class="campos-log">
                    <input type="email" id="logEmail" name="email" placeholder="Email" class="campos anima-left" required />
                    <input type="password" id="logPass" name="senha" placeholder="Password" class="campos delay-log anima-right" required />
                    <a href="#" class="senha-esqueceu">Esqueceu sua senha?</a>
                </div>
                <div class="btn-link">
                    <button id="signIN" name="logar" type="submit" class="form-button">Entrar</button>
                </div>
                <div id="respostaLogin">
                    <p class="p_retorno">
                        <?php
                        if (!empty($saidas)) {
                            foreach ($saidas as $saida) {
                                echo $saida;
                            }
                        }
                        ?>
                    </p>
                </div>
            </form>
        </div>
        <p class="cell-link p-log">Ainda não tem conta? <a href="#" id="cadastro">Cadastre-se agora</a>.</p>
        <p class="cell-link p-cad tudo-none">Já tem conta? <a href="#" id="login">Entrar aqui</a>.</p>
    </div>
    <script src="./Js/cadastro/cadastrar.js"></script>
    <script src="./Js/cadastro/transition.js"></script>
</body>

</html>