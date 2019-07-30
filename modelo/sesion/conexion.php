<?php

// DATOS DE CONEXION A LA BASE DE DATOS
function conexion() {
  $conexion = mysqli_connect("localhost", "root", "", "distritec");  
  mysqli_set_charset($conexion,"utf8");
  return $conexion;
}
?>