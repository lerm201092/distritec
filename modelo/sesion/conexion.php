<?php

// DATOS DE CONEXION A LA BASE DE DATOS
function conexion() {
  $conexion = mysqli_connect("51.79.98.87", "distrit2_db", "DISTRI*2019", "distrit2_productos");  
  return $conexion;
}
?>