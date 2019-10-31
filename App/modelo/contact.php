<?php

    require_once "./sesion/conexion.php";
    require_once "./Mail/Mail.php";

    $conexion = conexion();
 
    $pass_mail = "";
    $registros = mysqli_query($conexion, "SELECT pass_mail FROM USUARIOS WHERE nick = 'lucia'");
    while ($resultado = mysqli_fetch_array($registros)) {
        $pass_mail = $resultado["pass_mail"]; 
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        // Error messages
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $msgsubject = $_POST['subject'];
        $comments   = $_POST['comments'];
        $verify     = $_POST['verify'];

        if (trim($name) == ''){
            echo '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>¡Atención! Debe ingresar su nombre.</div>';
            exit();
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>¡Atención! Por favor, introduce una dirección de correo electrónico válida.</div>';
            exit();
        }else if (trim($msgsubject) == ''){
            echo '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>¡Atención! Por favor, introduzca un asunto.</div>';
            exit();
        }else if (trim($comments) == ''){
            echo '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>¡Atención! Por favor ingrese su mensaje.</div>';
            exit();
        }else if (!isset($verify) || trim($verify) == ''){
            echo '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>¡Atención! Por favor conteste la pregunta.</div>';
            exit();
        }else if (trim($verify) != '2')	{
            echo '<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>¡Atención! Por favor, da la respuesta correcta a la pregunta.</div>';
            exit();
        }

        $email_content = "Has sido contactado por $name acerda de $msgsubject \n\n".
                         $comments."\n\n"."Puede contactar a $name via email, $email";

        $host     = "ssl://mail.distritec.com.co";
        $username = "dcomercial@distritec.com.co";  //Colocar Correo de GMAIL
        $password = $pass_mail;  // Contraseña de correo 
        $port     = "465";

        $to            = "<dcomercial@distritec.com.co>"; // Email de quien recibe 
        $email_from    = "<".$email.">";
        $email_subject = "Has sido contactado por ".$name;
        $email_body    =  $email_content;

        $headers = array(
            'From' => $email_from,
            'To' => $to,
            'Subject' => $email_subject
        );

        $smtp = Mail::factory('smtp', array(
            'host' => 'ssl://mail.distritec.com.co',
            'port' => '465',
            'auth' => true,
            'username' => 'dcomercial@distritec.com.co',
            'password' => $pass_mail
        ));
    
    $mail = $smtp->send($to, $headers, $email_body);

        if (PEAR::isError($mail)) {
            echo("<p>" . $mail->getMessage() . "</p>");
        } else {
            echo "<h1>¡Correo electrónico enviado con éxito!</h1>";
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <br/>';
            echo '<img src="../../distritec_img/img_app/exito.jpg" />';
            echo '</div>';
        }

    }else{
        echo '<div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>¡Atención! Hubo un problema con su envío, por favor intente nuevamente.</div>';
    }
?>
