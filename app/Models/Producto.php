<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'sku';
    public $incrementing = false;
    protected $keyType = 'string';

    //Relacion uno es a muchos
    public function cotizaciones_d()
    {
        return $this->hasMany(Cotizacion_d::class);
    }
}
