<!DOCTYPE HTML>

<html>



<head>

    <title>Envases</title>

    <?php include "./include/headShop.php"; ?>

    

    <style>



    </style>

</head>



<body>



    <?php include "./include/header.php"; ?>



    <div class="login">

        <div class="wrap">

            <div class="rsidebar span_1_of_left">

                <section class="sky-form">

                    <h4>Usos</h4>

                    <div class="row row1 scroll-pane">

                        <div class="col col-4">

                            <label class="checkbox">

                                <input type="checkbox" name="checkbox" checked=""><i></i>Aseo</label>

                        </div>

                        <div class="col col-4">

                            <label class="checkbox">

                                <input type="checkbox" name="checkbox"><i></i>Solventes</label>

                            <label class="checkbox">

                                <input type="checkbox" name="checkbox"><i></i>Lubricantes</label>

                        </div>

                    </div>

                    <h4>Precios</h4>

                    <div class="row row1 scroll-pane">

                        <div class="col col-4">

                            <label class="checkbox">

                                <input type="checkbox" name="chk_precio" max="99999999" min="1001"><i></i>1001 - Superior</label>

                        </div>

                        <div class="col col-4">

                            <label class="checkbox">

                                <input type="checkbox" name="chk_precio" max="1000" min="901"><i></i>901 - 1000</label>

                            <label class="checkbox">

                                <input type="checkbox" name="chk_precio" max="900" min="701"><i></i>701 - 900</label>

                            <label class="checkbox">

                                <input type="checkbox" name="chk_precio" max="700" min="401"><i></i>401 - 700</label>

                            <label class="checkbox">

                                <input type="checkbox" name="chk_precio" max="400" min="0"><i></i>0 - 400</label>

                        </div>

                    </div>

                    <button onclick="filtro();">buscar</button>

			</div>

			









            <div id="cajaPrincipal" class="cont span_2_of_3">



            </div>

            <div class="clear"></div>

        </div>

    </div>







    <?php include "./include/footer.php"; ?>

    <script src="../controller/producto/obtenerProducto.js"></script>
    <script src="../controller/producto/filtro.js"></script>
</body>



</html>