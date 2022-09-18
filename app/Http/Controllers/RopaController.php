<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ropa;

class RopaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ropa = Ropa::orderBy('pedido', 'DESC')->get();

        return view('Ropa.index',compact('ropa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ropa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ropa'      => 'required',
            'talla'     => 'required',
            'genero'    => 'required',
            'marca'     => 'required',
            'cantidad'  => 'required',
            'color'     => 'required'
        ]);


        $arraySave = [
            'ropa'      => $request->get("ropa"),
            'talla'     => $request->get("talla"),
            'genero'    => $request->get("genero"),
            'marca'     => $request->get("marca"),
            'cantidad'  => $request->get("cantidad"),
            'color'     => $request->get("color")
        ];

        $saveRopa = Ropa::create($arraySave);

        return redirect()->route('ropa.index')->with('success','Registro creado exitosamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ropa $pedido
     * @return \Illuminate\Http\Response
     */
    public function show($pedido)
    {
        $ropa = Ropa::find($pedido);
        return view('Ropa.show',compact('ropa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit($pedido)
    {
        $ropa = Ropa::find($peido);
        return view('Ropa.edit',compact('ropa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pedido)
    {

        $this->validate($request,[
            'ropa'      => 'required',
            'talla'     => 'required',
            'genero'    => 'required',
            'marca'     => 'required',
            'cantidad'  => 'required',
            'color'     => 'required'
        ]);


        Ropa::find($pedido)->update($request->all());

        return redirect()->route('ropa.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($pedido)
    {

        Ropa::find($pedido)->delete();
        return redirect()->route('ropa.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
