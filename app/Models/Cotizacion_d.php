<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion_d extends Model
{
    use HasFactory;

    //Relacion uno es a muchos inversa
    public function cotizacion_c()
    {
        return $this->belongsTo(Cotizacion_c::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
