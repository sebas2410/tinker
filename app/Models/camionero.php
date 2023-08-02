<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camionero extends Model
{
protected $fillable = ['dni', 'nombre', 'telefono', 'direccion', 'salario', 'poblacion'];

public function camiones()
{
    return $this->hasMany(Camion::class);
}

public function paquetes()
{
    return $this->hasMany(Paquete::class);
}
}
