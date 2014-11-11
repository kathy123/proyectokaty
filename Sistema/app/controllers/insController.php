<?php

class insController extends BaseController {

    public function index()
    { 
       return'holaaa'; 
    }
    public function inscriptions()
    { 
       $prog = DB::table('programa')->get();
       return View::make('form')->with('programa', $prog);
    }
    /*
   public function getInscriptions($id)
    { 
       $prog = DB::table('programa')->where('idprograma','=', $id)->first();
       return View::make('formreg')->with('programa', $prog);
    }*/
   /*   public function postInscripsave()
    { 
      /*
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
	       return Redirect::to('//offershow');
    }  
    */
}
