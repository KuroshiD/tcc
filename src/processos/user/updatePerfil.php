    <?php
        require_once('../../banco/conexao.php');
        require_once('../../banco/includes/security.php');

        date_default_timezone_set('America/Sao_Paulo');

        session_start();

        if (!isset($_SESSION['logado'])) {
            header("Location: ../../index.php");
        }

        $id = $_SESSION['logado'];
        $sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
        $dados = mysqli_fetch_array($sql);

        if ($dados['last_update'] == null) {
            $timestamp = new DateTime();
            $data = $timestamp->format('Y-m-d');
            $update_date = mysqli_query($con, "UPDATE tb_usuario SET last_update = '$data' WHERE id = '$id'");

            $nome = security($_POST['nome']);
            $classe = security($_POST['classe']);
            $raca = security($_POST['raca']);
            $descricao = security($_POST['descricao']);
            $personagem = security($_POST['personagem']);
            $animefav = security($_POST['animefav']);
            $atualiza = mysqli_query($con, "UPDATE tb_usuario SET nome = '$nome', classe = '$classe', raca = '$raca', descricao = '$descricao', personagem = '$personagem', animefav = '$animefav' WHERE id = '$id'");
            
        } else {
            $data_atual = new DateTime();
            $last_update = new DateTime($dados['last_update']);
            $diff = abs(strtotime($last_update) - strtotime($data_atual));
            
            $years = floor($diff / (365*60*60*24));
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

            if ($days < 90) {
                $timestamp = new DateTime();
                $data = $timestamp->format('Y-m-d');
                $update_date = mysqli_query($con, "UPDATE tb_usuario SET last_update = '$data' WHERE id = '$id'");

                $nome = security($_POST['nome']);
                if($nome == ""){
                    $nome = $dados['nome'];
                }
                $classe = security($_POST['class']);
                if($classe == ""){
                    $classe = $dados['classe'];
                }
                $raca = security($_POST['raca']);
                if($raca == ""){
                    $raca = $dados['raca'];
                }
                $descricao = security($_POST['descricao']);
                if($descricao == ""){
                    $descricao = $dados['descricao'];
                }
                $personagem = security($_POST['personagem']);
                if($descricao == ""){
                    $personagem = $dados['personagem'];
                }
                $animefav = security($_POST['animefav']);
                if($descricao == ""){
                    $animefav = $dados['animefav'];
                }
                $atualiza = mysqli_query($con, "UPDATE tb_usuario SET nome = '$nome', classe = '$classe', raca = '$raca', descricao = '$descricao', personagem = '$personagem', animefav = '$animefav' WHERE id = '$id'");
            }else{
                echo 'Ainda não se passaram três meses!';
            }
        }
        header('Location: ../../user/Perfil-user.php')
    ?>