<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocalizacionFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre' => $this->faker->city(),
            'latitud' => $this->faker->latitude($min = -90, $max = 90),
            'longitud' => $this->faker->longitude($min = -180, $max = 180),
            'pais' => $this->faker->country(),
            'localidad' => $this->faker->state(),
        ];
    }
}