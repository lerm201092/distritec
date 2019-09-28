<?php 
  require("../sesion/conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB

  $conexion = conexion(); // CREA LA CONEXION
  $tabla = strtoupper( $_POST["tabla"] );
  $where = $_POST["linea"];
  if($where != "0"){
    $where = " WHERE COD_LINEA = '$where'";
  }else{
    $where = "";
  }

    
  // RECORRE EL RESULTADO Y LO GUARDA EN UN ARRAY
  $datos = array();
  $datos = null;
  $divisor = 0;
  $cont = 0;

  if($tabla == "ENVASES" || $tabla == "DESECHABLES" ){
    $registros = mysqli_query($conexion, 'SELECT MAX(capacidad_ml)/5 AS CANT FROM '.$tabla);
    if ($r = mysqli_fetch_array($registros)) { $divisor = $r["CANT"]; }
    $datos["divisor"] = $divisor;
  }

  // REALIZA LA QUERY A LA DB
  $registros = mysqli_query($conexion, 'SELECT * FROM '.$tabla.$where);
  while ($r = mysqli_fetch_array($registros))  
  {
    $nombre_fichero = "../../../distritec_img/img_productos/".$r[0].".png";
    if (file_exists($nombre_fichero)) {
      $filtro_capacidad = 0;
      $filtro_forma = 0;
      
      if( tabla_capacidad($tabla) == true ){ if($r["capacidad_ml"]){$filtro_capacidad=$r["capacidad_ml"];} }
      if( tabla_forma($tabla) == true ){ if($r["cod_forma"]){$filtro_forma=$r["cod_forma"];} }


      $datos["data"][] = array(
        0 => $r["referencia"],
        1 => $r["descripcion"],
        2 => $filtro_capacidad,
        3 => $filtro_forma
      );
    }

    $cont++;
  } 

  if($cont == 0){
    $datos["error"] = "error";
  }
  
  $json = json_encode( $datos, JSON_UNESCAPED_UNICODE); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
  echo  $json; 



  function tabla_capacidad($tabla){
    $array = array("ENVASES");
    $longitud = count($array);
 
    //Recorro todos los elementos
    for($i=0; $i<$longitud; $i++)
    {
      if($array[$i] == $tabla){
        return true;
      }
    }
    return false;
  }

  function tabla_forma($tabla){
    $array = array("ENVASES");
    $longitud = count($array);
 
    //Recorro todos los elementos
    for($i=0; $i<$longitud; $i++)
    {
      if($array[$i] == $tabla){
        return true;
      }
    }
    return false;
  }
?>