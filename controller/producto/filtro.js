function filtro(){
    var r=0;
    $("#cajaPrincipal").html("");
    var consulta = "Select * from productos";
    $("input[name=chk_precio]:checked").each(function(){
        if(r == 0){
            consulta += " where pro_precio_uni between "+$(this).attr("min")+" AND "+$(this).attr("max");
        }else{
            consulta += " or pro_precio_uni between "+$(this).attr("min")+" AND "+$(this).attr("max");
        }
        r++;
    });

    obtenerProductos2(consulta);
}

function obtenerProductos2(consulta) {
    var parametros = {
        "consulta" : consulta
    }
    $.ajax({
        url: "../modelo/producto/filtro.php",
        type: "POST",
        data: parametros,
        success: function(resp){
            console.log(resp);
            var json         = eval("(" + resp + ")");       
            var x=1; z=1;
            crearCaja(z);
            for(var i=0; i<json.length; i++){
                var obj = objeto2(json[i]);
                $("#caja"+z).append(obj);  
                if(x==3){
                    x=0;
                    z=z+1;
                    crearCaja2(z);
                }   
                x++;
            }
        }
    });
}



function crearCaja2(x){
    var html = `<!-- inicio de fila  `+x+` -->
    <div id='caja`+x+`' class='box1'>		        

    </div>
    <!-- fin de fila  `+x+` -->`;
    $("#cajaPrincipal").append(html);
}



function objeto2(array){

    var html = `<div class='col_1_of_single1 span_1_of_single1'>					

    <a href='./single.php?ref=`+array[0]+`'>

        <div class='view1 view-fifth1'>

            <div class='top_box'>

                <h3 class='m_1' style='font-size:12px; font-weight:bold; color: #002183'>`+array[1]+`</h3>

                <p class='m_2'>`+array[11]+`</p>

                <div class='grid_img'>

                    <div class='css3'><img src='./src/images/productos/`+array[0]+`.jpg' alt='' style='width:200px;height:180px;' /></div>

                    <div class='mask1'>

                        <div class='info'>Ver más</div>

                    </div>

                </div>

                <div class='price'>$ `+array[13]+`</div>

            </div>

        </div>

        <div class='clear'></div>

    </a>

    </div>`;



    return html;

}