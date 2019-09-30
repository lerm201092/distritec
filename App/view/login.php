<?php include "../modelo/sesion/seguridadLogin.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Distritec</title>
    <?php include "./include/head.php"; ?>
    <!-- Estilos Propios -->
    <!-- <link rel="stylesheet" href="./src/css/my_css/somos.css"> -->
    <style>
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}


    .card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}
    </style>
</head>
<body style="background: #404040">

    <div class="container">
        <div class="row">
            <div style="width: 100%; min-width: 300px; max-width: 400px; margin: 0 auto; margin-top: 50px;">
                <div class="card">
                    <div class="card-body">
                        <div class="width:100%;">
                            <div style="text-align: center">
                            <img id="img_login" src="../../distritec_img/img_app/logo.jpg">
                            </div>                            
                        </div>
                       <p style="font-size: 16px;  color: #021084; width: 100%; font-weight: 700; text-align: center;"><u>Acceso al sistema</u></p><br><br>
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="email" style="font-size: 14px; font-weight: 600">Usuario:</label>
                                <input type="text" class="form-control" id="txt_user">
                            </div>
                            <div class="form-group">
                                <label for="pwd" style="font-size: 14px; font-weight: 600">Contraseña:</label>
                                <input type="password" class="form-control" id="txt_pass">
                            </div>
                            <!-- <div class="form-group form-check text-right">
                                <a href="#" style="font-size: 13px; font-weight: 600">He olvidado mi contraseña.</a>
                            </div> -->
                            <div class="form-group form-check text-center">
                                <a type="button" href="#" onclick="login()" class="btn btn-primary col-md-12">Iniciar Sesión</a>
                                <br><br>
                            </div>                            
                        </form>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <?php include "./include/scriptComun.php"; ?>
    <script src="../controller/sesion/login.js"></script>
</body>
</html>