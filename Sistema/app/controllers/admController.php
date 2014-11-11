<?php   

class admController extends BaseController {

	public function __construct()
	{ 
		    $this->beforeFilter('auth');
	}
	public function getIndex()
	{
	    	return View::make('adm.index');
	}
    
    public function getDatosnew()
    {
        return View::make('adm.datospersona_new');
    }
    public function postDatossave()
    {   
        $date = new DateTime();       
        DB::table('datospersona')->insert(
            array(
                'nombre' => Input::get('nombre'),
                'apellidop' => Input::get('apellidop'),
                'apellidom' => Input::get('apellidom'),
                'ci' => Input::get('ci'),
                'fecha_nac' => Input::get('fn'),
                'pais' => Input::get('pais'),
                'departamento' => Input::get('dep'),
                'provincia' => Input::get('prov'),
                'lugar' => 'Potosi',
                'estado_civil' => Input::get('ecivil'),
                'direccion' => Input::get('direccion'),
                'telefono' => Input::get('telefono'),
                'email' => Input::get('correo'),
                'fecharegistro' =>  $date->format('d/m/Y'),
                'fechamodificado' =>  $date->format('d/m/Y'),
                'updated_at' => $date->format('d/m/Y'),
                'created_at' => $date->format('d/m/Y'),
            )
        );
        return Redirect::to('admi/datoshow');
    }
    public function getDatoshow()
    {
        $datos = DB::table('datospersona')->get();
        return View::make('adm.datospersona_show')->with('dato',$datos);
    }
    public function postUsernew()
    {   
        $id =  Input::get('id');
        $id = DB::table('datospersona')->where('ci','=',$id)->first(); 
        $roles = DB::table('roles')->get(); 
        return View::make('adm.users_new')->with('persona',$id)->with('rol',$roles);
    }
    public function getUserssearch()
    {   
        return View::make('adm.users_search');
    }
    public function postUserssave()
    {   $date = new DateTime();       
        DB::table('users')->insert(
            array(
                'username' => Input::get('username'),
                'password' => Hash::make(Input::get('password')),
                'estado' => 'A', 
                'controlar_ip' => '192.168.1.1',
                '_registrado' =>  $date->format('d/m/Y'),
                '_modificado' =>  $date->format('d/m/Y'),
                'iddpersona'=> Input::get('persona'),
                'idroles' => Input::get('roles'),
                'updated_at' => $date->format('d/m/Y'),
                'created_at' => $date->format('d/m/Y'),
            )
        );
        return Redirect::to('admi/usersshow');  
    }
    public function getUsersshow()
    {
        $usuarios = DB::table('users')->get();  

        return View::make('adm.users_show')->with('usu', $usuarios);
    }
    public function postUsersedit($id)
    {
       // $usuarios = DB::table('users')->get();
       //editar usuario
        return View::make('adm.users_show');
    }
    public function postUsersbane($id)
    {
       // $usuarios = DB::table('users')->get();
       // dar de  baja al usuario
        return View::make('adm.users_show');
    }


