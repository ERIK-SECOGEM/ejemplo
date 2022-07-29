<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Puesto;

class SeederTablaPuestos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $puestos = [
            //Tabla para puestos
            'Programador',
            'Lider Auditor',
            'Gerente'
        ];

        foreach($puestos as $puesto)
        {
            Puesto::create(['nombre' => $puesto]);
        }
    }
}
