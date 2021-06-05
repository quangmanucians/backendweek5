<?php

namespace Database\Factories;

use App\Models\DiaryContent;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiaryContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DiaryContent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'diary_content_day_of_week' => $this->faker->dayOfWeek($max = 'now'),
            'diary_content_work' => $this->faker->slug,
            'diary_content_content' => $this->faker->slug,
            'diary_content_note' => $this->faker->slug,
            'diary_content_teacher_comment' => $this->faker->slug,
            'diary_content_trainer_comment' => $this->faker->slug,
            'week_id' => random_int(1,10),
        ];
    }
}