    public function getDegreenew()
    {    
        return View::make('adm.degree_new');
    }
     public function postDegreesave()
    {   
       /* $t= Input::get('trabajo');
        $trab = DB::table('tipotrabajo')
        ->where('tipotrabajo.nombre','=', $t)
        ->select('idtt')
        ->get();*/
        //aqui hay un error no me recupera
        $date = new DateTime(); 
        DB::table('gradopostgrado')->insert(
            array( 
                'nombre' => Input::get('nombre'),
                'estado' => 'A',
                'grado_acad' => Input::get('gradoa'),
                'hpm' => Input::get('hpm'),
                'hnpm' => Input::get('hnpm'),
                'thm' => Input::get('thm'),
                'creditos' => Input::get('creditos'),
                'trabajo_final' => Input::get('trabajo_final'),
                'created_at' => $date->format('d/m/Y'),
                'updated_at' => $date->format('d/m/Y'),
            )
        );
        return Redirect::to('admi/degreeshow');
    }
    public function getDegreeshow()
    {   /*  un tip para cifrar url de id
             Crypt::encrypt($id) para cifrar
             Crypt::decrypt($valor_cifrado) para descifrar
        */
        
        $post = DB::table('gradopostgrado')->get();
        return View::make('adm.degree_show')->with('postg', $post);
    }
    public function getDegreedit()
    {
        $post = DB::table('tipopostgrado')->get();
        return View::make('adm.nivel_edit')->with('postg', $post);
    }
    public function getPerfil()
    {   
        return View::make('adm.perfil');
    }
    public function getProgramnew()
    {   
        $grado =DB::table('gradopostgrado')->get();
        return View::make('adm.program_new')->with('grado', $grado);
    }
     public function postProgramsave()
    {   
        $date = new DateTime();
      /*$postgrado = Input::get('postg');
        $idp = DB::table('postgrado')
             ->select('idpostgrado')
             ->where('nombre','=',$postgrado)
             ->get();*/
             $n = Input::get('nombre');
             $v = Input::get('version');
        DB::table('programa')->insert(
            array(
                'nombre' => Input::get('nombre'),
                'modalidad' => Input::get('modalidad'),
                'versio' => Input::get('versio'),
                'unidad_encargada' => Input::get('unidad_encargada'),
                'sede' => Input::get('sede'),
                'nota_de_aprobacion'=> Input::get('nota_de_aprobacion'),
                'maximo_de_alumnos' => Input::get('maximo_de_alumnos'),
                'responsable' => Input::get('responsable'),
                'observaciones' => Input::get('observaciones'),
                'carga_horaria' => Input::get('carga_horaria'),
                'creditos' => Input::get('creditos'),
                'modalidad_graduacion' => Input::get('modalidadgr'),
                'estado' =>'A',
                'fecha_inicio'=>Input::get('finicio'),
                'fecha_fin'=>Input::get('ffin'),
                'updated_at' =>$date->format('d/m/Y'),
                'created_at'=> $date->format('d/m/Y'),
                'costo' => Input::get('costo'),
                'mencion' => Input::get('mencion'),
                'gradacadrespons' => Input::get('gradacadrespons'),
                'modalidad_admision'=> Input::get('modalidad_admision'),
                'requisitos' => Input::get('requisitos'),
                'objetivo_general' => Input::get('objetivo_general'),
                'objetivos_especificos' => Input::get('objetivos_especificos'),
                'perfil'=> Input::get('perfil'),
                'condiciones_permanencia'=> Input::get('condiciones_permanencia'),
                'idgpostgrado' => Input::get('gradoapos'),//recuperar de grado de postgrado          
            )
        );
        return Redirect::to('admi/programshow');
    }

    public function postProgramver($id)
    {
       // $programa = DB::table('programa')->get();
        return 'hola';
    }

    public function getProgramshow()
    {
        /*$programa = DB::table('programa')->where('idprograma','11')->first();*/
        $programa = DB::table('programa')->get();
        return View::make('adm.program_show')->with('prog', $programa);
    }

    public function getReporte()
    {
        /*$programa = DB::table('programa')->where('idprograma','11')->first();*/
        $programa = DB::table('programa')->get();

        $code = '<html>
            <head>
                <title></title>
            </head>
            <body>
                <h1>Lista de programas</h1>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Modalidad</th>
                                </tr>                                
                            </thead>
                            <tbody>';
                                foreach($programa as $prog){
                                $code = $code.'<tr>
                                    <td>'.$prog->nombre.'</td>
                                    <td>'.$prog->modalidad.'</td>
                                </tr>';
                                }
                            $code = $code.'</tbody>
                        </table>
                    </div>
                </div>
            </body>
        </html>';
        //return PDF::load($code, 'letter', 'portrait')->download('lista de programas');
        //$html = View::make('adm.program_show')->with('prog', $programa);
        return PDF::load($code, 'letter', 'portrait')->show();

    }

