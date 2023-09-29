<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use PDF;
use App\Models\Reserva;

class ReporteController extends Controller
{
    public function index()
    {
        /* $reservas = Reserva::all(); // Obtén los datos para el reporte

        $pdf = PDF::loadView('reportes.reservas', compact('reservas'));

        return $pdf->download('reporte-reservas.pdf'); */
    }
}


/* namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Reserva;
class ReporteController extends Controller
{
    public function index()
    {
        
        $reservas = Reserva::all(); // Obtén los datos para el reporte
    
        $pdf = PDF::loadView('reportes.reservas', compact('reservas'));
    
        return $pdf->download('reporte-reservas.pdf');
    }
} */
