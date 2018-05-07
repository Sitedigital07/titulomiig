<?php

namespace Digitalmiig\Titulomiig\Controllers;

use Illuminate\Routing\Controller;
use Digitalmiig\Titulomiig\Grado;

use Input;
use DB;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $areas = DB::table('grados')->get();
       return view('titulomiig::area')->with('areas', $areas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area = new Grado;
        $area->grado = Input::get('area');
        $area->save();

        return Redirect('areas')->with('status', 'ok_create');
    }

       public function createtitulo()
    {
        $area = new Titulo;
        $area->titulo = Input::get('titulo');
        $area->grado_id = Input::get('grado_id');
        $area->save();

        return Redirect('areas')->with('status', 'ok_create');
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
    
       $grados = Grado::where('id', '=', $id)->get();
       return view('titulomiig::editar-area')->with('grados', $grados);
     
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
    $user = Grado::find($id);
    $user->grado = Input::get('area');
    $user->save();
    return Redirect('/areas')->with('status', 'ok_update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Grado::find($id);
        $users->delete();
        
        return Redirect('/areas')->with('status', 'ok_delete');
    }
}