    public function getProgramsver()
    {
        $programa = DB::table('programa')
            ->join('tipopostgrado', 'tipopostgrado.idpostgrado', '=', 'programa.idpostgrado')
            ->select('programa.idprograma as id', 'programa.nombre as nombrep', 'programa.modalidad as modalidad', 'programa.versio as version', 'tipopostgrado.nombre as gradoacademico')
            ->get();
        /*$programa = DB::table('programa')->where('idprograma','11')->first();*/
        
        //$programa = DB::table('programa')->get();
        return View::make('adm.programshow')->with('prog', $programa);
    }
    public function postConvenionew()
    { 
        return Redirect::to('admi/programver/');
    }
    public function getOffernew()
    { 
       $programa = DB::table('programa')
            ->get();
        return View::make('adm.offer_new')->with('prog', $programa);
    }

    public function postOffersave()
    { 
        $date = new DateTime();       
        
        DB::table('oferta')->insert(
            array(
                'url' => Input::get('url'),
                'estado' => Input::get('estado'),
                'observaciones' => Input::get('observaciones'),
                'fecha_inicio' => Input::get('fecha_inicio'),
                'fecha_fin' => Input::get('fecha_fin'),
                'idprograma' => Input::get('program'),
                'updated_at' => $date->format('d/m/Y'),
                'created_at' => $date->format('d/m/Y'),    
            )
        );
        return Redirect::to('admi/offershow');
    }
    public function getOffershow()
    { 
       $oferta = DB::table('oferta')->get();
        return View::make('adm.offer_show')->with('offer', $oferta);
    }
    public function getEventnew()
    { 
        return View::make('adm.event_new');
    }
    public function postEventsave()
    { 
        $date = new DateTime();       
        
        DB::table('evento')->insert(
            array(
                'nombre' => Input::get('nombre'),
                'descripcion' => Input::get('descripcion'),
                'url' => '  ',
                'estado' => 'A',
                'updated_at' => $date->format('d/m/Y'),
                'created_at' => $date->format('d/m/Y'),    
            )
        );
        return Redirect::to('admi/eventshow');
    }
    public function getEventshow()
    { 
       $evento = DB::table('evento')->get();
       return View::make('adm.event_show')->with('eventos', $evento);
    }

    public function getMateriasnew($id)
    { 
        //$idprograma=&$id;
        $prog = DB::table('programa')->where('idprograma','=', $id)->first();
        $tipo = DB::table('tipopostgrado')->where('idpostgrado','=', $prog->grado_academico)->first();
        $modulos = DB::table('modulos')->where('idprograma','=',$id)->get();
        return View::make('adm.materias_new')->with(array('prog'=> $prog, 'tipo' => $tipo,'modulos' => $modulos));
    }
    public function postMateriassave()
    {   // program::find(@id):
        //http://www.youtube.com/watch?v=2LHVWIvI97s
        $p=Input::get('id');
         $date = new DateTime();       
        DB::table('modulos')->insert(
            array(
                'nombre' => Input::get('nombre'),
                'total_horas_presenciales' => Input::get('total_horas_presenciales'),
                'total_horas_no_presenciales' => Input::get('total_horas_no_presenciales'),
                'total_horas' => Input::get('total_horas'),
                'creditos' => Input::get('creditos'),
                'grupo' => Input::get('grupo'),
                'observaciones' => Input::get('observaciones'),
                'idprograma' => Input::get('id'),
                'updated_at' => $date->format('d/m/Y'),
                'created_at' => $date->format('d/m/Y'),
                'estado' => 'I',  
                'fecha_inicio' => Input::get('finicio'),
                'fecha_fin' => Input::get('ffin')
            )
        );
        return Redirect::to('admi/materiasnew/'.$p);
    }
   /* public function getMateriasedit($id)
    {   // program::find(@id):
        //http://www.youtube.com/watch?v=2LHVWIvI97s      
        $modulo = DB::table('modulo')->get();
        return View::make('admi/materiasnew/')->with('mod',$modulo);
    }
    public function getMateriasupdate($id)
    {   // program::find(@id):
        //http://www.youtube.com/watch?v=2LHVWIvI97s      
        $input = Input::all();
        $modulo = Post::find($id);
        $modulo ->nombre=$input['nombre'];
        $modulo ->versio=$input['version']; 
        $modulo->save();
     return Redirect::to('admi/programshow');
    }
    public function getMateriasdestroy($id)
    {   
        $modulo = modulo::find($id);
        $post->delete();
     return Redirect::to('admi/programshow');
    }
    */
    public function getDocentenew()
    {
      /*  $eventos = DB::table('eventos')
            ->join('users', 'users.id', '=', 'eventos.users_id')
            ->select('eventos.id', 'eventos.name', 'eventos.date', 'users.username', 'users.id as usuario')
            ->get();
       
       // $eventos = json_encode($eventos);

        $lic = DB::table('programa')
            ->join('tipopostgrado','tipopostgrado.id', '=', 'programa.id')
            ->select('programa.id', 'programa.nombre', 'programa.estado','programa.modalidad') 
            ->get();*/
        return View::make('adm.docente_new');
    } 

