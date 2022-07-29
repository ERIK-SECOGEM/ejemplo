<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genero;
use phpDocumentor\Reflection\DocBlock\Tags\Generic;

class SeederTablaGeneros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generos = [
            //Tabla para puestos
            'Masculino',
            'Femenino'
        ];

        foreach($generos as $genero)
        {
            Genero::create(['genero' => $genero]);
        }
    }
}
