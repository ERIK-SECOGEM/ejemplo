<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = "municipios";

    protected $filable = [
        'id',
        'nombre',
    ];

    public function trabajadores()
    {
        return $this->hasMany(Trabajador::class, 'id');
    }
}
