<!DOCTYPE HTML>

<html>

<head>

    <title>Distritec</title>

    <?php include "./include/headShop.php"; ?>

        <style>
            #p_descripcion {
                font-size: 18px;
                font-weight: bold;
                font-family: 'Open Sans', sans-serif;
            }
            
            #p_precio {
                font-size: 20px;
                font-weight: bold;
                color: #FFAF02;
                margin-top: 15px;
                font-family: 'Open Sans', sans-serif;
            }
            
            #p_referencia {
                font-size: 14px;
                font-weight: bold;
                color: black;
                margin-top: 20px;
                font-family: 'Open Sans', sans-serif;
            }
            
            #p_uso {
                font-size: 14px;
                font-weight: 550;
                color: black;
                margin-top: 20px;
                font-family: 'Open Sans', sans-serif;
            }
            
            #p_accesorios {
                font-size: 14px;
                font-weight: 550;
                color: black;
                margin-top: 20px;
                font-family: 'Open Sans', sans-serif;
            }
            
            table {
                width: 80%;
                border: 1px solid #e7e7e7;
                font-family: 'Open Sans', sans-serif;
            }
            
            th {
                border: 1px solid #e7e7e7;
                color: #656c86;
                background: #f3f3f3;
                padding: 5px 10px;
                text-align: left;
                font-weight: bold;
                font-size: 14px;
                font-family: 'Open Sans', sans-serif;
            }
            
            td {
                background: #ffffff;
                border: 1px solid #e7e7e7;
                padding: 5px 10px;
                text-align: left;
                font-size: 14px;
                font-family: 'Open Sans', sans-serif;
            }
        </style>

</head>

<body>

    <?php include "./include/header.php"; ?>

        <div class="login">

            <div class="wrap">

                <div class="rsidebar span_1_of_left">
                    <section class="sky-form">
                        <h4>Capacidad</h4>
                        <div class="row row1 scroll-pane">
                            <div class="col col-4">
                                <label class="checkbox">
                                    <input disabled type="checkbox" name="chk_capacidad" max="99999999" min="301"><i></i>301 - Superior
                                </label>
                            </div>
                            <div class="col col-4">
                                <label class="checkbox">
                                    <input disabled type="checkbox" name="chk_capacidad" max="300" min="101"><i></i>101 - 300
                                </label>
                                <label class="checkbox">
                                    <input disabled type="checkbox" name="chk_capacidad" max="100" min="61"><i></i>61 - 100
                                </label>
                                <label class="checkbox">
                                    <input disabled type="checkbox" name="chk_capacidad" max="60" min="31"><i></i>31 - 60
                                </label>
                                <label class="checkbox">
                                    <input disabled type="checkbox" name="chk_capacidad" max="30" min="0"><i></i>0 - 30
                                </label>
                            </div>
                        </div>
                        <!-- Fin filtro capacidad -->
                        <h4>Precios</h4>
                        <div class="row row1 scroll-pane">
                            <div class="col col-4">
                                <label class="checkbox">
                                    <input disabled type="checkbox" name="chk_precio" max="99999999" min="1001"><i></i>1001 - Superior
                                </label>
                            </div>
                            <div class="col col-4">
                                <label class="checkbox">
                                    <input disabled type="checkbox" name="chk_precio" max="1000" min="901"><i></i>901 - 1000
                                </label>
                                <label class="checkbox">
                                    <input disabled type="checkbox" name="chk_precio" max="900" min="701"><i></i>701 - 900
                                </label>
                                <label class="checkbox">
                                    <input disabled type="checkbox" name="chk_precio" max="700" min="401"><i></i>401 - 700
                                </label>
                                <label class="checkbox">
                                    <input disabled type="checkbox" name="chk_precio" max="400" min="0"><i></i>0 - 400
                                </label>
                            </div>
                    </section>
                    </div>

                    <div id="cajaPrincipal" class="cont span_2_of_3">

                        <div id="fila1" style="width:100%;">

                            <div id="col3" style="width:30%;float:left">

                                <div id="divImg" style="border: 1px solid #c7d3f8; border-radius: 4px; padding: 35px 5px;">

                                    <img id="imagenPrincipal" src="./src/images/cargando.gif" alt="">

                                </div>

                            </div>

                            <div id="col7" style="width:70%;float:left;">

                                <div style="padding: 10px 30px;">

                                    <p id="p_descripcion"></p>

                                    <p id="p_precio"></p>

                                    <p id="p_referencia"></p>

                                    <p id="p_uso"></p>

                                    <p id="p_accesorios"></p>

                                </div>

                            </div>

                        </div>
                        <br/>

                        <div id="fila2" style="width:100%;float:left;">

                            <div id="col12">

                                <p style="font-weight: bold; font-size: 14px; margin-top: 20px;">Especificaciones</p>
                                <br>
                                <table>
                                    <tr>
                                        <th>Peso (gr)</th>
                                        <td id="td_peso">1</td>
                                    </tr>
                                    <tr>
                                        <th>Color</th>
                                        <td id="td_color"></td>
                                    </tr>
                                    <tr>
                                        <th>Material</th>
                                        <td id="td_material"></td>
                                    </tr>
                                    <tr>
                                        <th>Dimensiones</th>
                                        <td id="td_d"></td>
                                    </tr>
                                    <tr id="tr_dr" class="hide">
                                        <th>Dimensiones de rosca</th>
                                        <td id="td_dr"></td>
                                    </tr>
                                </table>

                            </div>

                        </div>

                    </div>

                    <div class="clear"></div>

                </div>

            </div>

            <?php include "./include/footer.php"; ?>

                <script>
                    var referencia = <?php $x = $_GET["ref"]; echo $x; ?>;
                    var tipo_producto = "<?php $x = $_GET["tipo"]; echo $x; ?>";
                    if(tipo_producto == "ENVASE"){
                           $("#tr_dr").removeClass("hide"); 
                    }
                    tipo_producto = tipo_producto.toLowerCase();
                    $("#li_"+tipo_producto).css("background", "#e60000");
                </script>

                <script src="../controller/producto/detalleProducto.js"></script>

</body>
</html>