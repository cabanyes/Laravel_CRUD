<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
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

  /* $user=Auth::User();
    if($user->esAdmin()){
        echo "eres un sucio administrador";
    }else {
       echo "eres estudiante";
    }*/
    return view('welcome');
/*
    if(Auth::check()){
        return "estas logeado" ;
    }else{
        return "No estas logeado";
    }
    */
});

Route::resource('/productos','ProductosController');


/*
Route::get('/inicio', 'ProductosController@index');

Route::get('/crear', 'ProductosController@create');
Route::get('/actualizar', 'ProductosController@update');
Route::get('/insertar', 'ProductosController@store');
Route::get('/borrar', 'ProductosController@destroy');
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdministradorController@index');