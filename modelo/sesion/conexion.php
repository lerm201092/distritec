<?php
 
function conexion() {
 $conexion = mysqli_connect("localhost", "root", "", "distritec");  
  mysqli_set_charset($conexion,"utf8");
   return $conexion;
 }


/*

 function conexion() {
   $conexion = mysqli_connect("51.79.98.87", "distrit2_db", "DISTRI*2019", "distrit2_productos");  
   mysqli_set_charset($conexion,"utf8");
   return $conexion;
 }

*/


?>