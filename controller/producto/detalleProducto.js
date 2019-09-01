detalleProducto();

function detalleProducto() {
    $.ajax({
        url: "../modelo/producto/detalleProducto.php",
        type: "POST",
        data: "ref="+referencia,
        success: function(resp)
        {
            try {
                var json         = eval("(" + resp + ")");
                console.log(json);
                if(json){
                    $("#img_producto").attr("src", "./src/images/productos/"+json[0][0]+".png");
                    $("#descripcion_producto").text(json[0][1]);
                    
                    $("#td_referencia").text(json[0][0]);
                    $("#td_usos").text(json[0][4]);

                    $("#td_accesorios").text(json[0][2]);
                    $("#td_peso").text(json[0][6]);
                    $("#td_color").text(json[0][11]);

                    $("#td_material").text(json[0][12]);
                    $("#td_diametro").text(json[0][9]);
                    $("#td_altura").text(json[0][10]);

                    $("#td_diametro_r").text(json[0][7]);
                    $("#td_altura_r").text(json[0][8]);

                }else{
                    alert("Tabla vacia");
                }
            } catch (error) {
                alert("Error");
                console.error(error);
                console.error(resp);
            }
        }
    });
}