<?php

namespace Database\Factories;

use App\Models\InternshipDiary;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternshipDiaryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InternshipDiary::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'internship_diaries_name' => $this->faker->name,
            'teacher_id' => random_int(1,10),
            'user_id' => random_int(1,10),
            'trainer_id' => random_int(1,10),
            'day_start' => $this->faker->date($format = 'Y-m-d', $max = '2022-1-1'),
            'day_end' => $this->faker->date($format = 'Y-m-d', $max = '2022-1-7'),
            'course_id' => random_int(1,10),
        ];
    }
}
