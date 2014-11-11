<!DOCTYPE html>
<html lang="en">
<head> 
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="escudopostgrado.ico">
	<title>
      @section('title')
        Direccion de Postgrado
      @show   
     </title>
	 @section('header')
	<!-- <link rel="stylesheet" href="assets/fe/css/my-bootstrap-theme.css" >-->
    <?php
    // HOVER 
	echo HTML::style('assets/fe/css/img-hover/style_common.css'); 
    echo HTML::style('assets/fe/css/img-hover/style1.css');
    // pagina inicial
    echo HTML::style('assets/fe/css/bootstrap.min.css');
    echo HTML::style('assets/fe/less/cloud-admin-frontend.less');
    echo HTML::style('assets/fe/css/cloud-admin-frontend.css');
    
    echo HTML::style('assets/fe/font-awesome/css/font-awesome.min.css');
	// ANIMATE 
    echo HTML::style('assets/fe/css/amimatecss/animate.min.css'); 
	// COLORBOX 
	echo HTML::style('assets/fe/css/colorbox/colorbox.min.css'); 
	// CAROUSEL 
    echo HTML::style('assets/fe/css/carousel.css'); 
	// FONTS 
	echo HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'); 
    ?>
    <!-- STYLESHEETS --><!--[if lt IE 9]><script src="../js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->	
</head>
<body>
	<!-- PAGE -->
	<div id="page">
	    <!-- HEADER -->
	    @section('cara')
		
			
		
		@show
        @section('content')
		
		@show
		<!-- FOOTER -->
		
		<section id="footer" class="color-light pattern">
			@section('pie')
				
			@show
		</section>
		
		<!--/FOOTER -->
	</div>
	<!--/PAGE -->
	@section('footer')
	
    <?php
     // JAVASCRIPTS
       //este es el verdadero css
       
      // echo HTML::script('assets/fe/js/html5shiv.js');
       //echo HTML::script('assets/fe/js/respond.min.js');
       echo HTML::script('assets/fe/js/jquery-1.9.1.min.js');
       //aumentar del css
       echo HTML::script('assets/fe/js/bs/bootstrap.min.js');
       echo HTML::script('assets/fe/js/waypoints.min.js');
       echo HTML::script('assets/fe/js/jquery.scrollTo.js');
       echo HTML::script('assets/fe/js/jquery.nav.js');
       echo HTML::script('assets/fe/js/jquery.isotope.min.js');
       echo HTML::script('assets/fe/js/imagesloaded.pkgd.min.min.js');
       echo HTML::script('assets/fe/js/jquery.colorbox.min.js');
       echo HTML::script('assets/fe/js/bs/carousel.js');
       echo HTML::script('assets/fe/js/script.js');
       echo HTML::script('assets/fe/js/less-1.3.3.min.js');
       echo HTML::script('assets/fe/js/bs/transition.js');
       echo HTML::script('assets/fe/js/bs/collapse.js');
       echo HTML::script('assets/fe/js/bs/dropdown.js');
       ?>
       @show
	<!--  
       // JAVASCRIPTS del less
       echo HTML::script('assets/fe/js/jquery-1.9.1.min.js');
       echo HTML::script('assets/fe/bootstrap/js/transition.js');
       echo HTML::script('assets/fe/bootstrap/js/alert.js');
       echo HTML::script('assets/fe/bootstrap/js/modal.js');
       echo HTML::script('assets/fe/bootstrap/js/dropdown.js');
       echo HTML::script('assets/fe/bootstrap/js/scrollspy.js');
       echo HTML::script('assets/fe/bootstrap/js/tab.js');
       echo HTML::script('assets/fe/bootstrap/js/tooltip.js');
       echo HTML::script('assets/fe/bootstrap/js/popover.js');
       echo HTML::script('assets/fe/bootstrap/js/button.js');
       echo HTML::script('assets/fe/bootstrap/js/collapse.js');
       echo HTML::script('assets/fe/bootstrap/js/carousel.js');
       echo HTML::script('assets/fe/bootstrap/js/typeahead.js');
       echo HTML::script('assets/fe/js/waypoint/waypoints.min.js');
       echo HTML::script('assets/fe/js/navmaster/jquery.scrollTo.js');
       echo HTML::script('assets/fe/js/navmaster/jquery.nav.js');
       echo HTML::script('assets/fe/js/swiper/idangerous.swiper-1.9.3.js');
       echo HTML::script('assets/fe/js/isotope/jquery.isotope.min.js');
       echo HTML::script('assets/fe/js/isotope/imagesloaded.pkgd.min.min.js');
       // COLORBOX 
       echo HTML::script('assets/fe/js/colorbox/jquery.colorbox.js');
       echo HTML::script('assets/fe/js/script.js');
       echo HTML::script('assets/fe/js/less-1.3.3.min.js');-->
</body>
</html>