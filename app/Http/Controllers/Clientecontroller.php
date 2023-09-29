<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Horario;

class Clientecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes=Cliente::all();//
        return view('clientes.index',['clientes'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create',['clientes'=>Cliente::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$request->validate([
        'matricula' =>'required|unique:alumnos|max:10',
        'nombre' =>'required|max:255',
        'fecha_nacimiento' =>'required|date',
        'email' =>'nullable|email',
        'nivel' =>'required',
        'foto'=>'required|mimes:jpeg,jpg,gif,png|max:10000'
        ]);*/
        //$alumno=new Alumno();
        $imageName=time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images'),$imageName);
        $cliente=new Cliente();
        $cliente->nombre=$request->input('nombre');
        $cliente->fecha_nac=$request->input('fecha_nac');
        $cliente->celular=$request->input('celular');
        $cliente->email=$request->input('email');

        $cliente->foto=$imageName;
        $cliente->save();
        return view("clientes.message",['msg' =>"Registro Guardado"]);

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
        $cliente=Cliente::find($id);
        return view('clientes.edit',['cliente'=>$cliente,'horarios'=>Horario::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            /*'matricula' =>'required|max:10|unique:alumnos,matricula,'.$id,
            'nombre' =>'required|max:255',
            'fecha_nacimiento' =>'required|date',
            'email' =>'nullable|email',
            'nivel' =>'required',*/
            'foto' =>'required|mimes:jpeg,jpg,gif,png|max:10000'
            ]);
            $imageName=time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images'),$imageName);
            $cliente= Cliente::find($id);
            $cliente->nombre=$request->input('nombre');
            $cliente->fecha_nac=$request->input('fecha_nac');
            $cliente->celular=$request->input('celular');
            $cliente->email=$request->input('email');
            $cliente->foto=$imageName;
            $cliente->save();
            return view("clientes.message",['msg' =>"Registro Modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente=Cliente::find($id);
        $cliente->delete();
        return view("clientes.message",['msg' =>"Registro Eliminado"]);
    }
}
