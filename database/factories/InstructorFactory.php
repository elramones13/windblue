<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InstructorFactory extends Factory
{
    public function definition()
    {
        return [
            'dni' => $this->faker->dni(),
            'nombre' => $this->faker->firstName(),
            'apellido1' => $this->faker->lastName(),
            'apellido2' => $this->faker->lastName(),
            'f_nacimiento' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            'email' => $this->faker->email(),
            'telefono' => $this->faker->phoneNumber(),
            'pais' => $this->faker->country(),
            'cert_instructor' => $this->faker->bothify('######')
        ];
    }
}
