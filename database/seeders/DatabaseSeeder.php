<?php

namespace Database\Seeders;

use App\Models\Buceador;
use App\Models\Inmersion;
use App\Models\Instructor;
use App\Models\Localizacion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Buceador::factory()->count(20)->create();
        Instructor::factory()->count(5)->create();
        Localizacion::factory(1)->create([
            'nombre' => 'Playa Chica',
            'pais' => 'España',
            'localidad' => 'Puerto del Carmen'
        ]);
        Localizacion::factory(1)->create([
            'nombre' => 'Playa Flamingo',
            'pais' => 'España',
            'localidad' => 'Yaiza'
        ]);
        Localizacion::factory(1)->create([
            'nombre' => 'Barranco del Quiquere',
            'pais' => 'España',
            'localidad' => 'Puerto del Carmen'
        ]);
        Localizacion::factory(1)->create([
            'nombre' => 'Mala',
            'pais' => 'España',
            'localidad' => 'Haria'
        ]);
        Localizacion::factory(1)->create([
            'nombre' => 'Charlotte Reef',
            'pais' => 'España',
            'localidad' => 'Yaiza'
        ]);
        Inmersion::factory()->count(50)->create();

    }
}