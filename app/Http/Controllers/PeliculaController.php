<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Pelicula::orderBy('id', 'DESC')->get();

        return view('Pelicula.index',compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pelicula.create');
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
            'titulo' => 'required',
            'director' => 'required',
            'año' => 'max:4',
            'duracion' => '',
            'genero' => 'required',
            'existencia' => 'required'
        ]);


        $arraySave = [
            'titulo' => $request->get("titulo"),
            'director' => $request->get("director"),
            'año' => $request->get("año"),
            'duracion' => $request->get("duracion"),
            'genero' => $request->get("genero"),
            'existencia' => $request->get("existencia")
        ];

        $saveEmpleado = Pelicula::create($arraySave);

        return redirect()->route('pelicula.index')->with('success','Registro creado exitosamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula = Pelicula::find($id);
        return view('Pelicula.show',compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula = Pelicula::find($id);
        return view('Pelicula.edit',compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'titulo' => 'required',
            'director' => 'required',
            'año' => 'max:4',
            'duracion' => '',
            'genero' => 'required',
            'existencia' => 'required'
        ]);


        Pelicula::find($id)->update($request->all());

        return redirect()->route('pelicula.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Pelicula::find($id)->delete();
        return redirect()->route('pelicula.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
