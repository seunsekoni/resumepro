<?php

namespace Database\Factories;

use App\Models\Title;
use Illuminate\Database\Eloquent\Factories\Factory;

class TitleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Title::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'level' => $this->faker->randomDigit,
            'job_description' => $this->faker->sentence,
            'low_pay' => $this->faker->numberBetween($min = 1000, $max = 90000),
            'high_pay' => $this->faker->numberBetween($min = 100000, $max = 900000),
        ];
    }
}
