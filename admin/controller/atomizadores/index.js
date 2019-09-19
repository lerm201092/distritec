var TABLA_PAGINA = "ATOMIZADORES";

$(document).ready(function(){
    $("#menu-derecha").html(`<li class="nav-item"><a href="./agregar.php" class="nav-link"><i class="nav-icon fa fa-plus" style="padding-right:15px;"></i><b>Registrar Prodcuto</b></a></li>`)
    CargarTabla();
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

function CargarTabla() {
    var parametros = {"tabla": TABLA_PAGINA }
    $.ajax({
        type: "POST",
        url: "../../model/"+TABLA_PAGINA.toLowerCase()+"/index.php",
        data: parametros,
        dataType: "json",
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status + "\n" + xhr.responseText);
            Mensaje(1, "¡Error al cargar información!", "error.png", "Para mayor información comunicarse con Sistemas." );
        },
        success: function (data) {
            ListarTabla(data);
        }
    })
}

function ListarTabla(json) {
    var table = $('#tblEnvases').DataTable({
        data: json,
        "language": { "url": "../../../../distritec_vendor/crud/datatable/spanish.json" },
        "destroy": true,
        "columns": [
            { data: 'refe' },
            { data: 'desc' },
            { data: 'mate' },
            { data: 'colo' },
            {data : 'acci'}
        ]
    });
    Mensaje(0);   
}

//FUNCION ELIMINAR
$(document).on("click", ".btn-danger", function (e) {
    e.preventDefault();
    var ref = $(this).attr("id");
    $("#btn-accion").attr("onclick", "Eliminar('"+ref+"')");
    Mensaje(1, "Distritec S.A.", "question.png", "¿ Desea <b>retirar</b> el registro ("+ref+") ?" );
});

$(document).on("click", ".btn-editar", function (e) {
    e.preventDefault();
    var ref = $(this).attr("id");
    $("#btn-accion").attr("onclick", "Actualizar('"+ref+"')");
    Mensaje(1, "Distritec S.A.", "question.png", "¿ Desea <b>actualizar</b> datos del registro ("+ref+") ?" );
});

function Actualizar(ref){
    location.href="actualizar.php?id="+ref;
}

function Eliminar(ref) {
    var ruta = "../../model/"+TABLA_PAGINA.toLowerCase()+"/eliminar.php";
    console.log(ruta);
    Mensaje(1, "Procesando Información", "cargando.gif", "Espere un momento..." );
    var parametros = {"tabla": TABLA_PAGINA, "referencia": ref};
    $.ajax({
        type: "POST",
        url: ruta,
        dataType : 'json',        
        data : parametros,
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status + "\n" + xhr.responseText);
            Mensaje(1, "¡Error, No se pudo eliminar el registro!", "error.png", "Para mayor información comunicarse con Sistemas." )
        },
        success: function (data) {
            $("#btn-mensaje").attr("onclick", "CargarTabla();");
            Mensaje(1, "Distritec S.A.", "success.png", "Producto <b>retirado</b> satisfactoriamente" ); 
        }
    });
}

