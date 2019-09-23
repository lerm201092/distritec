<?php
function medida($tabla){
    $tabla = strtoupper($tabla);
    $aux = "";
    if($tabla == "ENVASES"){
       $aux =  "(mm)";
    }elseif($tabla == "DESECHABLES"){
        $aux =  "(cm)";
    }else{
        $aux =  "(mt)";
    }
    return $aux;
}

function peso($tabla){
    $tabla = strtoupper($tabla);
    $aux = "";
    if($tabla == "ZOOTECNIA"){
       $aux =  "(Kg)";
    }else{
        $aux =  "(gr)";
    }
    return $aux;
}

function capacidad($tabla){
    $tabla = strtoupper($tabla);
    $aux = "";
    if($tabla == "ENVASES"){
       $aux =  "(ml)";
    }else{
        $aux =  "(fl.Oz)";
    }
    return $aux;
}

?>