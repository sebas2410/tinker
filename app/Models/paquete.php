<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paquete extends Model
{
    protected $fillable = ['codigo', 'descripcion', 'destinatario', 'direccion_destinatario'];

    public function camionero()
    {
        return $this->belongsTo(Camionero::class);
    }

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }
}