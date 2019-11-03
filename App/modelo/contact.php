<?php

    require_once "./sesion/conexion.php";
    require_once "./Mail/Mail.php";

    $conexion = conexion();
 
    $pass_mail = "";
    $registros = mysqli_query($conexion, "SELECT test FROM USUARIOS WHERE nick = 'Lucia'");
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
            echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                <title>Document</title>
            </head>
            <body style='background:#424242'>
                <center>
                    <div style='width:80%; max-width: 500px; background: white; margin-top:50px; padding: 20px;  border-radius: 5px;'>
                       <img src='../../distritec_img/img_app/logo.jpg' alt='' /> 
                       <p>¡Correo enviado satisfactoriamente, nos estaremos contactando con usted para brindarle mayor información!</p>
                    <br> 
                       <p>Redireccionando a la pagina principal. <span id='sp_seg'>7</span> Segundos</p>
                    </div>
                </center>
                <script>        
                        setInterval(function(){ 
                            var seg = parseInt(document.getElementById('sp_seg').outerText);
                            document.getElementById('sp_seg').innerText = seg-1;     
                            if(seg == 1){
                                location.href ='../view/contatenos.php';
                            }            
                         }, 1000);
                </script>
            </body>
            </html>";
        }

    }else{
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <title>Document</title>
        </head>
        <body style='background:#424242'>
            <center>
                <div style='width:80%; max-width: 500px; background: white; margin-top:50px; padding: 20px;  border-radius: 5px;'>
                   <img src='../../distritec_img/img_app/logo.jpg' alt='' /> 
                   <p>¡Ah ocurrido un problema al enviar su correo por intente nuevamente!</p>
                <br> 
                   <p>Redireccionando a la pagina principal. <span id='sp_seg'>7</span> Segundos</p>
                </div>
            </center>
            <script>        
                    setInterval(function(){ 
                        var seg = parseInt(document.getElementById('sp_seg').outerText);
                        document.getElementById('sp_seg').innerText = seg-1;     
                        if(seg == 1){
                            location.href ='../view/contatenos.php';
                        }            
                     }, 1000);
            </script>
        </body>
        </html>";
    }
?>
