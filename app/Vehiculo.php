<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class vehiculo extends Model
{
    protected $fillable = [
       
        'propietario_id',
        'color',
        'modelo',
        'placa',
        
    ];


    public function propietario()
    {
        return $this->belongsTo(Propietario::class);
    }
}
