<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
require ('vendor/autoload.php');
use Mailgun\Mailgun;
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
  
/*
    if(Auth::check()){
        return "estas logeado" ;
    }else{
        return "No estas logeado";
    }
    */ 
    //return view('welcome');
/*
    $datos=[
        "titulo"=>"hey you",
        "oontenido"=>"Ciutadants de Catalunya"
    ];
Mail::send("emails.test",$datos,function($mensaje){
    $mensaje->to("juanfrmora@gmail.com","juan")->subject("ojo");
});*/
# Include the Autoloader (see "Libraries" for install instructions)

# Instantiate the client.
$mgClient = new Mailgun('1191a2b086ad9045f11b771a150e7f77-a2b91229-723826b2');
$domain = "sandbox73f62aec2d2d4adfad157f670e57ddda.mailgun.org";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
	'from'	=> 'Excited User <juanfrmora@gmail.com>',
	'to'	=> 'Baz <juanfrmora@gmail.com>',
	'subject' => 'Hello',
	'text'	=> 'Testing some Mailgun awesomness!'
));
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