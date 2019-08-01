<?php 
  require("../sesion/conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB

  $conexion = conexion(); // CREA LA CONEXION
  $tipo = $_POST["tipo"];
  // REALIZA LA QUERY A LA DB
  $registros = mysqli_query($conexion, "SELECT * 
                                        FROM PRODUCTOS P, TIPO_PRODUCTO T 
                                        WHERE P.PRO_REFERENCIA = T.ID
                                              AND T.TIPO = '$tipo'");
  
  // RECORRE EL RESULTADO Y LO GUARDA EN UN ARRAY
  $datos = array();
  $datos = null;
  
  while ($r = mysqli_fetch_array($registros))  
  {
    $nombre_fichero = "../../view/src/images/productos/".$r[0].".jpg";
    if (file_exists($nombre_fichero)) {
      $datos[] = array(
        0 => $r[0],
        1 => ($r[1]),
        2 => ($r[11]),
        3 => $r[13],
      );
    }
  } 

  if($datos == null){
    $datos["error"] = "error";
  }
  
  $json = json_encode( $datos, JSON_UNESCAPED_UNICODE ); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
  echo  $json; 
?>