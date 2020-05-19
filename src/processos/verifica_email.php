<?php
require_once('../banco/conexao.php');
require_once('../banco/includes/security.php');

$email = security($_POST['email']);

$existeConta = mysqli_query($con, "SELECT email FROM tb_usuario WHERE email = '$email'");

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if (mysqli_num_rows($existeConta) > 0) {
        echo 'Essa conta já existe!';
    }
} else {
    echo 'Email inválido!';
}

mysqli_close($con);
