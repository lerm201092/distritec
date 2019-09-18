<?php 
  require("../sesion/conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB
  $conexion = conexion(); // CREA LA CONEXION


  $tabla = $_POST["tabla"];
  $id = $_POST["ref"];
    // RECORRE EL RESULTADO Y LO GUARDA EN UN ARRAY
    $datos = array();
    $datos = null;

  // REALIZA LA QUERY A LA DB
  $registros = mysqli_query($conexion, "SELECT * FROM ".$tabla." WHERE REFERENCIA = $id");
  while ($resultado = mysqli_fetch_array($registros)) {
    $datos[] = $resultado;
  }

  $json = json_encode( $datos, JSON_UNESCAPED_UNICODE ); // GENERA EL JSON CON LOS DATOS OBTENIDOS
  echo ( $json ) ; 
?>