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


  // REALIZA LA QUERY A LA DB
  $registros = mysqli_query($conexion, 'SELECT * FROM '.$tabla.$where);
  
  // RECORRE EL RESULTADO Y LO GUARDA EN UN ARRAY
  $datos = array();
  $datos = null;
  
  while ($r = mysqli_fetch_array($registros))  
  {
    $nombre_fichero = "../../../distritec_img/img_productos/".$r[0].".png";
    if (file_exists($nombre_fichero)) {
      $filtro_capacidad = 0;
      $filtro_forma = 0;
      if($r["capacidad_ml"]){$filtro_capacidad=$r["capacidad_ml"];}
      if($r["cod_forma"]){$filtro_forma=$r["cod_forma"];}
      $datos[] = array(
        0 => $r["referencia"],
        1 => $r["descripcion"],
        2 => $filtro_capacidad,
        3 => $filtro_forma
      );
    }
  } 

  if($datos == null){
    $datos["error"] = "error";
  }
  
  $json = json_encode( $datos, JSON_UNESCAPED_UNICODE); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
  echo  $json; 
?>