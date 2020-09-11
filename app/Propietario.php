<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'identificacion',
        'tipo_identificacion',
        'ciudad',
        'direccion',
        'barrio',
        'telefono',
    ];

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'propietario_id');
    }
}
