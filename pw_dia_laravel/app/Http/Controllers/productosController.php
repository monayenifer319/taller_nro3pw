<?php

namespace TiendaEnLinea\Http\Controllers;

use Illuminate\Http\Request;

use TiendaEnLinea\Http\Requests;
use TiendaEnLinea\productos;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = producto::all();
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre'     => 'required|min:3',
            'descripcion'   => 'required|min:3',
            'precio'   => 'required|min:3',
            'fecha_registro'      => 'required',
            'cantidad'    => 'required',
            'adjunto_producto'    => 'required'
        ]);

        $datos = $request->all();
        productos::create($datos);
        return redirect('producto')->with('alert', 'El producto ha sido creado con éxito');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = producto::findOrfail($id);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = producto::findOrfail($id);
        return view('productos.edit', compact('producto'));
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
        $this->validate($request, [
            'nombre'     => 'required|min:3',
            'descripcion'     => 'required|min:3',
            'precio'     => 'required|email',
            'fecha_registro'     => 'required',
            'cantidad'     => 'required|numeric',
            'adjunto_producto'     => 'required'
        ]);

        $producto = producto::findOrFail($id);
        $producto->fill($request->all());
        $producto->save();
        return redirect('producto')->with('alert', 'El producto ha sido editado con éxito');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        usuario::destroy($id);
        return redirect('producto')->with('alert', 'El producto ha sido eliminado con éxito');;
    }
}
