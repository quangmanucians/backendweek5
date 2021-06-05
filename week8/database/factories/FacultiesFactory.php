<?php

namespace Database\Factories;

use App\Models\Faculties;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FacultiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faculties::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'faculties_name' => $this->faker->name
        ];
    }
}
