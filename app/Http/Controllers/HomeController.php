<?php
//archivo para guardar y gestionar la informacion de sesiones

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //$request->session()->put(['juan'=>'Administrador']); // usando una instancia de la classe request

        //session(['maria'=>'estudiante']); //usando funcion superglobal session
        //$request->session()->forget('juan');
        //$request->session()->flush();

//$request->session()->flash('entrada7','exito7'); // guarda informacion de sesiones de duracion corta
//$request->session()->reflash();

//$request->session()->keep('alejandro','estudiante');
//$request->session()->flash('entrada8','exito8');

        $request->session()->regenerate(); //cambia el id del token de sesion previene el ataque en session estatica
        
       return $request->session()->all();
    }
}
