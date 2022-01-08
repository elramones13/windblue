<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocalizacionFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre' => $this->faker->city(),
            'longitud' => $this->faker->longitude($min = -180, $max = 180),
            'latitud' => $this->faker->latitude($min = -90, $max = 90),
            'pais' => $this->faker->country(),
            'localidad' => $this->faker->state(),
            'descripcion' => $this->faker->text(),
            'num_buceos' => $this->faker->randomNumber(),
        ];
    }
}