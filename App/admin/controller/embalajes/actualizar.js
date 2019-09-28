var TABLA_PAGINA = "EMBALAJES";

$(document).ready(function(){
    $("#mensajeAlerta").hide();
    buscarProducto();


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
            var ruta = "../../model/"+TABLA_PAGINA.toLowerCase()+"/actualizar.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(resp)
                {
                    console.log(resp);
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

function buscarProducto() {
    var parametros = {"tabla": TABLA_PAGINA, "referencia" : REFERENCIA }
    $.ajax({
        type: "POST",
        url: "../../model/"+TABLA_PAGINA.toLowerCase()+"/buscar.php",
        data: parametros,
        dataType: "json",
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status + "\n" + xhr.responseText);
            Mensaje(1, "¡Error al cargar información!", "error.png", "Para mayor información comunicarse con Sistemas." );
        },
        success: function (data) {
            console.log(data);
            if(data[0]["referencia"]){ $("input[name=referencia]").val(data[0]["referencia"]); }
            if(data[0]["descripcion"]){ $("input[name=descripcion]").val(data[0]["descripcion"]); }
            if(data[0]["accesorios"]){ $("input[name=accesorios]").val(data[0]["accesorios"]); }
            if(data[0]["cod_unidad"]){ $("input[name=cod_unidad]").val(data[0]["cod_unidad"]); }
            if(data[0]["usos"]){ $("input[name=usos]").val(data[0]["usos"]); }
            if(data[0]["capacidad_ml"]){ $("input[name=capacidad_ml]").val(data[0]["capacidad_ml"]); }
            if(data[0]["peso_g"]){ $("input[name=peso_g]").val(data[0]["peso_g"]); }            
            if(data[0]["diametro_mm"]){ $("input[name=diametro_mm]").val(data[0]["diametro_mm"]); }
            if(data[0]["espesor_mm"]){ $("input[name=espesor_mm]").val(data[0]["espesor_mm"]); }
            if(data[0]["largo_mm"]){ $("input[name=largo_mm]").val(data[0]["largo_mm"]); }
            if(data[0]["altura_mm"]){ $("input[name=altura_mm]").val(data[0]["altura_mm"]); }
            if(data[0]["ancho_mm"]){ $("input[name=ancho_mm]").val(data[0]["ancho_mm"]); }
            if(data[0]["diametro_r"]){ $("input[name=diametro_r]").val(data[0]["diametro_r"]); }
            if(data[0]["altura_r"]){ $("input[name=altura_r]").val(data[0]["altura_r"]); }
            if(data[0]["color"]){ $("input[name=color]").val(data[0]["color"]); }
            if(data[0]["material"]){ $("input[name=material]").val(data[0]["material"]); }
            if(data[0]["precio_und"]){ $("input[name=precio_und]").val(data[0]["precio_und"]); }
            if(data[0]["contenido_pack"]){ $("input[name=contenido_pack]").val(data[0]["contenido_pack"]); }
            if(data[0]["precio_pack"]){ $("input[name=precio_pack]").val(data[0]["precio_pack"]); }
            if(data[0]["cod_forma"]){ $("select[name=cod_forma]").val(data[0]["cod_forma"]); }
            if(data[0]["cod_linea"]){ $("select[name=cod_linea]").val(data[0]["cod_linea"]); }
            Mensaje(0);
        }
    })
}

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