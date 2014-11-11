@extends('layouts.adm')

@section('title') 
  @parent
@stop
@section('header')
	@parent
     <?php
    echo HTML::style('assets/js/bootstrap-fileupload/bootstrap-fileupload.css'); 
    echo HTML::style('assets/js/bootstrap-datepicker/css/datepicker.css'); 
    echo HTML::style('assets/js/bootstrap-colorpicker/css/colorpicker.css');
    echo HTML::style('assets/js/jquery-tags-input/jquery.tagsinput.css'); 
    echo HTML::style('assets/js/bootstrap-colorpicker/css/colorpicker.css');
    echo HTML::style('assets/js/bootstrap-timepicker/compiled/timepicker.css');
    echo HTML::style('assets/js/bootstrap-daterangepicker/daterangepicker-bs3.css');
    echo HTML::style('assets/js/bootstrap-datetimepicker/css/datetimepicker.css');
    echo HTML::style('assets/js/jquery-tags-input/jquery.tagsinput.css');
    ?>
    
@stop

@section('content')
             <!-- page start-->
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
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Fecha Final</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="fecha_fin"  type="text" required />
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
                        Advanced File Input
                          <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>
                            <a class="fa fa-cog" href="javascript:;"></a>
                            <a class="fa fa-times" href="javascript:;"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <form action="#" class="form-horizontal ">
                            <div class="form-group">
                                <label class="control-label col-md-3">Default</label>
                                <div class="col-md-4">
                                    <input type="file" class="default" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Without input</label>
                                <div class="controls col-md-9">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="default" />
                                                </span>
                                        <span class="fileupload-preview" style="margin-left:5px;"></span>
                                        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group last">
                                <label class="control-label col-md-3">Image Upload</label>
                                <div class="col-md-9">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" />
                                                   </span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                        </div>
                                    </div>
                                    <span class="label label-danger">NOTE!</span>
                                             <span>
                                             Attached image thumbnail is
                                             supported in Latest Firefox, Chrome, Opera,
                                             Safari and Internet Explorer 10 only
                                             </span>
                                </div>
                            </div>

                        </form>
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
            <!-- page end-->

@stop
@section('menu-derecha')
    @parent
@stop
@section('pie');
@stop
@section('footer')
<?php 
 echo HTML::script('assets/js/jquery-1.8.3.min.js');
 echo HTML::script('assets/js/tinymce/tinymce.full.js');

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