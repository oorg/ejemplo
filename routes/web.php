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

/*
Route::get('ejemplo/url', function() {
  return 'hola ejemplo';
});

Route::get('ejemplo/vista', function() {
  return view('vista');
});
*/

//Route::resource('materia', 'MateriaController');
/*
Route::get('/materia/listado', 'MateriaController@index');
Route::get('/materia/create', 'MateriaController@create');
Route::post('/materia/store', 'MateriaController@store');
Route::get('/materia/edit', 'MateriaController@edit');
Route::get('/materia/show', 'MateriaController@show');
Route::post('/materia/update', 'MateriaController@update');
*/
/*
Route::get('/materia/listado', 'MateriaController@index');
Route::get('/materia/create', 'MateriaController@create');
Route::post('/materia/store', 'MateriaController@store');
Route::get('/materia/show/{id}', 'MateriaController@show');
Route::get('/materia/edit/{id}', 'MateriaController@edit');
Route::post('/materia/update/{id}', 'MateriaController@update');
*/
/*
Route::get('/materia/show/{id?}', function($id = null){  //parametros entre rutas
//Route::get('/materia/show/{id?}', function($id = null) obligatorio
  //return 'info sabre materia '. $id;
  //return view('materias.showMateria')->with(['id' => $id]);//paso de variable a la vista
  //consulta a base de datos con id
  return view('materias.showMateria', compact('id'));//paso de variable a la vista
});*/

/*
Route::get('/materia/create', function() {
  return view('materias.formMateria');
});
Route::get('/materia/listado', function() {
  return view('materias.indexMateria');
});
Route::get('/materia/edit', function() {
  return view('materias.formEditMateria');
});
Route::get('/materia/show', function() {
  return view('materias.showMateria');
});

Route::post('/materia/store', function(){
  $materia = $_POST['materia'];
  //sql insert matere
  //redirect url
});
Route::post('/materia/update', function(){
  $materia = $_POST['materia'];
  //sql insert matere
  //redirect url
});
*/

Route::resource('materia', 'MateriaController');
Route::resource('alumno', 'AlumnoController');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('bienvenida');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/materias', 'MateriaController@index');
//Route::get('/alumno', 'AlumnoController@index');
//Route::get('/usuario', 'UsuarioController@index');
//Route::get('/dependencia', 'DependenciaController@index');
//Route::get('/empleado', 'EmpleadoController@index');




/*
git clone https://github.com/oorg/ejemplo.git //nombre por default
git clone https://github.com/oorg/ejemplo.git  otro_npmbre//cambiar nombre

clonar las librerias
a donde se clono el proyecto
cd otro_nombre
conposer install

archivo con llaves
descargar el original
php artisan key:generate


permisos para linux
set permissions
cd
sudo chgrp
sudo chmod

para elegir cual utilizar comando 
sudo nano...
reiniciar apache
sudo ... reiniciar
