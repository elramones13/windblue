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
        $this->call(LocalizacionSeeder::class);
        Inmersion::factory()->count(50)->create();

    }
}