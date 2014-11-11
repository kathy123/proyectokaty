@extends('layouts.admi')

    @section('title') 
        @parent
    @stop
    @section('header')
       @parent
    @stop
    @section('menusup')
        <!--logo start-->
        <div class="brand">
        <a href="index.html" class="logo">
          <img src="assets/fe/img/logo/banner1.png" alt="">
        </a>
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars"></div>
        </div>
        </div>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
               <i class="fa fa-tasks"></i>
               <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                     <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                <a href="#">
                    <div class="task-info clearfix">
                        <div class="desc pull-left">
                            <h5>Target Sell</h5>
                            <p>25% , Deadline  12 June’13</p>
                        </div>
                            <span class="notification-pie-chart pull-right" data-percent="45">
                        <span class="percent"></span>
                        </span>
                    </div>
                </a>
                </li>
                <li>
                <a href="#">
                    <div class="task-info clearfix">
                        <div class="desc pull-left">
                            <h5>Target Sell</h5>
                            <p>33% , Deadline  12 June’13</p>
                        </div>
                            <span class="notification-pie-chart pull-right" data-percent="90">
                        <span class="percent"></span>
                        </span>
                    </div>
                </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                            <span class="photo"><img alt="avatar" src="images/avatar-mini.jpg"></span>
                            <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                 <span class="time">Just now</span>
                            </span>
                            <span class="message">
                                Hello, this is an example msg.
                            </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                            <span class="photo"><img alt="avatar" src="images/avatar-mini-2.jpg"></span>
                            <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                            </span>
                            <span class="message">
                                Nice admin template
                            </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                            <span class="photo"><img alt="avatar" src="images/avatar-mini-3.jpg"></span>
                            <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                            </span>
                            <span class="message">
                                This is an example msg.
                            </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notificaciones</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                       <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                       <div class="noti-info">
                        <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                    <div class="noti-info">
                        <a href="#"> Server #2 overloaded.</a>
                    </div>
                     </div>
                </li>
            </ul>
        </li>
        <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
        </div>
        <!--  PERFIL -->
        <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder="Buscar2">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/avatar1_small.jpg">
                <span class="username">{{Auth::user()->username}}</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="<?=URL::to('admi/perfil');?>"><i class=" fa fa-suitcase"></i>Perfil</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="<?=URL::to('logout');?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
        </ul>
        <!--search & user info end-->
        </div>
    @stop
    @section('menuizq')
        <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="<?=URL::to('admi/index')?>">
                    <i class="fa fa-dashboard"></i>
                    <span>MENU ADMINISTRADOR</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="dcjq-parent" href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>PROGRAMAS</span>
                    <span class="dcjq-icon"></span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/programnew')?>">Nuevo Programa</a></li>
                    <li><a href="<?=URL::to('admi/programshow')?>">Ver Todos</a></li>
                    <li><a href="<?=URL::to('admi/programver')?>">mostrar</a></li>
                    <li><a href="<?=URL::to('admi/programver')?>">ver prueba materias</a></li>
                    <li><a href="<?=URL::to('admi/offernew')?>">regofertas</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-laptop"></i>
                    <span>CONTROL PORTAL WEB</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/offernew')?>">Nueva Oferta</a></li>
                    <li><a href="<?=URL::to('admi/offershow')?>">Ver Ofertas</a></li>
                    <li><a href="<?=URL::to('admi/eventnew')?>">Nuevo Evento</a></li>
                    <li><a href="<?=URL::to('admi/eventshow')?>">Ver Eventos</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-graduation-cap"></i>
                    <span>GRADOS ACADEMICOS</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/degreeshow')?>">Ver Todos</a></li>
                    <li><a href="<?=URL::to('admi/degreenew')?>">Nuevo</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>ESTUDIANTES</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/inscritosshow')?>">Listar Postulantes</a></li>
                    <li><a href="advanced_form.html">Actualizar Datos</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-envelope"></i>
                    <span>DOCENTES</span>
                </a>
                <ul class="sub">
                    <li><a href="mail.html">Registrar</a></li>
                    <li><a href="mail_compose.html">Ver Todos</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-money"></i>
                    <span>PAGOS</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/pagonew')?>">Nuevo</a></li>
                    <li><a href="<?=URL::to('admi/pagoshow')?>">Ver Todos</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>REPORTES</span>
                </a>
                <ul class="sub">
                    <li><a href=" ">Programas</a></li>
                    <li><a href=" ">Estudiantes</a></li>
                    <li><a href=" ">Docentes</a></li>
                    <li><a href=" ">Pagos</a></li>
                    <li><a href=" ">Usuarios</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span>USUARIOS</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/usersnew')?>">Nuevo</a></li>
                    <li><a href="<?=URL::to('admi/usersshow')?>">Ver Todos</a></li>
                    <li><a href="<?=URL::to('admi/userssearch')?>">Busqueda</a></li>
                    <li><a href="<?=URL::to('admi/usersreport')?>">Reportes</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span>PERSONAL</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/personalnew')?>">Nuevo</a></li>
                    <li><a href="<?=URL::to('admi/personalshow')?>">Ver Todos</a></li>
                    <li><a href="<?=URL::to('admi/personalbuscar')?>">Busqueda</a></li>
                    <li><a href="<?=URL::to('admi/personalrep')?>">Reportes</a></li>
                </ul>
            </li>
            <li>
                <a href="login.html">
                    <i class="fa fa-user"></i>
                    <span>Login Page</span>
                </a>
            </li>
        </ul></div>        
        <!-- sidebar menu end-->
        </div>   
    @stop
    @section('content')
      <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="<?=URL::to('admi/index')?>"><i class="fa fa-home"></i>INICIO</a></li>
                        <li><a>OFERTAS</a></li>
                        <li class="active">Nueva Oferta</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <section class="panel panel-primary">
                    <header class="panel-heading">
                        este es el contenido de la plantilla
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        This is a sample page
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-12">
                    <section class="panel panel-primary">
                        <header class="panel-heading">
                            Registrar Ofertas de Programas
                        </header>
                        <div class="panel-body"> 
                            <div class="form">
                                <form class="cmxform form-horizontal" id="commentForm" method="post" action="<?=URL::to('admi/offersave');?>">
                                    <fieldset>
                                    <div class="form-group">
                                        @if($prog)
                                        <label for="cname" class="control-label col-lg-3">Elegir Programa</label>
                                        <div class="col-lg-6">
                                               <select name="program" class="form-control input-sm m-bot15">
                                                @foreach($prog as $programa)
                                                <option value="{{$programa->idprograma}}">{{$programa->nombre}}</option>
                                                @endforeach
                                               </select>
                                        @else
                                        </div>
                                        <div class="col-lg-6">        
                                                <span> no hay datos para mostrar</span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Estado</label>
                                        <div class="col-lg-6">
                                            <select name="estado" class="form-control input-sm m-bot15">
                                               <option value="A">ACTIVO</option>
                                               <option value="I">INACTIVO</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">URL</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="url"  type="text" required />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Observaciones</label>
                                        <div class="col-lg-6">
                                            <textarea rows="15" name="observaciones" id="observaciones"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Fecha Inicio</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="fecha_inicio"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Fecha Final</label>
                                        <div class="col-md-6">
                                            <div class="input-group date form_datetime-component">
                                                <input class="form-control" name="fecha_fin" type="text" size="16" readonly="">
                                                <span class="input-group-btn">
                                                <button class="btn btn-primary date-set" type="button">
                                                    <i class="fa fa-calendar"></i>
                                                </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Fecha Final</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name=""  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-round btn-success" type="submit">Guardar</button>
                                            <button class="btn btn-round btn-warning" type="button">Cancelar</button>
                                        </div>
                                    </div>
                                 </fieldset>
                                </form>
                            </div>
                        </div>
                    </section>
                <section class="panel">
                    <header class="panel-heading">
                        Datetime Pickers
                              <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>
                            <a class="fa fa-cog" href="javascript:;"></a>
                            <a class="fa fa-times" href="javascript:;"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal  " action="#">
                            <div class="form-group">
                                <label class="control-label col-md-3">Default input Datetimepicker</label>
                                <div class="col-md-4">
                                    <input size="16" type="text" value="2012-06-15 14:45" readonly class="form_datetime form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3"> Component Datetimepicker</label>
                                <div class="col-md-4">
                                    <div class="input-group date form_datetime-component">
                                        <input type="text" class="form-control" readonly="" size="16">
                                                <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary date-set"><i class="fa fa-calendar"></i></button>
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Advance Datetimepicker</label>
                                <div class="col-md-4">
                                    <div data-date="2012-12-21T15:25:00Z" class="input-group date form_datetime-adv">
                                        <input type="text" class="form-control" readonly="" size="16">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary date-reset"><i class="fa fa-times"></i></button>
                                            <button type="button" class="btn btn-warning date-set"><i class="fa fa-calendar"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Meridian Format</label>
                                <div class="col-md-4">
                                    <div data-date="2012-12-21T15:25:00Z" class="input-group date form_datetime-meridian">
                                        <input type="text" class="form-control" readonly="" size="16">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary date-reset"><i class="fa fa-times"></i></button>
                                            <button type="button" class="btn btn-warning date-set"><i class="fa fa-calendar"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                </div>
            </div>
    @stop 
    @section('menuder')
        <div class="search-row">
            <input type="text" placeholder="Search" class="form-control">
        </div>
        <div class="right-stat-bar">
            <ul class="right-side-accordion">
                <li class="widget-collapsible">
                    <a href="#" class="head widget-head red-bg active clearfix">
                    <span class="pull-left">MENU 1</span>
                    <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                    </a>
                <ul class="widget-container">
                    <li>
                        <div class="prog-row side-mini-stat clearfix">
                                <div class="side-graph-info">
                                    <h4>Target sell</h4>
                                        <p>
                                            25%, Deadline 12 june 13
                                        </p>
                                </div>
                                <div class="side-mini-graph">
                                    <div class="target-sell">
                                    </div>
                                </div>
                        </div>
                
                        <div class="prog-row side-mini-stat">
                            <div class="col-md-12">
                                <h4>total progress</h4>
                                    <p>
                                         50%, Deadline 12 june 13
                                    </p>
                                <div class="progress progress-xs mtop10">
                                    <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                                    <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </li>
                </ul>
                </li>
                <li class="widget-collapsible">
                <a href="#" class="head widget-head terques-bg active clearfix">
                    <span class="pull-left">MENU 2</span>
                    <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                </a>
                <ul class="widget-container">
                <li>
                    <div class="prog-row">
                        <div class="user-thumb">
                            <a href="#"><img src="images/avatar1_small.jpg" alt=""></a>
                        </div>
                        <div class="user-details">
                            <h4><a href="#">Jonathan Smith</a></h4>
                            <p>
                                Work for fun
                            </p>
                        </div>
                        <div class="user-status text-danger">
                            <i class="fa fa-comments-o"></i>
                        </div>
                    </div>
                    <div class="prog-row">
                        <div class="user-thumb">
                            <a href="#"><img src="images/chat-avatar2.jpg" alt=""></a>
                        </div>
                        <div class="user-details">
                            <h4><a href="#">John Doe</a></h4>
                            <p>
                            Away from Desk
                            </p>
                        </div>
                            <div class="user-status text-warning">
                             <i class="fa fa-comments-o"></i>
                            </div>
                    </div>
                                          
                    <p class="text-center">
                        <a href="#" class="view-btn">View all Contacts</a>
                    </p>
                    </li>
                    </ul>
                </li>
                <li class="widget-collapsible">
                    <a href="#" class="head widget-head purple-bg active">
                        <span class="pull-left">OPCION 3</span>
                        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                    </a>
                    <ul class="widget-container">
                    <li>
                    <div class="prog-row">
                         <div class="user-thumb rsn-activity">
                             <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="rsn-details ">
                            <p class="text-muted">
                                just now
                            </p>
                            <p>
                                <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                             </p>
                        </div>
                    </div>
                </li>
                </ul>
                </li>
            </ul>
        </div>
    @stop
    @section('footer')
       @parent
       <?php 
        echo HTML::script('assets/adm/js/jquery-1.8.3.min.js');
        echo HTML::script('assets/datepicker/js/bootstrap-datepicker.js');
        echo HTML::script('assets/js/jquery-ui/jquery-ui-1.9.2.custom.min.js');
        echo HTML::script('assets/adm/tinymce/tinymce.full.js');
        ?>
        <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            theme: "modern",
            languaje : "es", 
            plugins: [ 
            "advlist autolink link image lists charmap print preview hr anchor pagebreak", 
            "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking", 
            "table contextmenu directionality emoticons paste textcolor responsivefilemanager" 
            ], 
            
            toolbar: "responsivefilemanager undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | preview code", 
            image_advtab: true, 

            external_filemanager_path: "/Sistema/public/filemanager/",
            filemanager_title:"img",
        }); 
        </script>
    @stop