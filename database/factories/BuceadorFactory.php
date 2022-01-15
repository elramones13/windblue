<?php

namespace Database\Factories;

use App\Models\Buceador;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuceadorFactory extends Factory
{
    protected $model = Buceador::class;
    public function definition()
    {
        return [
            'dni' => $this->faker->dni(),
            'nombre' => $this->faker->firstName(),
            'apellido1' => $this->faker->lastName(),
            'apellido2' => $this->faker->lastName(),
            'f_nacimiento' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            't_buceo' => $this->faker->randomElement($array = array('Advanced Open Water', 'Open Water', 'Dive Master')),
            'cert_buceo' => $this->faker->bothify('####??####'),
            'email' => $this->faker->email(),
            'telefono' => $this->faker->phoneNumber(),
            'pais' => $this->faker->country()
        ];
    }
}