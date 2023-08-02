<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camion extends Model
{
    protected $fillable = ['potencia', 'matricula', 'modelo', 'tipo'];

    public function camionero()
    {
        return $this->belongsTo(Camionero::class);
    }
}