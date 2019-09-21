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
                console.log(resp);
                var json         = eval("(" + resp + ")");    
                if(json["error"]){ 
                    Json_Vacio(); 
                }else{
                    for(var i=0; i<json.length; i++){
                        var filtro = Filtro(json[i]);
                        Crear_Caja(i, filtro, json[i]);
                    }
                    setTimeout(() => { 
                        $("#cajaEspera").addClass("hide");               
                        $("#cajaPrincipal").removeClass("hide");
                    }, 400);
                }
            } catch (error) {
                alert("Error al cargar pagina");
                console.error(error);
                console.error(resp);
            }

            
        }
    });
}


function Filtro(array){
    var filtro_capacidad = 0;
    if(array["capacidad_ml"]){
        var capacidad = array[4];
        if(capacidad <= 1000 ){ filtro_capacidad = 0; }
        if(capacidad > 1000 && capacidad <= 2000 ){  filtro_capacidad = 1;  }    
        if(capacidad > 2000 && capacidad <= 5000 ){ filtro_capacidad = 2;   }    
        if(capacidad > 5000 && capacidad <= 7000 ){ filtro_capacidad = 3;   }   
        if(capacidad > 7000){ filtro_capacidad = 4; }
    }
    return filtro_capacidad;
}


function Json_Vacio (){
        setTimeout(() => { 
            $("#cajaEspera").addClass("hide");    
            $("#pronohay").text("Te invitamos a seguir navegando en el sitio, hay una gran variedad de productos para vos!") ;             
            $("#cajaNohay").removeClass("hide");
        }, 400);
}


function Crear_Caja(x, filtro_capacidad, Obj){

    var html = `<!-- inicio de fila  `+x+` -->
                <div id='caja`+x+`' class='col-xs-12 col-sm-6 col-md-4 contenedorCaja'>	
                    <div class="cajaElemento" tipo='cajaElemento' filtro_capacidad='`+filtro_capacidad+`' class='col-md-12'>		
                        <a href='./single.php?ref=`+Obj[0]+`&tipo=`+tipo_producto_inicial+`'>
                            <div class='grid_img'>
                                        <div class='css3'><img src='../../../distritec_img/img_productos/`+Obj[0]+`.png' alt='' style='max-width: 100%; max-height: 200px;' /></div>
                                    </div>
                            <div class='view1 view-fifth1 detalleProducto'>
                                <div class='top_box'>                                    
                                    <div>
                                        <h3 class='m_1' style='font-size:12px; font-weight:bold; color: #002183'>`+Obj[1]+`</h3>
                                        <p class='m_2'>`+Obj[2]+`</p>
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

