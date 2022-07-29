<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SeederTablaGeneros::class,
            SeederTablaMunicipios::class,
            SeederTablaPermisos::class,
            SeederTablaPuestos::class,
            SuperAdminSeeder::class,
        ]);
    }
}
