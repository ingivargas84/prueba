<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $table='sexo';

    protected $fillable=[
        'id',
        'nombre',
        'telefono',
        'sexo_id'
    ];
}
