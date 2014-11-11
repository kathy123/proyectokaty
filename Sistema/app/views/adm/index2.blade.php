@extends('layouts.adm')

@section('title') 
@parent
@stop
@section('header')
	@parent
@stop
@section('menu-header-top')
    @parent 
    <!--NOTIFICACIONES-->
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
                                        <h5>Product Delivery</h5>
                                        <p>45% , Deadline  12 June’13</p>
                                    </div>
                                            <span class="notification-pie-chart pull-right" data-percent="78">
                                    <span class="percent"></span>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Payment collection</h5>
                                        <p>87% , Deadline  12 June’13</p>
                                    </div>
                                            <span class="notification-pie-chart pull-right" data-percent="60">
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
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="images/avatar-mini.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Mr. Perfect</span>
                                        <span class="time">2 hour ago</span>
                                        </span>
                                        <span class="message">
                                            Hi there, its a test
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
                            <p>Notifications</p>
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
                        <li>
                            <div class="alert alert-success clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#"> Server #3 overloaded.</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <!--FIN-->
        <!--PERFIL-->
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="assets/images/user.png">
                        <span class="username">{{Auth::user()->username}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="<?=URL::to('admi/perfil');?>"><i class="fa fa-suitcase"></i>Perfil</a></li>
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
        <!-- FIN -->
@stop
@section('menu-izquierda')
                @parent
                <li>
                <a class="active" href="<?=URL::to('admi/index')?>">
                        <i class="fa fa-dashboard"></i>
                        <span>MENU ADMINISTRADOR</span>
                </a>
                </li>
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-book"></i>
                        <span>PROGRAMAS</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=URL::to('admi/programnew')?>">NUEVO</a></li>
                        <li><a href="<?=URL::to('admi/programshow')?>">ver todos</a></li>
                        <li><a href="<?=URL::to('admi/programver')?>">mostrar</a></li>
                        <li><a href="<?=URL::to('admi/programver')?>">VER prueba materias</a></li>
                        <li><a href="<?=URL::to('admi/offernew')?>">reg ofertas</a></li>
                    
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-book"></i>
                        <span>OFERTAS DE POSTGRADO</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=URL::to('admi/offernew')?>">Nuevas Ofertas</a></li>
                        <li><a href="<?=URL::to('admi/offershow')?>">Mostrar Todos</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-book"></i>
                        <span>NIVEL DE POSTGRADO</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=URL::to('admi/degreenew')?>">Nuevo</a></li>
                        <li><a href="<?=URL::to('admi/degreeshow')?>">Mostrar</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>ESTUDIANTES</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=URL::to('admi/inscritosshow')?>">todos los inscritos</a></li>
                        <li><a href="">Acciones</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>DOCENTES</span>
                     </a>
                     <ul class="sub">
                        <li><a href="<?=URL::to('admi/docentenew')?>">NUEVO</a></li>
                        <li><a href="<?=URL::to('admi/docenteshow')?>">TODOS</a></li>
                     </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>PAGOS</span>
                     </a>
                     <ul class="sub">
                        <li><a href="<?=URL::to('admi/pagosnew')?>">NUEVO</a></li>
                        <li><a href="<?=URL::to('admi/pagoshow')?>">ver</a></li>
                     </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>ESTADISTICAS</span>
                    </a>
                    <ul class="sub">
                        <li><a href="">Morris</a></li>
                        <li><a href="">Chartjs</a></li>
                        <li><a href="">Flot Charts</a></li>
                        <li><a href="">C3 Chart</a></li>
                    </ul>
                </li> 
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-user"></i>
                        <span>USUARIOS</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=URL::to('admi/usersnew')?>">Nuevo</a></li>
                        <li><a href="<?=URL::to('admi/usersshow')?>">Mostrar</a></li>
                        <li><a href="<?=URL::to('admi/userssearch')?>">Busqueda</a></li>
                        <li><a href="<?=URL::to('admi/usersreport')?>">Reportes</a></li>
                    </ul>
                </li> 
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-user"></i>
                        <span>PERSONAL</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=URL::to('admi/personalnew')?>">Nuevo</a></li>
                        <li><a href="<?=URL::to('admi/personalshow')?>">Mostrar</a></li>
                        <li><a href="<?=URL::to('admi/personalbuscar')?>">Busqueda</a></li>
                        <li><a href="<?=URL::to('admi/personalrep')?>">Repostes</a></li>
                    </ul>
                </li>   
@stop
@section('content')
        <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Current page</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumbs-alt">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a class="active-trail active" href="#">Pages</a>
                        </li>
                        <li>
                            <a class="current" href="#">Elements</a>
                        </li>
                    </ul>
                </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Responsive table
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Company</th>
                                    <th class="numeric">Price</th>
                                    <th class="numeric">Change</th>
                                    <th class="numeric">Change %</th>
                                    <th class="numeric">Open</th>
                                    <th class="numeric">High</th>
                                    <th class="numeric">Low</th>
                                    <th class="numeric">Volume</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>AAC</td>
                                    <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                    <td class="numeric">$1.38</td>
                                    <td class="numeric">-0.01</td>
                                    <td class="numeric">-0.36%</td>
                                    <td class="numeric">$1.39</td>
                                    <td class="numeric">$1.39</td>
                                    <td class="numeric">$1.38</td>
                                    <td class="numeric">9,395</td>
                                </tr>
                                <tr>
                                    <td>AAD</td>
                                    <td>ARDENT LEISURE GROUP</td>
                                    <td class="numeric">$1.15</td>
                                    <td class="numeric">  +0.02</td>
                                    <td class="numeric">1.32%</td>
                                    <td class="numeric">$1.14</td>
                                    <td class="numeric">$1.15</td>
                                    <td class="numeric">$1.13</td>
                                    <td class="numeric">56,431</td>
                                </tr>
                                <tr>
                                    <td>AAX</td>
                                    <td>AUSENCO LIMITED</td>
                                    <td class="numeric">$4.00</td>
                                    <td class="numeric">-0.04</td>
                                    <td class="numeric">-0.99%</td>
                                    <td class="numeric">$4.01</td>
                                    <td class="numeric">$4.05</td>
                                    <td class="numeric">$4.00</td>
                                    <td class="numeric">90,641</td>
                                </tr>
                                <tr>
                                    <td>ABC</td>
                                    <td>ADELAIDE BRIGHTON LIMITED</td>
                                    <td class="numeric">$3.00</td>
                                    <td class="numeric">  +0.06</td>
                                    <td class="numeric">2.04%</td>
                                    <td class="numeric">$2.98</td>
                                    <td class="numeric">$3.00</td>
                                    <td class="numeric">$2.96</td>
                                    <td class="numeric">862,518</td>
                                </tr>
                                <tr>
                                    <td>ABP</td>
                                    <td>ABACUS PROPERTY GROUP</td>
                                    <td class="numeric">$1.91</td>
                                    <td class="numeric">0.00</td>
                                    <td class="numeric">0.00%</td>
                                    <td class="numeric">$1.92</td>
                                    <td class="numeric">$1.93</td>
                                    <td class="numeric">$1.90</td>
                                    <td class="numeric">595,701</td>
                                </tr>
                                <tr>
                                    <td>ABY</td>
                                    <td>ADITYA BIRLA MINERALS LIMITED</td>
                                    <td class="numeric">$0.77</td>
                                    <td class="numeric">  +0.02</td>
                                    <td class="numeric">2.00%</td>
                                    <td class="numeric">$0.76</td>
                                    <td class="numeric">$0.77</td>
                                    <td class="numeric">$0.76</td>
                                    <td class="numeric">54,567</td>
                                </tr>
                                
                                </tbody>
                            </table>
                        </section>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Heading goes here..
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
 <div class="col-md-6">
    <!--notification start-->
    <section class="panel">
        <header class="panel-heading">
            Notification <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
            <a href="javascript:;" class="fa fa-cog"></a>
            <a href="javascript:;" class="fa fa-times"></a>
            </span>
        </header>
        <div class="panel-body">
            <div class="alert alert-info clearfix">
                <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                <div class="notification-info">
                    <ul class="clearfix notification-meta">
                        <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                        <li class="pull-right notification-time">1 min ago</li>
                    </ul>
                    <p>
                        Urgent meeting for next proposal
                    </p>
                </div>
            </div>
            <div class="alert alert-danger">
                <span class="alert-icon"><i class="fa fa-facebook"></i></span>
                <div class="notification-info">
                    <ul class="clearfix notification-meta">
                        <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>
                        <li class="pull-right notification-time">7 Hours Ago</li>
                    </ul>
                    <p>
                        Very cool photo jack
                    </p>
                </div>
            </div>
            <div class="alert alert-success ">
                <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
                <div class="notification-info">
                    <ul class="clearfix notification-meta">
                        <li class="pull-left notification-sender">You have 5 message unread</li>
                        <li class="pull-right notification-time">1 min ago</li>
                    </ul>
                    <p>
                        <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
                    </p>
                </div>
            </div>
            <div class="alert alert-warning ">
                <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                <div class="notification-info">
                    <ul class="clearfix notification-meta">
                        <li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>
                        <li class="pull-right notification-time">5 Days Ago</li>
                    </ul>
                    <p>
                        Next 5 July Thursday is the last day
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--notification end-->
 </div>
 <div class="col-md-6">
    <!--todolist start-->
    <section class="panel">
        <header class="panel-heading">
            To Do List <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
            <a href="javascript:;" class="fa fa-cog"></a>
            <a href="javascript:;" class="fa fa-times"></a>
            </span>
        </header>
        <div class="panel-body">
            <ul class="to-do-list" id="sortable-todo">
                <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
                    <div class="todo-check pull-left">
                        <input type="checkbox" value="None" id="todo-check"/>
                        <label for="todo-check"></label>
                    </div>
                    <p class="todo-title">
                        Donec quam libero, rutrum non gravida ut
                    </p>
                    <div class="todo-actionlist pull-right clearfix">
                        <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                        <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                        <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                    </div>
                </li>
                <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
                    <div class="todo-check pull-left">
                        <input type="checkbox" value="None" id="todo-check1"/>
                        <label for="todo-check1"></label>
                    </div>
                    <p class="todo-title">
                        Donec quam libero, rutrum non gravida
                    </p>
                    <div class="todo-actionlist pull-right clearfix">
                        <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                        <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                        <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                    </div>
                </li>
                <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
                    <div class="todo-check pull-left">
                        <input type="checkbox" value="None" id="todo-check2"/>
                        <label for="todo-check2"></label>
                    </div>
                    <p class="todo-title">
                        Donec quam libero, rutrum non gravida ut
                    </p>
                    <div class="todo-actionlist pull-right clearfix">
                        <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                        <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                        <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                    </div>
                </li>
                <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
                    <div class="todo-check pull-left">
                        <input type="checkbox" value="None" id="todo-check3"/>
                        <label for="todo-check3"></label>
                    </div>
                    <p class="todo-title">
                        Donec quam libero, rutrum non gravida ut
                    </p>
                    <div class="todo-actionlist pull-right clearfix">
                        <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                        <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                        <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                    </div>
                </li>
                <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
                    <div class="todo-check pull-left">
                        <input type="checkbox" value="None" id="todo-check4" />
                        <label for="todo-check4"></label>
                    </div>
                    <p class="todo-title">
                        Donec quam libero, rutrum non gravida ut
                    </p>
                    <div class="todo-actionlist pull-right clearfix">
                        <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                        <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                        <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                    </div>
                </li>
                <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
                    <div class="todo-check pull-left">
                        <input type="checkbox" value="None" id="todo-check5"/>
                        <label for="todo-check5"></label>
                    </div>
                    <p class="todo-title">
                        Donec quam libero, rutrum non gravida ut
                    </p>
                    <div class="todo-actionlist pull-right clearfix">
                        <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                        <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                        <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                    </div>
                </li>
                <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
                    <div class="todo-check pull-left">
                        <input type="checkbox" value="None" id="todo-check6" />
                        <label for="todo-check6"></label>
                    </div>
                    <p class="todo-title">
                        Donec quam libero, rutrum non gravida ut
                    </p>
                    <div class="todo-actionlist pull-right clearfix">
                        <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                        <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                        <a href="#" class="todo-remove"><i class="ico-close"></i></a>
                    </div>
                </li>
            </ul>
            <div class="todo-action-bar">
                <div class="row">
                    <div class="col-xs-4 btn-todo-select">
                        <button type="submit" class="btn btn-default"><i class="fa fa-check"></i> Select All</button>
                    </div>
                    <div class="col-xs-4 todo-search-wrap">
                        <input type="text" class="form-control search todo-search pull-right" placeholder=" Search">
                    </div>
                    <div class="col-xs-4 btn-add-task">
                        <button type="submit" class="btn btn-default btn-primary"><i class="fa fa-plus"></i> Add Task</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--todolist end-->
 </div>
</div>
@stop 
@section('menu-derecha')
    @parent
@stop
@section('pie');
      <footer class="footer-section">
          <div class="text-center">
              2014 &copy; DIRECCION DE POSTGRADO
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
   @parent
@stop
@section('footer')
	@parent
@stop