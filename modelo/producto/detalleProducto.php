<?php 

  header('Access-Control-Allow-Origin: *'); 

  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");





  require("../sesion/conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB



  $conexion = conexion(); // CREA LA CONEXION



  $id = $_POST["ref"];



  // REALIZA LA QUERY A LA DB

  $registros = mysqli_query($conexion, "SELECT * FROM PRODUCTOS WHERE PRO_REFERENCIA = $id");

  

  // RECORRE EL RESULTADO Y LO GUARDA EN UN ARRAY

  $datos = array();

  $datos = null;

  

  while ($resultado = mysqli_fetch_array($registros))  

  {

    $datos[] = $resultado;

  }



  $json = json_encode( $datos, JSON_UNESCAPED_UNICODE ); // GENERA EL JSON CON LOS DATOS OBTENIDOS

  

  echo ( $json ) ; 


?>