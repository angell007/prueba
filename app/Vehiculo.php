<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [

        'propietario_id',
        'color',
        'modelo',
        'placa',
        'marca',

    ];

    public function propietario()
    {
        return $this->belongsTo(Propietario::class);
    }

    public function getMarcaAttribute()
    {
        return ucwords(strtolower($this->attributes['marca']));
    }
}
