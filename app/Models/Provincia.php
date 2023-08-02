<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $fillable = ['codigo', 'nombre'];

    public function paquetes()
    {
        return $this->hasMany(Paquete::class);
    }
}
