<?php 
  require("../sesion/conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB

  $conexion = conexion(); // CREA LA CONEXION

  // REALIZA LA QUERY A LA DB
  $registros = mysqli_query($conexion, "SELECT * FROM PRODUCTOS");
  
  // RECORRE EL RESULTADO Y LO GUARDA EN UN ARRAY
  $datos = array();
  $datos = null;
  
  while ($r = mysqli_fetch_array($registros))  
  {
    $datos[] = array(
      0 => $r[0],
      1 => ($r[1]),
      2 => ($r[11]),
      3 => $r[13],
    );
  } 
  $json = json_encode( $datos, JSON_UNESCAPED_UNICODE ); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
  echo  $json; 
?>