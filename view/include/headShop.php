<title>Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../../distritec_vendor/page/src/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />  
<link href="../../../distritec_vendor/page/src/css/style.css" rel="stylesheet" type="text/css" media="all" />    
<link href="../../../distritec_vendor/page/src/css/style2.css" rel="stylesheet" type="text/css" media="all" />   
<link rel="icon" type="image/png" href="../../../distritec_img/img_app/favicon.png">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link href="../../../distritec_vendor/page/src/css/form.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../../../distritec_vendor/page/src/js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {

            $(".a_menu").mouseover(function(){
                $(this).children("p.a_p_menu").css("border-top", "3px solid #001285");
            });
        
            $(".a_menu").mouseout(function(){
                $(this).children("p.a_p_menu").css("border-top", "3px solid white");
            });

            $(".dropdown img.flag").addClass("flagvisibility");
            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });                

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });
            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
</script>
<!-- start menu -->     
<link href="../../../distritec_vendor/page/src/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../../../distritec_vendor/page/src/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="../../../distritec_vendor/page/src/js/move-top.js"></script>
<script type="text/javascript" src="../../../distritec_vendor/page/src/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
		});
	});
</script>	