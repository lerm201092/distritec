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
  
  while ($r = mysqli_fetch_array($registros))  
  {
    $datos[] = array(
      0 => $r[0],
      1 => $r[1],
      2 => $r[11],
      3 => $r[13],
    );
  }

  $json = json_encode( $datos ); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
  echo  $json; 
?>