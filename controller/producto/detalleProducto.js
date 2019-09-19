detalleProducto();

function detalleProducto() {
    $.ajax({
        url: "../modelo/producto/detalleProducto.php",
        type: "POST",
        data: {"ref":referencia, "tabla": TABLA},
        success: function(resp)
        {
            try {
                var json         = eval("(" + resp + ")");
                console.log(json);
                if(json){
                    $("#img_producto").attr("src", "../../../distritec_img/img_productos/"+json[0][0]+".png");
                    $("#descripcion_producto").text(json[0]["descripcion"]);
                    
                    if(json[0]["referencia"]){$("#td_referencia").text(json[0]["referencia"]);}else{ $("#td_referencia").parent("tr").hide()}
                    if(json[0]["usos"]){$("#td_usos").text(json[0]["usos"]);}else{ $("#td_usos").parent("tr").hide()}
                    if(json[0]["accesorios"]){$("#td_accesorios").text(json[0]["accesorios"]);}else{ $("#td_accesorios").parent("tr").hide()}
                    if(json[0]["peso_g"]){$("#td_peso").text(json[0]["peso_g"]);}else{ $("#td_peso").parent("tr").hide()}
                    if(json[0]["color"]){$("#td_color").text(json[0]["color"]);}else{ $("#td_color").parent("tr").hide()}
                    if(json[0]["material"]){$("#td_material").text(json[0]["material"]);}else{ $("#td_material").parent("tr").hide()}
                    if(json[0]["diametro_mm"]){$("#td_diametro").text(json[0]["diametro_mm"]);}else{ $("#td_diametro").parent("tr").hide()}         
                    if(json[0]["altura_mm"]){$("#td_altura_mm").text(json[0]["altura_mm"]);}else{ $("#td_altura_mm").parent("tr").hide()}           
                    if(json[0]["capacidad_ml"]){$("#td_capacidad").text(json[0]["capacidad_ml"]);}else{ $("#td_capacidad").parent("tr").hide()}
                    if(json[0]["diametro_r"]){$("#td_diametro_r").text(json[0]["diametro_r"]);}else{ $("#td_diametro_r").parent("tr").hide()}                    
                    if(json[0]["altura_r"]){$("#td_altura_r").text(json[0]["altura_r"]);}else{ $("#td_altura_r").parent("tr").hide()}


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