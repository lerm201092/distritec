<div class="footer" style="bottom:0; width: 100%;">
	<div class="copy row">
		<div class="row" style="padding:10px 8px 10px;">
			<div class="col-md-3 col-sm-12">
				<p class="text-center color_f"> &copy; 2019 Distritec. All Rights Reserved.</p>
			</div>
			<div class="col-md-3 col-sm-12">
				<p class="text-center color_f"><a href="https://distritec.blogspot.com/" target="_blank">Blog</a></p>
			</div>
			<div class="col-md-3 col-sm-12">
				<p class="text-center color_f"><a href="../../../distritec_vendor/page/src/pdf/politicas_distritec.pdf" target="_blank">Politicas del sitio</a></p>
			</div>
			<div class="col-md-3 col-sm-12">
				<p id="p_footer" class="text-center color_f color_ff">Diseñada y desarrollado por <a href="http://www.solucionaar.com" target="_blank">Solucionaar.</a> </p>
			</div>			
		</div>
	</div>
	<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</div>

<script>
	$(window).resize(function(){
		var ancho = $(this).width();
		if(ancho >= 1000){
			$("#menu_movil").hide();
			$("#menu_movil").css({"left" : "-100%", "transition" : "0.1s"});
		}
	});
	$("#li_envases").hover(function(){
		$("#submenu_envases").show();
		}, function(){
			$("#submenu_envases").hide();
		});

		$("#li_desechables").hover(function(){
		$("#submenu_desechables").show();
		}, function(){
			$("#submenu_desechables").hide();
		});
		
		$("#li_atomizadores").hover(function(){
		$("#submenu_atomizadores").show();
		}, function(){
			$("#submenu_atomizadores").hide();
		});

	function menu(){
		$("#menu_movil").show();
		var left = $("#menu_movil").css("left");
		if(left == "0px"){
			$("#menu_movil").css({"left" : "-100%", "transition" : "0.1s"});
		}else{
			$("#menu_movil").css({"left" : "0px", "transition" : "0.1s"});
		}		
	}
</script>