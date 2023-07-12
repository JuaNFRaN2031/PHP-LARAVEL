<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\info;

class VariosMetodosRecursos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'Esto es el index';
        // return redirect('hola');
        $info = info::all();
        // dd($info);
        return view('varios')->with('info', $info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $info = new info;
        $info->nombre = 'Juan Francisco Morcillo';
        $info->descripcion = 'Programador';
        $info->save();

        info::create(['nombre' => 'Juan Fran', 'descripcion' => 'Programador WEB']);

        return 'Datos guardados correctamente';
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
        // $info = info::findOrFail($id);
        $info = info::find($id);
        $info->delete();
        return 'El registro ' . $id . ' ha sido eliminado';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $info = info::findOrFail($id);
        $info = info::find($id);
        $info->nombre = 'Juan Francisco Morcillo Sánchez';
        $info->descripcion = 'DATW';
        $info->save();
        return 'Datos actualizados';
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
