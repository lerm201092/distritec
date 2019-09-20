var TABLA_PAGINA = "ESTIBAS";

$(document).ready(function () {    

    $("#mensajeAlerta").hide();
    Mensaje(0);
    //Evento on change 
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    function getFilePath(){ $('input[type=file]').on("change", (function () { var filePath = $('#fileUpload').val(); }) ) }

    $(document).on('change', 'input[type=file]', function(e) {
        var TmpPath = URL.createObjectURL(e.target.files[0]);
        $('input[name=rutaImagen]').val(TmpPath);
        $('#imgProducto').attr('src', TmpPath);
    });

    //envio del formulario
    $("#btnEnviar").on("click",function(){
        Mensaje(1, "Distritec S.A.", "cargando.gif", "Procesando informacion, espere un momento..." );
        var sw = 0;
        $("input[requerido=SI]").each(function(){
            if($(this).val()==""){
                $("#mensajeAlerta").show();
                setTimeout(() => {
                    $("#mensajeAlerta").fadeOut(2000);
                }, 1000);                
                $(this).focus();
                sw = 1;
                return false;
            }
        });

        if(sw == 0){
            $("select[requerido=SI]").each(function(){
                if($(this).val()==""){
                    $("#mensajeAlerta").show();
                    $("#mensajeAlerta").fadeOut(4000);
                    $(this).focus();
                    sw = 1;
                    return false;
                }
            });
        }

        if(sw == 0){
            getFilePath();       
            var formData = new FormData($("#formulario")[0]);
            var ruta = "../../model/"+TABLA_PAGINA.toLowerCase()+"/agregar.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(resp)
                {
                    try {
                        var json         = eval("(" + resp + ")");
                        if(json["OK"]){
                            $("#btn-mensaje").attr("onclick", "location.href='./index.php';")
                            Mensaje(1, "Distritec S.A.", "success.png", "Producto registrado satisfactoriamente" );
                        }else if(json["ERROR"]=="DUPLICADO"){
                            Mensaje(1, "¡Advertencia!", "warning.png", "El numero de referencia ya se encuentra registrado" );
                        }
                    } catch (error) {
                        
                    }
                }
            });         
        }else{
            Mensaje(0);
        }


    });
});

function Mensaje(sw, titulo, imagen, texto){
    if(sw==0){
        $("#divMsj").addClass("d-none");
    }else{ 
        $("#btnQuestion").addClass("d-none");
        $("#btnMensaje").addClass("d-none");
        if(imagen == "question.png"){
            $("#btnQuestion").removeClass("d-none");
        }
        if(imagen == "warning.png" || imagen == "info.png" || imagen == "success.png"){
            $("#btnMensaje").removeClass("d-none");
        }
        $("#tituloMensaje").html(titulo) ;
        $("#textoMensaje").html(texto) ;
        $("#imgMensaje").attr("src", "../../../../distritec_img/img_crud/"+imagen);
        $("#divMsj").removeClass("d-none");
    }
}