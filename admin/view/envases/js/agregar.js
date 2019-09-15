$(document).ready(function () {

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
    $("#formulario").bind("submit",function(){
        getFilePath();
        var r = confirm("Presione aceptar para guardar la información, Cancelar si desea realizar algun cambio mas.");
        if (r == true) {  
            var formData = new FormData($("#formulario")[0]);
            var ruta = "../../controller/envases/controller.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(resp)
                {
                    console.log(resp);
                }
            });       
        }
        return false;
    });
});
