<?php

    session_start();
    $datos = array();
    $datos = null;
    $tabla = "USUARIOS";
    $pass = $_POST["pass"];
    $tipo = $_POST["tipo"];

    $campo = "pass";

    if($tipo == "mail"){
        $campo = "pass_mail";
    }

    $pass = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 10]);

    $referencia = $_SESSION["id_distritec"];

    $cantRegistros = 0;

    require "../../../modelo/sesion/conexion.php";
    $conexion = conexion(); 

    $descripcion = $campo." = '". $pass."'";
    $where = " WHERE nick = '".$referencia."'";

    $consulta = "UPDATE ".$tabla." SET ".$descripcion. 
                                     $where;

                                     $consulta = str_ireplace("''", "NULL", $consulta);


    if ($conexion->query($consulta) === TRUE) {
        $datos["OK"] = "OK"; 
    } else {
        $datos["ERROR"] ="Error: ".$conexion->error;
    }           


    $json = json_encode( $datos, JSON_UNESCAPED_UNICODE); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
    echo  $json; 

?>
