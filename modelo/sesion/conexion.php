<?php
 
    function conexion() {
        $servidor = "LOCAL";    // 1. LOCAL    2. WEB

        if($servidor == "LOCAL"){
          $conexion = mysqli_connect("localhost", "root", "", "distritec");  
        }else{
          $conexion = mysqli_connect("51.79.98.87", "distrit2_db", "DISTRI*2019", "distrit2_productos"); 
        }
        
        mysqli_set_charset($conexion,"utf8");
        return $conexion;
    }
?>