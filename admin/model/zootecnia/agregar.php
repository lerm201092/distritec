<?php

$datos = array();
$datos = null;
$tabla = strtoupper( $_POST["tabla"] );
$referencia = $_POST["referencia"];

$cantRegistros = 0;

require "../../../modelo/sesion/conexion.php";
$conexion = conexion(); 

$consulta = "SELECT COUNT(*) AS CANT FROM ".$tabla." WHERE REFERENCIA = ".$_POST["referencia"];
$registros = mysqli_query($conexion, $consulta);
if ($r = mysqli_fetch_array($registros))  { $cantRegistros = $r["CANT"]; }

if($cantRegistros > 0){
    $datos["ERROR"] ="DUPLICADO";
}else{
    // Recibir Parametros
    $array = $_POST;

    // Asignacion de rutas
    $ruta_provisional = null;
    $ruta_nueva = "../../../../distritec_img/img_productos/".$referencia.".png";

    //obteniendo file
    $file = $_FILES["file"];
    if(  $file["name"] != "" && $file["name"]!=null){ $ruta_provisional = $file["tmp_name"]; }


    $consulta = "INSERT INTO ".$tabla." VALUES ('"
                                                .$array["referencia"]."','"
                                                .$array["descripcion"]."','"                                               
                                                .$array["cod_unidad"]."','"
                                                .$array["usos"]."','"
                                                .$array["beneficios"]."','"
                                                .$array["peso_g"]."','"                     
                                                .$array["color"]."','"                                                
                                                .$array["precio_und"]."','"                                      
                                                .$array["cod_linea"]."'"                                                
                                                .")";





    if ($conexion->query($consulta) === TRUE) {
        $datos["OK"] = "OK";
        if($ruta_provisional != null){
            move_uploaded_file($ruta_provisional, $ruta_nueva);
        }    
    } else {
        $datos["ERROR"] ="Error: ".$conexion->error;
    }
    
}

$json = json_encode( $datos, JSON_UNESCAPED_UNICODE); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
echo  $json; 

?>
