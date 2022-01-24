<?php

namespace Database\Factories;

use App\Models\Instructor;
use App\Models\Localizacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class InmersionFactory extends Factory
{
    public function definition()
    {
        return [
            'localizacion_id' => Localizacion::all()->random()->id,
            'fecha' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            't_total' => $this->faker->numberBetween($min = 20, $max = 120),
            'temperatura' => $this->faker->numberBetween($min = 0, $max = 35),
            'consumo' => $this->faker->numberBetween($min = 50, $max = 200),
            'lastre' => $this->faker->numberBetween($min = 0, $max = 20),
            'litros_bot' => $this->faker->randomElement($array = array('10', '12','15')),
            'prof_max' => $this->faker->numberBetween($min = 1, $max = 80),
            'instructor_id' => Instructor::all()->random()->id,
            'num_buceadores' => $this->faker->numberBetween($min = 1, $max = 40),
        ];
    }
}
