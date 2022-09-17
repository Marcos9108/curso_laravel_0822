<?php

namespace App\Http\Controllers;

use App\Puestos;
use Illuminate\Http\Request;

class PuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puestos = Puestos::orderBy('id', 'DESC')->get();

        return view('Puestos.index',compact('puestos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Puestos.create');
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
            'nombre' => 'required|max:10',
            'requisitos' => 'required',
            'rango_salario' => 'required',
            'puesto_disponible' => 'required',
        ]);

        $arraySave = [
            'nombre' => $request->get("nombre"),
            'requisitos' => $request->get("requisitos"),
            'rango_salario' => $request->get("rango_salario"),
            'puesto_disponible' => $request->get("puesto_disponible"),
        ];

        $savePuestos = Puestos::create($arraySave);
        return redirect()->route('puestos.index')->with('success','Registro creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Puestos  $puestos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $puestos = Puestos::find($id);
        return view('puestos.show',compact('puestos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Puestos  $puestos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $puestos = Puestos::find($id);
        return view('puestos.edit',compact('puestos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Puestos  $puestos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['nombre' => 'required|max:10',
        'requisitos' => 'required',
        'rango_salario' => 'required',
        'puesto_disponible' => 'required',
        ]);
        
        Puestos::find($id)->update($request->all());
        return redirect()->route('puestos.index')->with('success','Registro creado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Puestos  $puestos
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPuestos)
    {
        Puestos::find($idPuestos)->delete();
        return redirect()->route('puestos.index')->with('success' , 'Registro eliminado existosamente.');
    }
}
