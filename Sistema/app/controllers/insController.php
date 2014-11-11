<?php

class insController extends BaseController {

    public function index()
    { 
       return'holaaa'; 
    }
    /*public function inscriptions()
    { 
       $prog = DB::table('programa')->get();
       return View::make('form')->with('programa', $prog);
       
    }*/
 
   public function getInscriptions($id)
    { 
       $prog = DB::table('programa')->where('idprograma','=', $id)->first();
       return View::make('formreg')->with('programa', $prog);
    }
   /*   public function postInscripsave()
    { 
     /*   id bigserial NOT NULL,
					  auth = 'manual'
					  confirmed = '1'
					  estado = 'A'
					  mnethostid = ''1
					  username ='username'
					  password ='password'
					  idnumber ='ci'
					  firstname ='nombre'
					  lastname ='apellidos'
					  email ='correo'
					  icq ='12909668'
					  aim POSTGRADO Y SE RELACIONA CON _bp_programas= '1'
					  phone1 ='telefono'
					  phone2 ='celular'
					  institution ='institucion vacio'
					  department ='vacio'
					  address ='direccion'
					  city ='ciudad'
					  country ='BO'
					  lang ='es'
					  timezone ='99'
					  firstaccess ='serie de numeros'
					  lastaccess ='serie de numeross'
					  lastlogin='serie de numeros'
					  currentlogin='serie de numeros' 
					  lastip ='direccion IP'
					  description ='debe ser adicionado por el adm'
					  mailformat ='1'
					  maildisplay ='2'
					  htmleditor ='1'
					  autosubscribe ='1'
					  id_depto ='7 iddepartamento'
					  id_prov '92 idprovincia'
					  id_estado_civil ='1 idestadicivil'
					  fec_nac = '1975-09-11 fechanac'
					  updated_at 
					  created_at 
					  remember_token 
  
);
    }  
    */
}
