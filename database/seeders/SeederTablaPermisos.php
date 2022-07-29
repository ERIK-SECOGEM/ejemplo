<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Agregando el modelo de permisos Spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Tabla para roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Tabla trabajadores
            'ver-trabajador',
            'crear-trabajador',
            'editar-trabajador',
            'borrar-trabajador',

            //Tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
        ];

        foreach($permisos as $permiso)
        {
            Permission::create(['name' => $permiso]);
        }
    }
}
