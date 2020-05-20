<?php
    require_once('../banco/conexao.php');
    require_once('../banco/includes/security.php');

    $id = security($_POST['id']);

    $sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
    $dados = mysqli_fetch_array($sql);
    $foto_atual = $dados['img_capa'];

    $foto = security($_FILES['arquivo']['name']); //Variável que recebe a foto e o nome do arquivo
    $tipo = security($_FILES['arquivo']['type']); //Variável que recebe o tipo do arquivo
    $formatos = array(1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/png'); //Array com os formatos válidos de arquivo
    $foto = str_replace($foto, $id . $foto, $foto); //Função que remove espaços e adiciona o id ao final do nome da imagem
    $foto = strtolower($foto); //Função que torna minúsculas todas as letras no nome do arquivo
    $teste = array_search($tipo, $formatos); //Variável que testa se o tipo de arquivo captado está presente no array

    if ($teste == true && !empty($foto)) { //Realiza as instruções abaixo se o teste retornar positivo
        if($foto_atual != 'Imagens/server/capa_default.jpg'){
            unlink('../../' . $foto_atual);
        }
        move_uploaded_file($_FILES['arquivo']['tmp_name'], "../../Imagens/users/capa/" . $foto); //Função que coloca o arquivo no diretório "../../Imagens/users/[nome da foto]"
        $caminho = "Imagens/users/capa/" . $foto; //Variável que recebe o caminho e o nome do arquivo
        $insere = mysqli_query($con, "UPDATE tb_usuario SET img_capa ='$caminho' WHERE id = '$id'"); //Consulta SQL que insere o caminho da imagem no banco de dados
        echo $caminho;
    } else {
        echo 'Não suportado';
    }
?>