    public function postDocentesave()
    {
        return Redirect::to('admi/docenteshow');
    }
    public function getDocenteshow()
    {
        return View::make('adm.docente_show');
    }
    public function getInscritosshow()
    {
        return View::make('adm.inscritos_show');
    }
    public function getInscritosupdate()
    {
        return View::make('adm.inscritos_update');
    }
    public function getPagonew()
    {
        return View::make('adm.pago_new');
    }
    public function postPagosave()
    {
       return Redirect::to('admi/pagoshow');
    }
    public function getPagoshow()
    {
        return View::make('adm.pago_show');
    }
    
    /* 
    public function datos estudiante()
    {
        auth
        confirmed
        estado 
        mnethostid 
        username 
        password 
        idnumber 
        firstname
        lastname 
        email 
        icq 
        aim 
        phone1 
        phone2 
        institution 
        department 
        address 
        city 
        country
        lang 
        timezone 
        firstaccess 
        lastaccess 
        lastlogin 
        currentlogin
        lastip 
        description
        mailformat 
        maildisplay
        htmleditor 
        autosubscribe
        id_depto 
        id_prov 
        id_estado_civil
        fec_nac date
        updated_at
        created_at
        remember_token
        return View::make('admi.tipo_show');
    }
    */

    public function getPersonalshow()
    {
        $personal = DB::table('personal')->get();

        return View::make('adm.personal')->with('personal', $personal);
    }

    public function postPersonalnew()
    {
        return View::make('adm.personal_new');
    }    

    public function postPersonalnewsave()
    {
        /*DB::table('personal')->insert(
            arrary(
                'ci' => Input::get('ci')
            )
        );*/
        return Redirect::to('admi/personal');
    }

    public function getPersonaledit($id)
    {
        $persona = DB::table('personal')
        ->where('id', '=', $id)
        ->get();
        
        return View::make('adm.personal_edit')->with('persona', $persona);
    }

    public function postPersonaleditsave()
    {
        /*$id = Input::get('id');
        DB::table('personal')->where('id', $id)
        ->update
            arrary(
                'ci' => Input::get('ci'),
            )
        );*/
        return Redirect::to('admi/personal');
    }
    /*
	public function getEventos()
	{

		return View::make('event');
	}
    public function postEventosedit($id)
    {
        $eventos = DB::table('eventos')
            ->join('users', 'users.id', '=', 'eventos.users_id')
            ->select('eventos.id', 'eventos.name', 'eventos.date', 'users.username', 'users.id as usuario')
            ->get();

        $eventos = json_encode($eventos);
        return View::make('event');
    }
    public function usuariosregitrados()
    {
        return Redirect::to('/usuario');
    }
    */
}