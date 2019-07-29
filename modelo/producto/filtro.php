<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

    $consulta = $_POST["consulta"];
  require("../sesion/conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB

  $conexion = conexion(); // CREA LA CONEXION

  // REALIZA LA QUERY A LA DB
  $registros = mysqli_query($conexion, $consulta);
  
  // RECORRE EL RESULTADO Y LO GUARDA EN UN ARRAY
  $datos = array();
  $datos = null;
  
  while ($resultado = mysqli_fetch_array($registros))  
  {
    $datos[] = $resultado;
  }

  $json = json_encode( $datos, JSON_UNESCAPED_UNICODE ); // GENERA EL JSON CON LOS DATOS OBTENIDOS
  
  echo ( $json ) ; 

  // MUESTRA EL JSON GENERADO
  /*   header("Content-Type: text/html; charset=UTF-8"); */
  /*   header('Content-Type: application/json'); */
?>