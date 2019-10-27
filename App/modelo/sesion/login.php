<?php 

  require("./conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB

  $conexion = conexion(); // CREA LA CONEXION
  $user = $_POST["user"];
  $pass = $_POST["pass"];

    // RECORRE EL RESULTADO Y LO GUARDA EN UN ARRAY
  $datos = array();
  $datos = null;

  // REALIZA LA QUERY A LA DB
  $registros = mysqli_query($conexion, "SELECT * FROM USUARIOS WHERE nick = '$user'");
  while ($resultado = mysqli_fetch_array($registros)) {
    $contrasena = $resultado["pass"]; 
    if(password_verify( $pass , $contrasena)){
    // if( $pass == $contrasena){
      $datos[] = $resultado;
      session_start();
      $_SESSION["id_distritec"] = $resultado["nick"];
      $_SESSION["name_distritec"] = $resultado["name"];
    }
  }

  $json = json_encode( $datos, JSON_UNESCAPED_UNICODE ); // GENERA EL JSON CON LOS DATOS OBTENIDOS
  echo ( $json ) ; 
?>