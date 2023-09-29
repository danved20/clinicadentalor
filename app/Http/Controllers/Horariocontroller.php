<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
class Horariocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horarios=Horario::all();//
        return view('horarios.index',['horarios'=>$horarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('horarios.create',['horarios'=>Horario::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $horario=new Horario();
        //$horario->id=$request->input('id');
        $horario->hora=$request->input('hora');

        $horario->save();
        return view("horarios.message",['msg' =>"Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $horario=Horario::find($id);
        return view('horarios.edit',['horario'=>$horario,'horarios'=>Horario::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $horario= Horario::find($id);
        $horario->hora=$request->input('hora');
        $horario->save();
        return view("horarios.message",['msg' =>"Registro Modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $horario=Horario::find($id);
        $horario->delete();
        return view("horarios.message",['msg' =>"Registro Eliminado"]);
    }
}
