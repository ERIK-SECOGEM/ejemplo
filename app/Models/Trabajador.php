<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    protected $table = "trabajadores";

    protected $filable = [
        'nombre',
        'puesto',
        'telefono',
        'genero',
        'idMunicipio'
    ];
    protected $guarded = ['id']; 

    public function municipios()
    {
        return $this->belongsTo(Municipio::class,'idMunicipio');
    }
}
