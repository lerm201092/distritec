<?php include "./include/head.php"; ?>
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
            <p><b>Referencia - contra referencia</b></p>

            <abbr title="Phone">Tel:</abbr>(5) 578 1068 EXT: 127<br/>
            <abbr title="Cell">Cel:</abbr>315 865 2435<br/>
            <abbr title="Email">Email:</abbr> <a href="#">referenciaclinicasinaisvitais@gmail.com</a><br/><br/>

            <p><b>Admisiones</b></p>

            <abbr title="Phone">Tel:</abbr>(5) 578 1068 EXT: 113<br>
            <abbr title="Email">Email:</abbr> <a href="#">admisiones@clinicasinaisvitais.com</a><br/><br/>

            <p><b>Consulta externa</b></p>

            <abbr title="Phone">Tel:</abbr>(5) 578 1068 EXT: 111 - 114 - 118<br>
            <abbr title="Cell">Cel:</abbr>317 638 1535<br>
            <abbr title="Email">Email:</abbr> <a href="#">consultaexterna@clinicasinaisvitais.com</a><br>

          </div>
        </div>
        <!-- GMap -->
		<div class="mt30">
          <div id="map">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15718.038423826114!2d-73.8840097!3d9.9746963!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd2e6e5ed4ba7eeb!2sCl%C3%ADnica+Sinais+Vitais!5e0!3m2!1ses!2sco!4v1563163776683!5m2!1ses!2sco" width="455" height="297" frameborder="0" style="border:0" allowfullscreen></iframe></p>
          </div>
		</div>
      </div>
    </section>
    
    <!-- Contact form -->
    <section id="contact-form" class="mt50">
      <div class="col-md-7">
        <h2 class="lined-heading"><span>Enviar un mensaje</span></h2>
        <p>Comuníquese con nosotros para brindarle una mejor atención e informarle sobre todos nuestros servicios y especialidades.</p>
        <form class="clearfix mt50" role="form" method="post" action="../model/contact.php" name="contactform" id="contactform">
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
              <option value="Booking">Solicitud de información</option>
              <option value="a Room">Interez laboral</option>
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
          <button type="submit" class="btn  btn-lg btn-primary">Enviar mensaje</button>
        </form>
      </div>
    </section>
  </div>
</div><br><br><br>
<?php include "./include/footer.php"; ?>