function filtro(){
    var cont = 0;
    var cant = 0;
    $("#cajaNohay").addClass("hide");
    $("div[tipo=cajaElemento]").css({"display" : "none"});
    $("input[name=chk_capacidad]:checked").each(function(){
        var x = $(this).attr("num_filtro");
        $("div[tipo=cajaElemento][filtro_capacidad='"+x+"']").css({"display" : "initial"});
        cant += $("div[tipo=cajaElemento][filtro_capacidad='"+x+"']").toArray().length;
        cont++;
    });

    if(cont==0){
        $("div[tipo=cajaElemento]").css({"display" : "initial"});
    }else{
        if(cant==0){
            setTimeout(() => { 
                $("#cajaEspera").addClass("hide");    
                $("#pronohay").text("No se encontraron productos con las especificaciones requeridas.") ;         
                $("#cajaNohay").removeClass("hide");
            }, 200);
        }
    }
    console.log(cant);
}
