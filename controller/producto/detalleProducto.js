detalleProducto();


function detalleProducto() {
    $.ajax({
        url: "../modelo/producto/detalleProducto.php",
        type: "POST",
        data: "ref="+referencia,
        success: function(resp)
        {

            console.log(resp);
            var json         = eval("(" + resp + ")");
            $("#imagenPrincipal").attr({"src": "./src/images/productos/"+json[0][0]+".jpg"});           
            $("#p_descripcion").text( json[0][1] );
            $("#p_precio").text("$ " + json[0][13] );
            $("#p_referencia").html("Referencia: <span style='font-size:14px; font-weight:500'>" + json[0][0] +"</span>" );
            $("#p_uso").html("Usos y/o valores agregados: <span style='font-size:14px; font-weight:500'>" + json[0][4] +"</span>" );
            $("#p_accesorios").html("Accesorios: <span style='font-size:14px; font-weight:500'>" + json[0][2] +"</span>" );
            $("#td_peso").text(json[0][6]);
            $("#td_dr").text(json[0][7]);
            $("#td_ar").text(json[0][8]);

/*             $("#td_base").text(resp[0][]);            
            $("#td_ancho").text(resp[0][]); */
            
            $("#td_altura").text(json[0][10]);            
            $("#td_color").text(json[0][11]);
            $("#td_material").text(json[0][12]);

        }
    });
}