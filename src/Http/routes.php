<?php

Route::group(['middleware' => ['auditor']], function (){
Route::get('/areas', 'Digitalmiig\Titulomiig\Controllers\AreaController@index');

Route::get('/editar-grado/{id}', 'Digitalmiig\Titulomiig\Controllers\AreaController@edit');

Route::post('/editargrado/{id}', 'Digitalmiig\Titulomiig\Controllers\AreaController@update');

Route::get('/eliminar-grado/{id}', 'Digitalmiig\Titulomiig\Controllers\AreaController@destroy');

Route::get('crear-area', function () {
    return view('titulomiig::crear-area');
});

Route::post('/creararea', 'Digitalmiig\Titulomiig\Controllers\AreaController@create');



Route::get('/titulos', function () {
	$titulos = DB::table('titulo')->get();
    return view('titulomiig::titulos')->with('titulos', $titulos);
});

Route::get('/editar-titulo/{id}', function ($id) {
    $titulos = DB::table('titulo')->where('id', '=', $id)->get();
    return view('titulomiig::editar-titulo')->with('titulos',$titulos);
});

Route::post('/editartitulo/{id}', 'Digitalmiig\Titulomiig\Controllers\TitulosController@update');

Route::get('/crear-titulo', function () {
    return view('titulomiig::crear-titulo');
});

Route::get('/eliminar-titulo/{id}', 'Digitalmiig\Titulomiig\Controllers\TitulosController@destroy');

Route::post('/creartitulo', 'Digitalmiig\Titulomiig\Controllers\TitulosController@create');









Route::get('excel-oficina', function () {
    return view('titulomiig::importExport');
});



Route::get('importExport', 'Digitalmiig\Titulomiig\Controllers\MaatwebsiteDemoController@importExport');
Route::get('exportador/{type}', 'Digitalmiig\Titulomiig\Controllers\MaatwebsiteDemoController@exportador');
Route::post('importador', 'Digitalmiig\Titulomiig\Controllers\MaatwebsiteDemoController@importador');

Route::get('exportar', 'Digitalmiig\Titulomiig\Controllers\MaatwebsiteDemoController@exportador');




});