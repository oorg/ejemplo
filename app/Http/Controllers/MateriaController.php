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
       //dd($request->all()); //ver los datos del formulario
      
      
      /*$materia = new Materia();  // insercion en la base de datos
      $materia->user_id = 1;
      $materia->materia = $request->input('materia');
      $materia->crn = $request->input('nrc');
      $materia->hora_inicio = $request->input('hora_inicio');
      $materia->save();
      */
      Materia::create($request->all());
      
      return redirect()->route('materia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    //public function show(Materia $materia)
    public function show(Materia $materium)
    #public function show($materium)
    {
        //
        //return view('materias.showMateria');
        #$miMateria = Materia::find($materium);
        #return view('materias.showMateria')->with(['materia' => $miMateria]); //,compact('$materium'));//paso de variable a la vista
        return view('materias.showMateria')->with(['materia' => $materium]); //,compact('$materium'));//paso de variable a la vista
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
    public function destroy(Materia $materium)
    {
        //
      $materium->delete();
      return redirect()->route('materia.index');
    }
}
