<?php

namespace Database\Seeders;

use App\Models\Localizacion;
use Illuminate\Database\Seeder;

class LocalizacionSeeder extends Seeder
{
    public function run()
    {
        Localizacion::factory(1)->create([
            'nombre' => 'Playa Chica',
            'pais' => 'España',
            'localidad' => 'Puerto del Carmen',
            'latitud' => '28.919101710943476',
            'longitud' => '-13.668617494840456'
        ]);
        Localizacion::factory(1)->create([
            'nombre' => 'Playa Flamingo',
            'pais' => 'España',
            'localidad' => 'Yaiza',
            'latitud'=> '28.85713748557064',
            'longitud'=> '-13.841299416980531',
        ]);
        Localizacion::factory(1)->create([
            'nombre' => 'Barranco del Quiquere',
            'pais' => 'España',
            'localidad' => 'Puerto del Carmen',
            'latitud' => '28.919355401495313',
            'longitud' => '-13.685923645998907'
        ]);
        Localizacion::factory(1)->create([
            'nombre' => 'Mala',
            'pais' => 'España',
            'localidad' => 'Haria',
            'latitud' => '29.096384246063103',
            'longitud' => '-13.449490983972868'
        ]);
        Localizacion::factory(1)->create([
            'nombre' => 'Charlotte Reef',
            'pais' => 'España',
            'localidad' => 'Yaiza',
            'latitud' => '28.861501642547278',
            'longitud' => '-13.855054104770359'
        ]);
    }
}
