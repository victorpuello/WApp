<?php

namespace Database\Factories;

use App\Models\Reception;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reception::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->randomElement(['Grupo Whatsapp','Chat WM'])
        ];
    }
}
