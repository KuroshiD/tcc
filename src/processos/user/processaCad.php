<?php
require_once('../../banco/conexao.php');
require_once('../../banco/includes/security.php');

$nome = security($_POST['nome']);
$email = security($_POST['email']);
$senha = security($_POST['senha']);
$rtsenha = security($_POST['rtsenha']);
$nascimento = security($_POST['nascimento']);

if ($senha == $rtsenha && !empty($nome) && !empty($email) && !empty($senha) && !empty($rtsenha)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $existeConta = mysqli_query($con, "SELECT email FROM tb_usuario WHERE email = '$email'");

        if (mysqli_num_rows($existeConta) == 0) {
            $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
            $cadastra = mysqli_query($con, "INSERT INTO tb_usuario (nome, email, senha, nascimento) VALUES ('$nome', '$email', '$senhaSegura', '$nascimento')");
            echo 'Sua conta foi criada :)';
        } else {
            echo 'Essa conta já existe!';
        }
    } else {
        echo 'Email inválido!';
    }
} else {
    if ($senha != $rtsenha) {
        echo 'Senhas não coincidem!';
    }
}

mysqli_close($con);
