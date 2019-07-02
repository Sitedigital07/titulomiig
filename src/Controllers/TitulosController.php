<?php

namespace Digitalmiig\Titulomiig\Controllers;

use Illuminate\Routing\Controller;
use Digitalmiig\Titulomiig\Titulo;
use Input;

class TitulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $titulo = new Titulo;
       $titulo->nombre = Input::get('nombre');
       $titulo->grado = Input::get('grado');
       $titulo->asignatura = Input::get('asignatura');
       $titulo->portafolio = Input::get('portafolio');
       $titulo->precio = Input::get('precio');
       $titulo->save();

        return Redirect('/titulos')->with('status', 'ok_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
          $input = Input::all();
    $user = Titulo::find($id);
    $user->nombre = Input::get('nombre');
    $user->grado = Input::get('grado');
    $user->asignatura = Input::get('asignatura');
    $user->portafolio = Input::get('portafolio');
    $user->precio = Input::get('precio');
    $user->save();
    return Redirect('/titulos')->with('status', 'ok_update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Titulo::find($id);
        $users->delete();
        
        return Redirect('/titulos')->with('status', 'ok_delete');
    }
}
