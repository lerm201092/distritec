obtenerProductos();

function obtenerProductos() {
    var parametros = {
        "tipo" : tipo_producto_inicial
    }
    $.ajax({
        url: "../modelo/producto/obtenerProductos.php",
        type: "POST",
        data: parametros,
        success: function(resp){
            var json         = eval("(" + resp + ")");    
            if(json["error"]){
                setTimeout(() => { 
                    $("#cajaEspera").addClass("hide");    
                    $("#pronohay").text("Te invitamos a seguir navegando en el sitio, hay una gran variedad de productos para vos!") ;             
                    $("#cajaNohay").removeClass("hide");
                }, 400);
            } else{
                var x=1; z=1;
                crearCaja(z);
                for(var i=0; i<json.length; i++){
                    var obj = objeto(json[i]);
                    $("#caja"+z).append(obj);  
                    if(x==3){
                        x=0;
                        z=z+1;
                        crearCaja(z);
                    }   
                    x++;
                }
                setTimeout(() => { 
                    $("#cajaEspera").addClass("hide");               
                    $("#cajaPrincipal").removeClass("hide");
                }, 400);
            } 
            
        }
    });
}

function crearCaja(x){
    var html = `<!-- inicio de fila  `+x+` -->
    <div id='caja`+x+`' class='box1'>		        

    </div>
    <!-- fin de fila  `+x+` -->`;
    $("#cajaPrincipal").append(html);
}



function objeto(array){

    var html = `<div class='col_1_of_single1 span_1_of_single1' style='width:33.3%; height: 300px;'>					

    <a href='./single.php?ref=`+array[0]+`&tipo=`+tipo_producto_inicial+`'>

        <div class='view1 view-fifth1'>

            <div class='top_box'>

                <h3 class='m_1' style='font-size:12px; font-weight:bold; color: #002183'>`+array[1]+`</h3>

                <p class='m_2'>`+array[2]+`</p>

                <div class='grid_img'>

                    <div class='css3'><img src='./src/images/productos/`+array[0]+`.jpg' alt='' style='width:200px;height:180px;' /></div>

                    <div class='mask1'>

                        <div class='info'>Ver más</div>

                    </div>

                </div>

                <div class='price'>$ `+array[3]+`</div>

            </div>

        </div>

        <div class='clear'></div>

    </a>

    </div>`;



    return html;

}