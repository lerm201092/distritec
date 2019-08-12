function filtro(aux){
    var x = aux.attr("num_filtro");
    if(aux.is(":checked")){
        console.log(x+"---");
        $("div[filtro_capacidad='"+x+"']").show();
    }else{
        console.log(x);
        $("div[filtro_capacidad='"+x+"']").hide();
    }
}
