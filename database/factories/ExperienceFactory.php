<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sector'=>$this->faker->randomElement(["Privado","Publico"]),
            'companyname'=>$this->faker->company,
            'duration'=>$this->faker->numberBetween('1','99'),
            'employee_id'=>$this->faker->numberBetween('1',$this->contadordeEmpleados())
        ];
    }
    public function contadordeEmpleados(): int
    {
        return Employee::all()->count();
    }
}
