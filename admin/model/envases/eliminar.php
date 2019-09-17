<?php
    $datos = array();
    $datos = null;
    $tabla = $_POST["tabla"];
    $ref   = $_POST["referencia"];

    require "../../../modelo/sesion/conexion.php";
    $conexion = conexion(); 

    $sql="DELETE FROM ".$tabla." WHERE REFERENCIA = '".$ref."'";

    if (mysqli_query($conexion, $sql)) {
        $datos["OK"] = "Registo Eliminado Satisfactoriamente";
    } else {
        echo "Error deleting record: " . mysqli_error($conexion);
    }

    $json = json_encode( $datos, JSON_UNESCAPED_UNICODE); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
    echo  $json; 
?>