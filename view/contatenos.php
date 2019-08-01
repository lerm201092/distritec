<!DOCTYPE HTML>
<html>
<head>
	<title>Distritec</title>
    <?php include "./include/head.php"; ?>
    <!-- Estilos Propios -->
    <link rel="stylesheet" href="./src/css/my_css/somos.css">
</head>
<body>

    <?php include "./include/header.php"; ?>

<div class="container">
  <div class="row"> 
    
    <!-- Contact details -->
  <section class="contact-details">
      <div class="col-md-5">
        <h2 class="lined-heading  mt50"><span>Dirección</span></h2>
        <!-- Panel -->
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <div class="panel-title"><i class="fa fa-star"></i> <strong>Contacto</strong></div>
          </div>
          <div class="panel-body">
            <p><b>Barranquilla - Colombia - Suramérica</b></p>

            <abbr title="Direccion">Dirección:</abbr> Carrera 70 No. 76 - 102<br/>
            <abbr title="Phone">Telefono:</abbr> (5) 368 6247 - 353 0689<br/>
            <abbr title="Cell">Celular:</abbr> 315 668 8080 - 300 805 7162<br/>
            <abbr title="Email">Email:</abbr> <a href="#"> goperaciones@distritec.com.co</a><br/><br/>

          </div>
        </div>
        <!-- GMap -->
		<div class="mt30">
          <div id="map">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15665.457377626752!2d-74.7976817!3d11.0112666!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x47756aa637ec96ab!2sDistritec+S.A.S.!5e0!3m2!1ses!2sco!4v1564634279847!5m2!1ses!2sco"width="455" height="297" frameborder="0" style="border:0" allowfullscreen></iframe></p>
          </div>
		</div>
      </div>
    </section>
    
    <!-- Contact form -->
    <section id="contact-form" class="mt50">
      <div class="col-md-7">
        <h2 class="lined-heading"><span>¡Estaremos encantados de poder ayudarle!</span></h2>
        <p class="texto">Comuníquese con nosotros para brindarle una mejor atención e informarle sobre todos nuestros productos, precios y descuentos por volumen: Estamos disponibles para usted en horario de oficina 8:00 am-12m. y de 2:00 p.m. -6:00 p.m. y así poder satisfacer cualquier inquietud, nuestro personal estará atento a todos sus comentarios.</p>
        <form class="clearfix mt50" role="form" method="post" action="../modelo/contact.php" name="contactform" id="contactform">
          <!-- Error message -->
		  <div id="message"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name" accesskey="U"><span class="required">*</span> Nombre</label>
                <input name="name" type="text" id="name" class="form-control" value=""/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="email" accesskey="E"><span class="required">*</span> E-mail</label>
                <input name="email" type="text" id="email" value="" class="form-control"/>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="subject" accesskey="S">Asunto</label>
            <select name="subject" id="subject" class="form-control">
              <option value="Booking">Solicitud de cotización</option>
              <option value="a Room">Solicitud de más información</option>
              <option value="other">Otros</option>
            </select>
          </div>
          <div class="form-group">
            <label for="comments" accesskey="C"><span class="required">*</span> Mensaje</label>
            <textarea name="comments" rows="9" id="comments" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label><span class="required">*</span> Pregunta de seguridad: &nbsp;&nbsp;&nbsp;1 + 1 =</label>		  
            <input name="verify" type="text" id="verify" value="" class="form-control" placeholder="Please enter the outcome" />
          </div>
          <button type="submit" class="btn btn-lg btn-primary">Enviar mensaje</button>
        </form>
      </div>
    </section>
  </div>
</div><br><br><br>



<?php include "./include/footer.php"; ?>
<?php include "./include/scriptComun.php"; ?>
<script>
    $("#li_contact").css("background", "#e60000");
</script>
</body>
</html>
