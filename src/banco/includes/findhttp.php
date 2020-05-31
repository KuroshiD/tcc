<?php 
    function findHTTP($img){
        if(preg_match("@^http@i",$img)){
            return true;
        }else{
            return false;
        }
    }
?>