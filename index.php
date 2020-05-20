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
    <link rel="stylesheet" href="./CSS/normalize/nomalize.css">
    <title>Bem-vindo</title>
    <style>
        .p_retorno {
            color: red;
            font-family: 'Roboto';
            font-weight: '600';
            text-align: center;
        }

        .vazio::-webkit-input-placeholder {
            color: red;
            font-weight: bold;
        }

        #respostaLogin {
            background: rgba(300, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto';
            font-weight: bold;
            color: white
        }

        #resposta {
            text-align: center;
            color: red;
            font-family: 'Roboto';
            font-weight: bold;
        }

        #respostaOk {
            text-align: center;
            color: green;
            font-family: 'Roboto';
            font-weight: bold;
        }
    </style>
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
            <form action="index.php" method="POST">
                <div class="entrar-titulos">
                    <h1 id="teste">Faça seu login</h1>
                    <span>ou use sua conta do Google</span>
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
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
        $(document).ready(function() {
            $('#sigName').focusout(function() {
                if ($(this).val() == '') {
                    $("#sigName").css("border", "1.5px solid red");
                    $("#sigName").attr("placeholder", "Informe o nome");
                    $("#sigName").addClass("vazio");
                } else {
                    $("#sigName").css("border", "none");
                    $("#sigName").attr("placeholder", "Name");
                    $("#sigName").removeClass("vazio");
                }
            })

            $('#sigDate').focusout(function() {
                if ($(this).val() == '') {
                    $("#sigDate").css({
                        "border": "1.5px solid red",
                        "color": "red",
                        "font-weight": "bold"
                    });
                } else {
                    $("#sigDate").css({
                        "border": "none",
                        "color": "black",
                        "font-weight": "normal"
                    });
                }
            })

            $('#sigEmail').focusout(function() {
                var email = $(this).val();

                function validaEmail(email) {
                    var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                    return filtro.test(email);
                }

                if (email != '') {
                    $("#sigEmail").css("border", "none");
                    $("#sigEmail").attr("placeholder", "Name");
                    $("#sigEmail").removeClass("vazio");

                    if (validaEmail(email)) {
                        $.ajax({
                            url: './src/processos/verifica_email.php',
                            method: 'POST',
                            data: {
                                email: email
                            },
                            success: function(result) {
                                if (result != '') {
                                    $('#resposta').fadeIn().html(result);
                                    $("#sigEmail").css("border", "1.5px solid red");
                                } else {
                                    $('#resposta').fadeIn().html('');
                                    $("#sigEmail").css("border", "none");
                                }
                            }
                        })
                    } else {
                        alert('Email inválido!');
                        $("#sigEmail").css("border", "1.5px solid red");
                    }

                } else {
                    $("#sigEmail").css("border", "1.5px solid red");
                    $("#sigEmail").attr("placeholder", "Informe o email");
                    $("#sigEmail").addClass("vazio");
                }
            })

            $('#sigPass').focusout(function() {
                if ($(this).val() == '') {
                    $("#sigPass").css("border", "1.5px solid red");
                    $("#sigPass").attr("placeholder", "Informe a senha");
                    $("#sigPass").addClass("vazio");
                } else {
                    $("#sigPass").css("border", "none");
                    $("#sigPass").attr("placeholder", "Password");
                    $("#sigPass").removeClass("vazio");
                }
            })

            $('#sigCPass').focusout(function() {
                if ($(this).val() == '') {
                    $("#sigCPass").css("border", "1.5px solid red");
                    $("#sigCPass").attr("placeholder", "Confirme a senha");
                    $("#sigCPass").addClass("vazio");
                } else {
                    $("#sigCPass").css("border", "none");
                    $("#sigCPass").attr("placeholder", "Confirm password");
                    $("#sigCPass").removeClass("vazio");
                }
            })

            $('#btnCad').click(function() {
                var nome = $('#sigName').val();
                var email = $("#sigEmail").val();
                var senha = $("#sigPass").val();
                var rtsenha = $("#sigCPass").val();
                var nascimento = $("#sigDate").val();

                if (nome == '' || email == '' || senha == '' || rtsenha == '' || nascimento == '') {
                    if ($("#sigName").val() == '') {
                        $("#sigName").css("border", "1.5px solid red");
                        $("#sigName").attr("placeholder", "Informe o nome");
                        $("#sigName").addClass("vazio");
                    } else {
                        $("#sigName").css("border", "1.5px solid white");
                        $("#sigName").attr("placeholder", "Name");
                        $("#sigName").removeClass("vazio");
                    }

                    if ($("#sigDate").val() == '') {
                        $("#sigDate").css({
                            "border": "1.5px solid red",
                            "color": "red",
                            "font-weight": "bold"
                        });
                    } else {
                        $("#sigDate").css({
                            "border": "none",
                            "color": "black",
                            "font-weight": "normal"
                        });
                    }

                    if ($("#sigEmail").val() == '') {
                        $("#sigEmail").css("border", "1.5px solid red");
                        $("#sigEmail").attr("placeholder", "Informe o email");
                        $("#sigEmail").addClass("vazio");
                    } else {
                        $("#sigEmail").css("border", "1.5px solid white");
                        $("#sigEmail").attr("placeholder", "Email");
                        $("#sigEmail").removeClass("vazio");
                    }

                    if ($("#sigPass").val() == '') {
                        $("#sigPass").css("border", "1.5px solid red");
                        $("#sigPass").attr("placeholder", "Informe a senha");
                        $("#sigPass").addClass("vazio");
                    } else {
                        $("#sigPass").css("border", "1.5px solid white");
                        $("#sigPass").attr("placeholder", "Password");
                        $("#sigPass").removeClass("vazio");
                    }

                    if ($("#sigCPass").val() == '') {
                        $("#sigCPass").css("border", "1.5px solid red");
                        $("#sigCPass").attr("placeholder", "Confirme a senha");
                        $("#sigCPass").addClass("vazio");
                    } else {
                        $("#sigCPass").css("border", "1.5px solid white");
                        $("#sigCPass").attr("placeholder", "Confirm password");
                        $("#sigCPass").removeClass("vazio");
                    }

                    $('#resposta').html('Preencha todos os campos!');
                }

                if (senha != '' && rtsenha != '' && senha != rtsenha) {
                    $('#resposta').html('As senhas não correspondem!');
                }

                $.ajax({
                    url: './src/processos/processaCad.php',
                    method: 'POST',
                    data: {
                        nome: nome,
                        nascimento: nascimento,
                        email: email,
                        senha: senha,
                        rtsenha: rtsenha
                    },
                    success: function(result) {
                        if (result != '') {
                            if (result == 'Sua conta foi criada :)') {
                                $('#form-cad').trigger('reset');
                                $("#respostaOk").html(result);
                                setTimeout(function() {
                                    $('#respostaOk').fadeOut('Slow');
                                }, 3000);
                            } else {
                                $('#resposta').fadeIn().html(result);
                                setTimeout(function() {
                                    $('#resposta').fadeOut('Slow');
                                }, 3000);
                            }
                        }
                    }
                })
            })
        })
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