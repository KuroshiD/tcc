<?php
$id = $_SESSION['logado'];

$sql = mysqli_query($con, "SELECT * FROM tb_usuario WHERE id = '$id'");
$dados = mysqli_fetch_array($sql);

$x = rand(0, 99);



echo "
    <script>
        
    </script>
    
    "
?>