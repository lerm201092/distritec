$().ready(function(){

    $("#txt_user").keyup(function(e){ 
        var code = e.which; // recommended to use e.which, it's normalized across browsers
        if(code==13)e.preventDefault();
        if(code==32||code==13||code==188||code==186){
            $("#txt_pass").focus();
        } 
    });


    $("#txt_pass").keyup(function(e){ 
        var code = e.which; // recommended to use e.which, it's normalized across browsers
        if(code==13)e.preventDefault();
        if(code==32||code==13||code==188||code==186){
           login();
        } 
    });
});

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
                    location.href="../admin/view/envases/index.php";
                }else{
                    alert("Usuario y/o contraseña incorrectos.");
                    $("#txt_user").focus();
                }
            }catch(error){
                alert("Se ha presentado un error, con el servidor, por favor contactar al administrador de la pagina.")
                console.error(error);
                console.error(resp);
            }
        }
    });    
}