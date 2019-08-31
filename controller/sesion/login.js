function login() {
    var user = $("#txt_user").val();
    var pass =$("#txt_pass").val();
    var parametros = {"user":user, "pass":pass};
    $.ajax({
        url: "../modelo/sesion/login.php",
        type: "POST",
        data: parametros,
        success: function(resp)
        {
            try {
                var json         = eval("(" + resp + ")");
                if(json){
                    console.log("Acceso permitido");
                }else{
                    console.log("Acceso denegado");
                }
            }catch(error){
                alert("Se ha presentado un error, con el servidor, por favor contactar al administrador de la pagina.")
                console.error(error);
            }
        }
    });    
}