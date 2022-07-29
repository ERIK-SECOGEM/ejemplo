<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipio;

class SeederTablaMunicipios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipios = [
            //Tabla para puestos
            'Toluca',
            'Zinacantepec',
            'Metepec'
        ];

        foreach($municipios as $municipio)
        {
            Municipio::create(['nombre' => $municipio]);
        }
    }
}
