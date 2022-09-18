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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/empleado/index', 'EmpleadoController@index')->name('empleado.index');

Route::get('empleado/{empleado}/show','EmpleadoController@show')->name('empleado.show');

Route::get('/empleado/create', 'EmpleadoController@create')->name('empleado.create');
Route::post('/empleado/store', 'EmpleadoController@store')->name('empleado.store');

Route::get('empleado/{empleado}/edit','EmpleadoController@edit')->name('empleado.edit');
Route::put('empleado/{emppleado}','EmpleadoController@update')->name('empleado.update');

Route::delete('/empleado/{empleado}', 'EmpleadoController@destroy')->name('empleado.destroy');


Route::post('/changeLang', 'HomeController@changeLang')->name('changeLang');

Route::get('/changeLangGET/{locale_id}', 'HomeController@changeLangGet')->name('changeLangGET');

//Nuevas rutas Datos contacto
Route::get('datoContacto','DatoContactoController@index')->name('datoContacto.index');

Route::get('datoContacto/{empleado}/create','DatoContactoController@create')->name('datoContacto.create');
Route::post('datoContacto','DatoContactoController@store')->name('datoContacto.store');

Route::get('datoContacto/{datoContacto}/show','DatoContactoController@show')->name('datoContacto.show');

Route::get('datoContacto/{datoContacto}/edit','DatoContactoController@edit')->name('datoContacto.edit');
Route::put('datoContacto/{datoContacto}','DatoContactoController@update')->name('datoContacto.update');

Route::delete('datoContacto/{datoContacto}/{empleadoId}','DatoContactoController@destroy')->name('datoContacto.destroy');

//Rutas del CRUD curso
Route::get('/curso/index', 'CursoController@index')->name('curso.index');
Route::get('/curso/create', 'CursoController@create')->name('curso.create');
Route::post('/curso/store', 'CursoController@store')->name('curso.store');
Route::delete('/curso/{curso}', 'CursoController@destroy')->name('curso.destroy');
Route::get('curso/{curso}/edit','CursoController@edit')->name('curso.edit');
Route::put('curso/{curso}','CursoController@update')->name('curso.update');
Route::get('curso/{curso}/show','CursoController@show')->name('curso.show');


//Rutas de Puestos
Route::get('/puestos/index', 'PuestosController@index')->name('puestos.index');

Route::get('/puestos/create', 'PuestosController@create')->name('puestos.create');
Route::post('/puestos/store', 'PuestosController@store')->name('puestos.store');

Route::get('puestos/{puestos}/edit','PuestosController@edit')->name('puestos.edit');
Route::put('puestos/{puestos}','PuestosController@update')->name('puestos.update');

Route::get('puestos/{puestos}/show','PuestosController@show')->name('puestos.show');

Route::delete('/puestos/{puestos}', 'PuestosController@destroy')->name('puestos.destroy');


//Nuevas Rutas del CRUD LIBROS
Route::get('/libro/index', 'LibroController@index')->name('libro.index');
Route::get('/libro/create', 'LibroController@create')->name('libro.create');
Route::post('/libro/store', 'LibroController@store')->name('libro.store');
Route::delete('/libro/{libro}', 'LibroController@destroy')->name('libro.destroy');
Route::get('libro/{libro}/edit','LibroController@edit')->name('libro.edit');
Route::put('libro/{libro}','LibroController@update')->name('libro.update');
Route::get('libro/{libro}/show','LibroController@show')->name('libro.show');