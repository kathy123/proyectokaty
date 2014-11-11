
<?php
function generaSelect()
{
	include 'conexion.php';
	conectar();
	$consulta=pg_query("SELECT id, opcion FROM _paises");
	desconectar();

	// Voy imprimiendo el primer select compuesto por los paises
	echo "<select name='_paises' id='_paises' onChange='cargaContenido(this.id)'>";
	echo "<option value='0'>Seleccione Pais</option>";
	while($registro=pg_fetch_row($consulta))
		
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}
?>
@extends('layouts.master')

@section('title')
 UATF | Inscripción
@stop
@section('header')

@stop
@section('content')
<div class="login">  
  <!-- PAGE -->
  <div id="page">
      <!-- REGISTER -->
      <section id="register"> 
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-2">
              <div class="login-box-plain">
              <span>TODOS LOS CAMPOS CON (*) SON OBLIGATORIOS</span>
                <h2 class="bigintro">Formulario de Registro</h2>
                <div class="divide-40"></div>
                <form class="form-horizontal" role="form" method="post" action="<?=URL::to('admi/trabajofinalsave');?>">
                <div class="form-group">
                <div class="col-md-3">
                <i class="fa fa-graduation-cap"></i><label for="exampleInputName">Programa</label>
                </div>
                <div class="col-md-5">
                @if($programa)
                  <select name="programa" id="focusedInput" class="form-control input-sm m-bot15" required>
                    @foreach($programa as $pro)
                    <option value="{{$pro->idprograma}}">{{$pro->nombre}}</option>
                    @endforeach
                   </select>
                </div>
                @else 
                  <div class="col-lg-4">        
                   <span>no hay datos para mostrar</span>
                  </div>
                @endif
                </div>
                  <H2>DATOS PERSONALES</H2>
                  <div class="form-group">
                    <div class="col-md-3">
	                  <label for="exampleInputName">Nombre</label>
	                  </div>
                     <div class="col-md-5">
                     <input type="text" name="firstname" class="text-capitalize form-control" class="" id="" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3">
	                  <label for="apellidos">Apellido Paterno</label>
	                </div>
                    <div class="col-md-5">
                  		<input type="text" name="apellidos"class="text-capitalize form-control" id="" >
                  	</div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3">
	                  <label for="apellidos">Apellidos Materno</label>
	                </div>
                    <div class="col-md-5">
                  		<input type="text" name="apellidos"class="text-capitalize form-control" id="" >
                  	</div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">Fecha de Nacimiento (*):</label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>

				   <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">País de Nacimiento (*):</label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>
				   <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">Lugar de Nacimiento (*):</label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>
                  <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">Provincia (*):</label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>
				   <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">Departamento (*):</label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>

                    <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">Carnet de Identidad (*): </label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>
				   <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">Estado Civil (*):</label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>
				   <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">Dirección Domicilio (*): </label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>
				   <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">Teléfono Domicilio (*): </label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>
				   <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">Celular (*):</label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>
				   <div class="form-group">
                     <div class="col-md-3">
                        <label for="exampleInputName">Correo Electronico (*): </label>
                     </div>
                     <div class="col-md-5">
                        <input type="text" name="email" class="form-control" id="" >
                     </div>
                    </div>
				   <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">Lugar de Residencia actual(*): </label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>
				   <h2>INFORMACION LABORAL</h2>
                 <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">Institución donde Trabaja (*): </label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>
				   <div class="form-group">
                     <div class="col-md-3">
				        <label for="ape" class="col-sm-3 control-label">Dirección Laboral(*):  </label>
				     </div>
				     <div class="col-sm-5">
				       <input type="email" class="form-control" id="ape" placeholder="Email">
				     </div>
				   </div>
                   
                  <div class="form-group">
                     <div class="col-md-3">
	                   <label for="exampleInputUsername">Teléfono (*): </label>
	                 </div>
	                 <div class="col-md-5">
	                   <input type="text" class="form-control"name="phone1" id="exampleInputUsername" >
                     </div>
                  </div>
                  <div class="form-group">
	                <div class="col-md-3">
	                  <label for="exampleInputName">Fax (*): </label>
	                </div>
	                <div class="col-md-5">
	                  <input type="text" class="form-control" id="" >
	                </div>
                  </div>
                  <div class="form-group">
	                 <div class="col-md-3">
	                   <label for="exampleInputEmail1">Email Institucional(*):</label>
	                 </div>
                     <div class="col-md-5">
                       <input type="email" class="form-control" name=" " id="exampleInputEmail1" >
                     </div>
                  </div>
                  <div class="form-group"> 
                    <div class="col-md-3">
	                  <label for="exampleInputPassword1">Ocupación Actual (*): </label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" id="exampleInputPassword1" >
                    </div>
                  </div>
                  <div class="form-group"> 
                    <div class="col-md-3">
	                  <label for="exampleInputPassword2">Estudios Superiores (Universidad)(*):</label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" name="provincia" id="exampleInputPassword2" >
                    </div>
                  </div>
                  <div class="form-group"> 
                    <div class="col-md-3">
	                  <label for="exampleInputPassword1">Facultad (*):</label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" name="" id="exampleInputPassword1" >
	                </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3"> 
	                  <label for="exampleInputPassword1">Ciudad(*): </label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" id="exampleInputPassword1" >
	                </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-md-3"> 
	                  <label for="exampleInputPassword1">País (*):</label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" id="exampleInputPassword1" >
	                </div>
                  </div>
                                	



                  <div class="form-group">
                    <div class="col-md-3"> 
	                  <label for="exampleInputPassword1">Diploma Académico(*): </label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" id="exampleInputPassword1" >
	                </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3"> 
	                  <label for="exampleInputPassword1">Título en Provisión Nacional (*): 	</label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" id="exampleInputPassword1" >
	                </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3"> 
	                  <label for="exampleInputPassword1">Postgrado(*): </label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" id="exampleInputPassword1" >
	                </div>
                  </div>
                  <h2>utimos cargo desempe;aso</h2>
                  De (año) (*): 	 Ejemplo: 2014
	            Ejemplo: 2014
 	
 	

                  <div class="form-group">
                    <div class="col-md-3"> 
	                  <label for="exampleInputPassword1">De (año) (*): </label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" id="exampleInputPassword1" >
	                </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3"> 
	                  <label for="exampleInputPassword1">A (año) (*):  </label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" id="exampleInputPassword1" >
	                </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3"> 
	                  <label for="exampleInputPassword1">Cargo(*):  </label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" id="exampleInputPassword1" >
	                </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-3"> 
	                  <label for="exampleInputPassword1">Institución(*):</label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" id="exampleInputPassword1" >
	                </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-3"> 
	                  <label for="exampleInputPassword1">Unidad(*):</label>
	                </div>
	                <div class="col-md-5">
	                  <input type="password" class="form-control" id="exampleInputPassword1" >
	                </div>
                  </div>
                    <div id="demo" style="width:600px;">
					<div class="form-group">
						<select disabled="disabled" name="_provincias" id="_provincias">
							<option value="0">Selecciona Provincia...</option>
						</select>
					</div>
					<div class="form-group">
						<select disabled="disabled" name="_departamentos" id="_departamentos">
							<option value="0">Selecciona Departamento...</option>
						</select>
					</div>
					<div class="form-group"><?php generaSelect(); ?></div>
				   </div>
                  <div class="form-actions">
                   <button type="submit" class="btn btn-success">Registrarse</button>
                  </div>
                </form>
               
                <div class="divide-20"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/REGISTER -->
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      Launch demo modal
      </button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
                        
@stop
@section('pie')
       
@stop
@section('footer')
  @parent
  <?php
  echo HTML::script('select_dependientes_3_niveles.js');
  ?>
@stop
