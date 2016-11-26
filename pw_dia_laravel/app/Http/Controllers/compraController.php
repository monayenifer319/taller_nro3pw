<?php

namespace TiendaEnLinea\Http\Controllers;

use Illuminate\Http\Request;

use TiendaEnLinea\compra;
use TiendaEnLinea\Http\Requests;

class compraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = compra::all();
        return view('compras.index',compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.create');
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
            'fecha_registro'     => 'required|min:3',
            'valor'     => 'required|min:3',
            'cantidad'     => 'required|min:1',
            'producto_id'     => 'required|',
            'usuarios_id'     => 'required'
        ]);

        $datos = $request->all();
        compra::create($datos);
        return redirect('compra')->with('alert', 'La compra se ha sido creado con éxito');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compra = compra::findOrfail($id);
        return view('compras.show', compact('compra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compra = compra::findOrfail($id);
        return view('compras.edit', compact('compra'));
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
            'fecha_registro'     => 'required|min:3',
            'valor'     => 'required|min:3',
            'cantidad'     => 'required|',
            'productos_id'     => 'required',
            'usuarios_id'     => 'required|numeric'
        ]);

        $compra = compra::findOrFail($id);
        $compra->fill($request->all());
        $compra->save();
        return redirect('compras')->with('alert', 'La compra ha sido editado con éxito');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        compra::destroy($id);
        return redirect('compras')->with('alert', 'la compra se ha sido eliminado con éxito');;
    }
}
