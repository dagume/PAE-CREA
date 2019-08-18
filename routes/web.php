<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function() {
    Route::resource('visita/visitas', 'VisitaController');
    Route::resource('institucion/municipio', 'MunicipioController');
    Route::resource('institucion/colegio', 'ColegioController');
    Route::resource('institucion/sede', 'SedeController');
    Route::resource('usuario/supervisor', 'PersonaController');
    Route::resource('usuario/cuenta', 'UserController');
    Route::resource('formulario', 'FormularioController');
    Route::resource('encabezado1', 'Encabezado1Controller');
    Route::resource('visita', 'VisitaController');

});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
