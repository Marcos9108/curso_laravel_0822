<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libro = Libro::orderBy('id', 'DESC')->get();

        return view('libro.index',compact('libro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libro.create');
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
            'nombre' => 'required',
            'editorial' => 'required',
            'genero' => 'required',
            'lanzamiento' => 'required',
            'autor' => 'required'
        ]);


        $arraySave = [
            'nombre' => $request->get("nombre"),
            'editorial' => $request->get("editorial"),
            'genero' => $request->get("genero"),
            'lanzamiento' => $request->get("lanzamiento"),
            'autor' => $request->get("autor"),
          
        ];

        $saveEmpleado = Libro::create($arraySave);

        return redirect()->route('Libro.index')->with('success','Registro creado exitosamente.');

    }

   
    public function show($id)
    {
        $libro = Libro::find($id);
        return view('libro.show',compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
        return view('libro.edit',compact('libro'));
    }

    
    public function update(Request $request, $id)
    {

        $this->validate($request,[
           'nombre' => 'required',
            'editorial' => 'required',
            'genero' => 'required',
            'lanzamiento' => 'required',
            'autor' => 'required'
        ]);


        Libro::find($id)->update($request->all());

        return redirect()->route('libro.index')->with('success','Registro actualizado satisfactoriamente');
    }

   
    public function destroy($id)
    {

        Libro::find($id)->delete();
        return redirect()->route('libro.index')->with('success','Registro eliminado satisfactoriamente');
    }
}