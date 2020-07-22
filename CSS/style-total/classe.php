<?php
require_once('../../src/banco/conexao.php');
session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: ../../index.php");
}

$id = $_SESSION['logado'];

$sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
$dados = mysqli_fetch_array($sql);
$R = $dados["corr"];
$B = $dados["corb"];
$G = $dados["corg"];
$RGB = "rgb($R, $G, $B)";
?>
<style>
    .classe-texto{
        color: <?php print $RGB ?>;
    }
    .classe-fundo{
        background: <?php print $RGB ?>;
    }
</style>