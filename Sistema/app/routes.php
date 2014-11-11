<?php

/*Route::get('/', function()
{
	return View::make('index');
});*/
Route::get('/', 'HomeController@index');
Route::get('insc', 'insController@inscriptions');
/*login*/
Route::get('login', 'SessionsController@create');
Route::post('logins', 'SessionsController@login');
Route::get('logout', 'SessionsController@logout');
/*login*/

Route::controller('admi', 'admController');
Route::controller('aut', 'autController');
Route::controller('certifi', 'certController');
Route::controller('cp', 'contrlpagosController');
Route::controller('est', 'studentController'); 
Route::controller('doc', 'docController');
Route::controller('cert', 'certController');
