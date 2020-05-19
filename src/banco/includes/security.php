<?php
    function security($input){
        global $con;
        $campo = mysqli_escape_string($con, $input);
        $campo = htmlspecialchars($campo);
        return $campo;
    }
?>