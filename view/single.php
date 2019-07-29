<!DOCTYPE HTML>

<html>



<head>

    <title>Distritec</title>

    <?php include "./include/headShop.php"; ?>

    

    <style>

		#p_descripcion{

			font-size : 18px;

			font-weight: bold;
			font-family: 'Open Sans', sans-serif;

		}

		#p_precio{

			font-size : 20px;

			font-weight: bold;

			color:#FFAF02;

			margin-top: 15px;
			font-family: 'Open Sans', sans-serif;

		}

		#p_referencia{

			font-size : 14px;

			font-weight: bold;

			color:black;

			margin-top: 20px;
			font-family: 'Open Sans', sans-serif;

		}

		#p_uso{

			font-size : 14px;

			font-weight: 550;

			color:black;

			margin-top: 20px;
			font-family: 'Open Sans', sans-serif;

		}

		#p_accesorios{

			font-size : 14px;

			font-weight: 550;

			color:black;

			margin-top: 20px;
			font-family: 'Open Sans', sans-serif;

		}



		table{

			width:80%;

			border: 1px solid #e7e7e7;
			font-family: 'Open Sans', sans-serif;

		}



		th{

			border: 1px solid #e7e7e7;
			color: #656c86;
			background: #f3f3f3;
			padding: 5px 10px;
			text-align:left;
			font-weight:bold;
			font-size: 14px;
			font-family: 'Open Sans', sans-serif;
		}

		td{
			background: #ffffff;
			border: 1px solid #e7e7e7;
			padding: 5px 10px;
			text-align:left;
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

                                <input type="checkbox" name="checkbox" checked=""><i></i>301 - Superior</label>

                        </div>

                        <div class="col col-4">

                            <label class="checkbox">

                                <input type="checkbox" name="checkbox"><i></i>201 - 300</label>

                            <label class="checkbox">

                                <input type="checkbox" name="checkbox"><i></i>101 - 200</label>

                            <label class="checkbox">

                                <input type="checkbox" name="checkbox"><i></i>51 - 100</label>

                            <label class="checkbox">

                                <input type="checkbox" name="checkbox"><i></i>0 - 50</label>

                        </div>

                    </div>

			</div>

			









            <div id="cajaPrincipal" class="cont span_2_of_3">

				<div id="fila1" style="width:100%;">

					<div id="col3" style="width:30%;float:left">

						<div id="divImg" style="border: 1px solid #c7d3f8; border-radius: 4px; padding: 35px 5px;">

							<img id="imagenPrincipal" src="./src/images/cargando.gif" alt="" >

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

				</div> <br/>

			

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
								<td>10 x 15 x 50</td>
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

		var referencia = <?php $x = $_GET["ref"]; echo $x; ?>

	</script>

    <script src="../controller/producto/detalleProducto.js"></script>

</body>

<!-- <table>

    <thead>

        <tr>

            <th>Peso (Kg)</th>

            <th>Diametro Rosca (mm)</th>

            <th>Altura Rosca (mm)</th>

            <th>Base (mm)</th>

        </tr>

    </thead>

    <tbody>

    <tr>

            <td id="td_peso">1</td>

            <td id="td_dr"></td>

            <td id="td_ar">1</td>

            <td id="td_base">1</td>

        </tr>



    </tbody>

</table>

</p>

<br>

<p>

<table>

    <thead>

        <tr>

            <th>Ancho (mm)</th>

            <th>Altura (mm)</th>

            <th>Color</th>

            <th>Material</th>

        </tr>

    </thead>

    <tbody>

    <tr>

            <td id="td_ancho"></td>

            <td id="td_altura"></td>

            <td id="td_color"></td>

            <td id="td_material"></td>

        </tr>



    </tbody>

</table>

</p> -->


</html>