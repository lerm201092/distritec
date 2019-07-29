function filtro(){
    var r=0;
    $("#cajaPrincipal").html("");
    var consulta = "SELECT * FROM PRODUCTOS ";
    $("input[name=chk_precio]:checked").each(function(){
        if(r == 0){
            consulta += " WHERE (PRO_PRECIO_UNI BETWEEN "+$(this).attr("min")+" AND "+$(this).attr("max");
        }else{
            consulta += " OR PRO_PRECIO_UNI BETWEEN  "+$(this).attr("min")+" AND "+$(this).attr("max");
        }
        r++;
    });
    if(r>0){
        consulta += ") ";
    }
    var s = 0;
    $("input[name=chk_capacidad]:checked").each(function(){
        if(r == 0){
            consulta += " where (PRO_CAPACIDAD BETWEEN  "+$(this).attr("min")+" AND "+$(this).attr("max");
            s++;   
        }else{
            if(s==0){
                consulta += " AND ( PRO_CAPACIDAD BETWEEN "+$(this).attr("min")+" AND "+$(this).attr("max");
            }else{
                consulta += " OR PRO_CAPACIDAD BETWEEN "+$(this).attr("min")+" AND "+$(this).attr("max");
            }     
            s++;     
        }

        r++;
    });
    if(s>0){
        consulta += ") ";
    }

    console.log(consulta);
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