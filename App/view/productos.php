<!DOCTYPE HTML>
<html>
<head>
    <title>Distritec</title>
    <?php include "./include/headShop.php"; ?> 

    <style>

    #contenedor_principal{
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
    -webkit-box-shadow: 1px 0px 11px -2px rgb(195, 195, 195);
    -moz-box-shadow: 1px 0px 11px -2px rgba(152,156,240,1);
    box-shadow: 1px 0px 11px -2px rgb(212, 212, 212);
}

    .cajaElemento a.detalleProducto{
        position: relative;
        bottom:0;
        width:100%;
    }

    #FILTRO_CAP, #FILTRO_FOR{
        padding: 5px 15px 10px;
        border: 1px solid #e6e6e6;
    }

    h4{
        padding: 0px;
    }

    #FILTRO_FOR div{
        padding-left:0px;
        padding-right:0px;
    }
    
    #pf {
    font-size: 13px;
    font-weight: 600;
    color: #002192;
    margin-bottom: 10px;
    text-align: center;
    letter-spacing: -.5px;
}

    </style>
</head>
<body>
<?php include "./include/medidas.php"; ?>
    <?php include "./include/header.php"; ?>
    <div class="login" id="contenedor_principal" style="position : absolute ; width:100%;">
        <div class="wrap" id="cont_cajaPrincipal" >

            <div class="col-md-3 hide" id="div_filtros">
                <!-- Filtro Forma -->
                <section class="sky-form">
                        <div id="cont_filtro_capacidad">
                            <h4>Capacidad <span id="medida"><?php echo capacidad($_GET["tipo"]); ?></span></h4>
                            <div class="row scroll-pane" style="padding: 0">
                                <div class="col-xs-12" id="FILTRO_CAP" >
                                    <label class="checkbox" tipo="lbl_capacidad">
                                        <input type="checkbox" onclick="filtro();" name="chk_capacidad" num_filtro="4" /><i></i>
                                    </label>
                                    <label class="checkbox" tipo="lbl_capacidad">
                                        <input type="checkbox" onclick="filtro();" name="chk_capacidad" num_filtro="3" /><i></i>
                                    </label>
                                    <label class="checkbox" tipo="lbl_capacidad">
                                        <input type="checkbox" onclick="filtro();" name="chk_capacidad" num_filtro="2" /><i></i>
                                    </label>
                                    <label class="checkbox" tipo="lbl_capacidad">
                                        <input type="checkbox" onclick="filtro();" name="chk_capacidad" num_filtro="1" /><i></i>
                                    </label>
                                    <label class="checkbox" tipo="lbl_capacidad">
                                        <input type="checkbox" onclick="filtro();" name="chk_capacidad" num_filtro="0" /><i></i>
                                    </label>
                                </div>
                            </div>
                            <!-- Fin filtro capacidad -->
                        </div>
                       

                    
                        <div id="cont_filtro_forma">
                            <!-- Filtro Forma -->
                            <h4  tipo="filtro_forma">Forma</h4>
                            <div id="FILTRO_FOR"  tipo="filtro_forma" class="row scroll-pane">
                            <div class="col col-12">
                                <label class="checkbox">
                                    <input type="checkbox" onclick="filtro2($(this));" name="chk_forma" forma="C"  ><i></i>Cilíndrica
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" onclick="filtro2($(this));" name="chk_forma" forma="R"  ><i></i>Rectangular
                                </label>
                            </div>
                        </div>

                        </section>
            </div>

            <!-- COL - 9  -->
            <div class="col-md-9"  id="div_info">      


                <div class="row" id="cajaPrincipal"> 
                
                
                </div>


                <div id="cajaEspera">
                    <div style="width: 100%; text-align: center; padding-top: 20px;margin-bottom: 50px;">
                        <img id="imagenPrincipal" src="../../distritec_img/img_app/cargando.gif">
                    </div>                
                </div>

                <div id="cajaNohay" class="hide">
                    <center>
                    <div style="width: 100%; text-align: center; padding-top: 20px;margin-bottom: 50px;">
                        <img src="../../distritec_img/img_app/opps.png" alt="" style="width:150px;height:auto">                    
                        <h3 style="font-size:20px; color: #002183; font-weight:bold; margin-top: 20px;">PRODUCTOS NO DISPONIBLES</h3>
                        <p style="font-weight:bold;margin-top:15px" id="pronohay">Te invitamos a seguir navegando en el sitio, hay una gran variedad de productos para usted!</p>
                    </div>  
                    </center>              
                </div>
            </div>
            <!--  /.  COL - 9  -->

        </div>
    </div>
    <?php include "./include/footer.php"; ?>
    <script>
        var tipo_producto_inicial = "<?php $x=$_GET["tipo"]; echo $x; ?>"; 
        var linea_producto = "<?php $x=$_GET["linea"]; echo $x; ?>"; 

        if(tipo_producto_inicial.toUpperCase() == "ENVASES" || tipo_producto_inicial.toUpperCase()  == "DESECHABLES"){
            if(linea_producto.toUpperCase() == "T"){
                $("div[id=div_info]").removeClass("col-md-9").addClass("col-md-12");
                $("div[tipo=cajaElemento]").removeClass("col-md-4").addClass("col-md-3");
            }else{
                $("#div_filtros").removeClass("hide");
                $("#cont_filtro_capacidad").removeClass("hide");
                $("#cont_filtro_forma").removeClass("hide");
            }
        }else{
            $("div[id=div_info]").removeClass("col-md-9").addClass("col-md-12");
            $("div[tipo=cajaElemento]").removeClass("col-md-4").addClass("col-md-3");
        }
    </script>
    <script src="../controller/producto/obtenerProducto.js"></script>
    <script src="../controller/producto/filtro.js"></script>

</body>
</html>