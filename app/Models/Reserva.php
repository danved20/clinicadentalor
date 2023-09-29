<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    public function cliente(){
        return $this->BelongsTo(Cliente::class,'id_cliente','id');
    }
    public function horario(){
        return $this->BelongsTo(Horario::class,'id_horario','id');
    }
}
