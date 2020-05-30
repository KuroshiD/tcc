<?php
    require_once('../../banco/conexao.php');
    require_once('../../banco/includes/security.php');

    session_start();

    $email = security(filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING));

    $sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE email = '$email'");

    if(mysqli_num_rows($sql) == 1){
        $dados = mysqli_fetch_array($sql);
        $_SESSION['logado'] = $dados['id'];
        $resultado = 'src/home.php';
        echo $resultado;
    }else{
        echo 'Essa conta não existe!';
    }
    
?>