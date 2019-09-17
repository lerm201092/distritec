<?php

    $datos = array();
    $datos = null;
    $tabla = $_POST["tabla"];
    $referencia = $_POST["referencia"];

    require "../../../modelo/sesion/conexion.php";
    $conexion = conexion(); 

    $registros = mysqli_query( $conexion, 'SELECT * FROM '.$tabla.' WHERE REFERENCIA = '.$referencia );
    while ($r = mysqli_fetch_array($registros))  
    {
        $datos[] = $r;
    } 

    if($datos == null){
        $datos["error"] = "error";
    }
    
    $json = json_encode( $datos, JSON_UNESCAPED_UNICODE); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
    echo  $json; 
?>