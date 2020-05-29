<?php
    require_once('../banco/conexao.php');
    require_once('../banco/includes/security.php');

    session_start();

    $id = $_SESSION['logado'];
    $users = security($_POST['users']);

    $buscaUsers = mysqli_query($con, "SELECT nome FROM tb_usuario WHERE id != '$id' AND nome LIKE '$users%' LIMIT 15");

    while($usersRetornados = mysqli_fetch_array($buscaUsers)){
        echo '<option value="' . $usersRetornados['nome'] . '">' . $usersRetornados['nome'] . '</option>';
    }
?>