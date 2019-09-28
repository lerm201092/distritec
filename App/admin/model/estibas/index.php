<?php

    $datos = array();
    $datos = null;
    $tabla = strtoupper( $_POST["tabla"] );

    $btn1 = "<a href='#' class='btn btn-sm btn-primary'><i class='fa fa-home'></i></a>";
    $btn2 = "<a href='#' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a>";

    require "../../../modelo/sesion/conexion.php";
    $conexion = conexion(); 

    $registros = mysqli_query($conexion, 'SELECT * FROM '.$tabla);
    while ($r = mysqli_fetch_array($registros))  
    {
        $btn1 = "<a href='#' id='".$r["referencia"]."' class='btn btn-sm btn-primary btn-editar'><i class='fa fa-pencil'></i></a>";
        $btn2 = "<a href='#' id='".$r["referencia"]."' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a>";

        $datos[] = array(
            "refe" => $r["referencia"],
            "desc" => ($r["descripcion"]),
            "usos" => ($r["material"]),
            "colo" => $r["color"],
            "acci" => $btn1."&nbsp;".$btn2
        );
    } 

    if($datos == null){
        $datos["error"] = "error";
    }
    
    $json = json_encode( $datos, JSON_UNESCAPED_UNICODE); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
    echo  $json; 
?>