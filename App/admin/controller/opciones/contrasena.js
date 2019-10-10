function Cambiar() {
    if($("#txt_pass").val()==$("#txt_confirm").val()){
        var cant = $("#txt_pass").val();
       cant= cant.toString();
        if(  cant.length >= 6 ){
            var parametros = {"pass": $("#txt_pass").val() }
            $.ajax({
                type: "POST",
                url: "../../model/opciones/contrasena.php",
                data: parametros,
                dataType: "json",
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status + "\n" + xhr.responseText);
                    Mensaje(1, "¡Error al cargar información!", "error.png", "Para mayor información comunicarse con Sistemas." );
                },
                success: function (data) {
                   if(data["OK"]){
                        alert("¡Cambio de contraseña satisfactorio!");
                        location.href = "../../";
                   }
                }
            })
        }else{
            alert("¡Adevertencia!, La contraseña de contar de al menos seis caracteres.");
        }
       
    }else{
        alert("¡Adevertencia!, Las contraseñas no coinciden.");
    }

}