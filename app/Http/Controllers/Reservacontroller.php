<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Horario;
use App\Models\Reserva;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class Reservacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas=Reserva::all();//
        return view('reservas.index',['reservas'=>$reservas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservas.create',['horarios'=>Horario::all()],['clientes'=>Cliente::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* $request->validate([
            'hora'=>'required',
            'nombre'=>'required'
        ]);
        $reserva=new Reserva();
        $reserva->fecha=$request->input('fecha');
        $reserva->id_horario=$request->input('hora');
        $reserva->id_cliente=$request->input('nombre');
        $reserva->obs=$request->input('obs');
        $reserva->save();
        return view("reservas.message",['msg' =>"Registro Guardado"]); */
        $request->validate([
            'hora' => 'required',
            'nombre' => 'required',
            'fecha' => 'required|date', // Asegúrate de que la fecha sea una fecha válida
        ]);
        $fecha = $request->input('fecha');
        $hora = $request->input('hora');
    
        // Verificar si la hora ya está reservada en la fecha seleccionada
        $reservaExistente = Reserva::where('fecha', $fecha)
            ->where('id_horario', $hora)
            ->first();
        /* if ($reservaExistente) {
            return redirect()->back()->with('error', 'Ya existe una reserva en esa fecha y hora.');      
        } */
        if ($reservaExistente) {
            return view("reservas.message", ['msg' => "error ya existe una reserva en esa fecha y hora"]);
        }
    
        $reserva = new Reserva();
        $reserva->fecha = $fecha;
        $reserva->id_horario = $hora;
        $reserva->id_cliente = $request->input('nombre');
        $reserva->obs = $request->input('obs');
        $reserva->save();
    
        return view("reservas.message", ['msg' => "Registro Guardado"]);
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
        $reserva=Reserva::find($id);
        //$reserva=Reserva::find($fecha->$id);
        return view('reservas.edit',['reserva'=>$reserva,'horarios'=>Horario::all(),'clientes'=>Cliente::all(),'reservas'=>Reserva::all()]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reserva= Reserva::find($id);
        $reserva->fecha=$request->input('fecha');
        $reserva->id_horario=$request->input('hora');
        $reserva->id_cliente=$request->input('nombre');
        $reserva->obs=$request->input('obs');
        $reserva->save();
        return view("reservas.message",['msg' =>"Registro Modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reserva=Reserva::find($id);
        $reserva->delete();
        return view("reservas.message",['msg' =>"Registro Eliminado"]);
    }
}
