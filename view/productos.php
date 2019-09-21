<!DOCTYPE HTML>
<html>
<head>
    <title>Distritec</title>
    <?php include "./include/headShop.php"; ?> 

    <style>

    #cajaPrincipal{
        padding-bottom: 150px;
    }
    .contenedorCaja{
        border: .5px solid #9990; width: 100%; height: 300px;
        margin:0; padding: 0;
    } 

    .cajaElemento{ 
        position: absolute;
        width:100%;
        height:100%;
        padding: 0;
        margin:0;
        border: 1px solid #e3e3e3;
    }

    .cajaElemento a{
        position: absolute;
        width:100%;
        margin:0;
        padding:15px;
        height: 100%;

    }

    .detalleProducto{
        position: absolute;
        bottom:0;
        width:100%;
    }

    .contenedorCaja:hover {
        transform: scale(0.97); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        -webkit-box-shadow: 1px 0px 11px -2px rgba(152,156,240,1);
-moz-box-shadow: 1px 0px 11px -2px rgba(152,156,240,1);
box-shadow: 1px 0px 11px -2px rgba(152,156,240,1);
    }

/*



    .cajaElemento a.detalleProducto{
        position: relative;
        bottom:0;
        width:100%;
    }


    </style>
</head>
<body>
    <?php include "./include/header.php"; ?>
    <div class="login" id="contenedor_principal" style="position : absolute ; width:100%;">
        <div class="wrap">
            <div class="rsidebar span_1_of_left">
                <section class="sky-form">
                    
                    <!-- Filtro Forma -->
                    <h4>Capacidad</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-12">
                            <label class="checkbox">
                                <input type="checkbox" onclick="filtro();" name="chk_capacidad" num_filtro="4" ><i></i>7001 - Superior
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" onclick="filtro();" name="chk_capacidad" num_filtro="3" ><i></i>5001 - 7000
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" onclick="filtro();" name="chk_capacidad" num_filtro="2" ><i></i>2001 - 5000
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" onclick="filtro();" name="chk_capacidad" num_filtro="1" ><i></i>1001 - 2000
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" onclick="filtro();" name="chk_capacidad" num_filtro="0" ><i></i>0 - 1000
                            </label>
                        </div>
                    </div>
                    <!-- Fin filtro capacidad -->

                    <!-- Filtro Forma -->
                    <h4 class="hide" tipo="filtro_forma">Forma</h4>
                    <div class="hide" tipo="filtro_forma" class="row row1 scroll-pane">
                        <div class="col col-12">
                            <label class="checkbox">
                                <input type="checkbox" onclick="filtro2($(this));" name="chk_forma" forma="cil"  disabled><i></i>Cilíndrica
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" onclick="filtro2($(this));" name="chk_forma" forma="rec"  disabled><i></i>Rectangular
                            </label>
                        </div>
                    </div>
                    <!-- Fin filtro capacidad -->
			</div>
            <div  class="cont span_2_of_3">
                <div class="row" id="cajaPrincipal"> 
                
                
                </div>
            </div>
            <div id="cajaEspera" class="cont span_2_of_3">
                <div style="width: 100%; text-align: center; padding-top: 20px;margin-bottom: 50px;">
                    <img id="imagenPrincipal" src="../../../distritec_img/img_app/cargando.gif">
                </div>                
            </div>
            <div id="cajaNohay" class="cont span_2_of_3 hide">
                <div style="width: 100%; text-align: center; padding-top: 20px;margin-bottom: 50px;">
                    <img src="../../../distritec_img/img_app/opps.png" alt="" style="width:200px;height:auto">                    
                    <h1 style="font-size:24px; color: #002183; font-weight:bold; margin-top: 20px;">PRODUCTOS NO DISPONIBLES</h1>
                    <p style="font-weight:bold;margin-top:15px" id="pronohay">Te invitamos a seguir navegando en el sitio, hay una gran variedad de productos para vos!</p>
                </div>                
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <?php include "./include/footer.php"; ?>
    <script>
        var tipo_producto_inicial = "<?php $x=$_GET["tipo"]; echo $x; ?>"; 
        var linea_producto = "<?php $x=$_GET["linea"]; echo $x; ?>"; 

        tipo_producto_inicial = tipo_producto_inicial.toUpperCase();
        if(tipo_producto_inicial == "ENVASES" || tipo_producto_inicial == "DESECHABLES"){
            $("h4[tipo=filtro_forma]").removeClass("hide");
            $("div[tipo=filtro_forma]").removeClass("hide");
        }
    </script>
    <script src="../controller/producto/obtenerProducto.js"></script>
    <script src="../controller/producto/filtro.js"></script>


</body>
</html>