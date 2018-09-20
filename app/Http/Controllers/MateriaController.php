<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      //return view('materias.indexMateria');
      $materias = Materia::all();
      return view('materias.indexMateria', compact('materias') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('materias.formMateria');
      //https://gitlab.com/samuelmg/asistencia
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request)
    {
        //dd('llego al store'); //terminar la aplicacion
        //dd($request);
       dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    //public function show(Materia $materia)
    public function show($id)
    {
        //
        //return view('materias.showMateria');
        return view('materias.showMateria', compact('id'));//paso de variable a la vista
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    //public function edit(Materia $materia)
    public function edit($id)
    {
        //
        //return view('materias.formEditMateria');
        return view('materias.formEditMateria', compact('id'));//paso de variable a la vista
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, Materia $materia)
    public function update($id)
    {
        //
        return view('materias.updateMateria', compact('id'));//paso de variable a la vista
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
