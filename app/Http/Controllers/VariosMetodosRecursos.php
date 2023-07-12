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
        // $info = info::where('descripcion', '=', 'Programador')->get();
        // dd($info);
        // return view('varios', compact('info'));
        return view('varios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
        $info = new info;
        $info->nombre = 'María';
        $info->descripcion = '';
        $info->save();


        return 'Datos guardados correctamente';
        */
        return view('varios.create');
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
        /*
        $info = info::find($id);
        $info->delete();
        return 'El registro ' . $id . ' ha sido eliminado';
        */
        return view('varios.show', compact('id'));
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
        /*
        $info = info::find($id);
        $info->nombre = 'Juan Francisco Morcillo Sánchez';
        $info->descripcion = 'DATW';
        $info->save();
        return 'Datos actualizados';
        */
        return view('varios.edit', compact('id'));
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
