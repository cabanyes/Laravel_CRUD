<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductosRequest;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos=Producto::all();
        return view("productos.index",compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductosRequest $request)
    {
        /*//$this->validate($request,['seccion'=>'required', 'pais'=>'required']);
        $producto = new Producto();
        $producto->Nombre=$request->nombre;
        $producto->Seccion=$request->seccion;
        $producto->Precio=$request->precio;
        $producto->Fecha=$request->fecha;
        $producto->Pais=$request->pais;

        $producto->save();*/
        $entrada=$request->all();
        if($archivo=$request->file('imagen')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images',$nombre);
            $entrada['ruta']=$nombre;

        }
        Producto::create($entrada);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $producto=Producto::findOrFail($id);
        return view("productos.show",compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto=Producto::findOrFail($id);
        return view("productos.edit",compact("producto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $producto=Producto::findOrFail($id);
        $producto->update($request->all());
        return redirect("/productos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto=Producto::findOrFail($id);
        $producto->delete();
        return redirect("/productos");//pagina index o inicio

    }
}
