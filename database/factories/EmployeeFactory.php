<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'typeid' => $this->faker->randomElement(['CC','CC','CC','CE']),
            'identity'=> $this->faker->numberBetween("1111111111","9999999999"),
            'name'=> $this->faker->firstName,
            'lastname'=> $this->faker->lastName,
            'phone'=> $this->faker->phoneNumber,
            'profile' => $this->faker->randomElement(['Profesional','Tecnico','Tecnologo','Bachiller','Auxiliar','Sin Estudios']),
            'observations' => $this->faker->text($maxNbChars=200),
            'patch'=>$this->faker->filePath(),
            'profession_id'=> $this->faker->numberBetween("1","9"),
            'companie_id'=> $this->faker->numberBetween("1","9"),
            'citie_id'=> $this->faker->numberBetween("1","9"),
            'reception_id'=> $this->faker->numberBetween("1","9"),
            'reference_id'=> $this->faker->numberBetween("1","9"),
        ];
    }
}
