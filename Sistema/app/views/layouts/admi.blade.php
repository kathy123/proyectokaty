<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">
        <title>
           @section('title')
           Direccion de Postgrado
           @show
        </title>
    @section('header')
    <?php
     echo HTML::style('assets/adm/css/bootstrap.min.css');
     echo HTML::style('assets/adm/css/bootstrap-reset.css');
     echo HTML::style('assets/font-awesome/css/font-awesome.css');
     echo HTML::style('assets/adm/css/style.css');
     echo HTML::style('assets/adm/css/style-responsive.css');
    ?>
    @show
</head>
<body>
<section id="container" >
    <!-- menu fixed -->
    <header class="header fixed-top clearfix">
    @section('menusup')
        
    @show  
    </header>
    <!--menu fixed fin-->
    <!--menu izquierda -->
    <aside>
    @section('menuizq')
        
    @show
    </aside>
    <!--menu izquierda fin-->
    <!--main contentenedor -->
    <section id="main-content">
        <section class="wrapper">
            @section('content')
            <!-- pagina-->
            
            <!-- pagina fin-->
            @show
        </section>
    </section>
    <!--main contentenedor fin-->
    <!--right menu derecha-->
    <div class="right-sidebar">
    @section('menuder')
        
    @show
    </div>
    <!--right menuredecho fin-->
</section>
<!-- Placed js at the end of the document so the pages load faster -->
@section('footer')
<?php
  echo HTML::script('assets/adm/js/jquery.js');
  echo HTML::script('assets/adm/js/bootstrap.min.js');
  echo HTML::script('assets/adm/js/jquery.dcjqaccordion.2.7.js');
  echo HTML::script('assets/adm/js/jquery.scrollTo.min.js');
  echo HTML::script('assets/adm/js/jquery.slimscroll.js');
  echo HTML::script('assets/adm/js/jquery.nicescroll.js');
  echo HTML::script('assets/adm/js/scripts.js');
?>
<script type="text/javascript">
    var Script = function () {
         //Common Script Goes Here
    }();
</script>
@show
</body>
</html>
