<?php

    $datos = array();
    $datos = null;
    $tabla = strtoupper( $_POST["tabla"] );
    $referencia = $_POST["referencia"];

    $cantRegistros = 0;

    require "../../../modelo/sesion/conexion.php";
    $conexion = conexion(); 

    // Asignacion de rutas
    $ruta_provisional = null;
    $ruta_nueva = "../../../../distritec_img/img_productos/".$referencia.".png";

    //obteniendo file
    $file = $_FILES["file"];
    if(  $file["name"] != "" && $file["name"]!=null){ $ruta_provisional = $file["tmp_name"]; }


    $descripcion = "descripcion = '".$_POST['descripcion']."', ";
    // $accesorios = "accesorios = '".$_POST['accesorios']."', ";
    $usos = "usos = '".$_POST['usos']."', ";
    $cod_unidad = "cod_unidad = '".$_POST['cod_unidad']."', ";
    // $capacidad_ml = "capacidad_ml = '".$_POST['capacidad_ml']."', ";
    $peso_g = "peso_g = '".$_POST['peso_g']."', ";
    $beneficios = "beneficios = '".$_POST['beneficios']."', ";
    // $largo_mm = "largo_mm = '".$_POST['largo_mm']."', ";
    // $ancho_mm = "ancho_mm = '".$_POST['ancho_mm']."', ";
    // $diametro_r = "diametro_r = '".$_POST['diametro_r']."', ";
    // $altura_r = "altura_r = '".$_POST['altura_r']."', ";
    $color = "color = '".$_POST['color']."', ";
    // $material = "material = '".$_POST['material']."', ";
    $precio_und = "precio_und = '".$_POST['precio_und']."', ";
    // $contenido_pack = "contenido_pack = '".$_POST['contenido_pack']."', ";
    // $precio_pack = "precio_pack = '".$_POST['precio_pack']."', ";
    // $cod_forma = "cod_forma = '".$_POST['cod_forma']."', ";
    $cod_linea = "cod_linea = '".$_POST['cod_linea']."' ";
    // $altura_mm = "altura_mm = '".$_POST['altura_mm']."' ";
    $where = "WHERE referencia = ".$referencia;

    $consulta = "UPDATE ".$tabla." SET ".$descripcion.
                                     $usos.
                                     $cod_unidad.
                                     $beneficios.
                                     $peso_g.
                                     $color.
                                     $precio_und.
                                     $cod_linea.
                                     $where;


    if ($conexion->query($consulta) === TRUE) {
        $datos["OK"] = "OK";
        if($ruta_provisional != null){
            move_uploaded_file($ruta_provisional, $ruta_nueva);
        }   
    } else {
        $datos["ERROR"] ="Error: ".$conexion->error;
    }
            


    $json = json_encode( $datos, JSON_UNESCAPED_UNICODE); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
    echo  $json; 

?>
