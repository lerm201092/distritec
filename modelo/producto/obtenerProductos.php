<?php 
  require("../sesion/conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB

  $conexion = conexion(); // CREA LA CONEXION
  $tabla = $_POST["tabla"];
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
    $nombre_fichero = "../../admin/view/productos/".$r[0].".png";
    if (file_exists($nombre_fichero)) {
      $datos[] = array(
        0 => $r[0],
        1 => ($r[1]),
        2 => ($r[2]),
        3 => $r[3],
        4 => $r[4]
      );
    }
  } 

  if($datos == null){
    $datos["error"] = "error";
  }
  
  $json = json_encode( $datos, JSON_UNESCAPED_UNICODE); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
  echo  $json; 
?>