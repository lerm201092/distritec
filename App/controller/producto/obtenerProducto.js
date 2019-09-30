obtenerProductos();

function obtenerProductos() {
    var parametros = {
        "tabla" : tipo_producto_inicial,
        "linea" : linea_producto
    }

    $.ajax({
        url: "../modelo/producto/obtenerProductos.php",
        type: "POST",
        data: parametros,
        success: function(resp){
            try {
                var json         = eval("(" + resp + ")");    
                if(json["error"]){ 
                    Json_Vacio(); 
                    console.log("1");
                    $("#FILTRO_CAP").html("<p style='font-size: 12px; font-weight: 600; width:100%;'>No disponible.</p>")
                    $("#FILTRO_FOR").html("<p style='font-size: 12px; font-weight: 600; width:100%;'>No disponible.</p>")
                }else{                   

                    if(tipo_producto_inicial.toUpperCase() != "ENVASES" && tipo_producto_inicial.toUpperCase() != "DESECHABLES" ){
                        console.log("3");
                        $("#FILTRO_CAP").html("<p style='font-size: 12px; font-weight: 600; width:100%;'>No disponible.</p>")
                        $("#FILTRO_FOR").html("<p style='font-size: 12px; font-weight: 600; width:100%;'>No disponible.</p>")
                    }

                    if(json["divisor"]){
                        var divisor = parseInt(json["divisor"]), cont = 5;
                        $("label[tipo=lbl_capacidad]").each(function () {
                            if(cont == 5){
                                $(this).append("<span>"+divisor*4+"&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;Superior</span> ")
                            }else{
                                $(this).append("<span>"+(divisor*(cont-1))+"&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;"+((divisor*cont)-1)+"</span> ")
                            }
                            cont--;
                        });
                    }

                    console.log(json);
                    if(json["data"]){
                        for(var i=0; i<json["data"].length; i++){
                            var filtro = Filtro_Capacidad(json["data"][i], json["divisor"]);
                            var forma = Filtro_Forma(json["data"][i]);
                            Crear_Caja(i, filtro,forma, json["data"][i], tipo_producto_inicial);
                        }
                    }
                    
                    setTimeout(() => { 
                        $("#cajaEspera").addClass("hide");               
                        $("#cajaPrincipal").removeClass("hide");
                    }, 400);
                }
            } catch ( error ) {
                alert("Error al cargar pagina");
                console.error(error);
                console.error(resp);
            }

            
        }
    });
}


function Filtro_Capacidad(array, divisor){
    var divisor = parseInt(divisor);
    var capacidad = array[2];
    var filtro_capacidad = 0;
    if(capacidad>0){
        var capacidad = array[2];
        if(capacidad <= divisor ){ filtro_capacidad = 0; }
        if(capacidad > divisor && capacidad <= (divisor*2) ){  filtro_capacidad = 1;  }    
        if(capacidad > (divisor*2) && capacidad <= (divisor*3) ){ filtro_capacidad = 2;   }    
        if(capacidad > (divisor*3) && capacidad <= (divisor*4) ){ filtro_capacidad = 3;   }   
        if(capacidad > (divisor*4)){ filtro_capacidad = 4; }
    }
    return filtro_capacidad;
}

function Filtro_Forma(array) {
    var filtro_forma = 0;
    if(array[3]){
       filtro_forma = array[3]
    }
    return filtro_forma;
}


function Json_Vacio (){
    setTimeout(() => { 
        $("#cajaPrincipal").addClass("hide");   
        $("#cajaEspera").addClass("hide");    
        $("#pronohay").text("Te invitamos a seguir navegando en el sitio, hay una gran variedad de productos para vos!") ;             
        $("#cajaNohay").removeClass("hide");
    }, 400);
}


function Crear_Caja(x, filtro_capacidad, filtro_forma, Obj, tabla){

    var columnas = "3";

    if(tabla.toUpperCase() == "ENVASES" || tabla.toUpperCase() == "DESECHABLES"){
        columnas = "4";
    }

    var html = `<!-- inicio de fila  `+x+` -->
                <div tipo='cajaElemento' id='caja`+x+`' class='col-xs-12 col-sm-6 col-md-`+columnas+` contenedorCaja' filtro_capacidad='`+filtro_capacidad+`'  filtro_forma='`+filtro_forma+`'>	
                    <div class="cajaElemento"  class='col-md-12'>		
                        <a href='./single.php?ref=`+Obj[0]+`&tipo=`+tipo_producto_inicial+`'>
                            <div class='grid_img'>
                                        <div class='css3'><img src='../../distritec_img/img_productos/`+Obj[0]+`.png' alt='' style='max-width: 100%; max-height: 200px;' /></div>
                                    </div>
                            <div class='view1 view-fifth1 detalleProducto'>
                                <div class='top_box'>                                    
                                    <div>
                                        <h3 class='m_1' style='font-size:12px; font-weight:bold; color: #002183'>`+Obj[1]+`</h3>
                                        <p class='m_2'>Ref : `+Obj[0]+`</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class='clear'></div>
                        </a>
                    </div>
                </div>
                <!-- fin de fila  `+x+` -->`;

    $("#cajaPrincipal").prepend(html);
}

