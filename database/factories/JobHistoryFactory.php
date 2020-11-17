<?php

namespace Database\Factories;

use App\Models\JobHistory;
use App\Models\Employee;
use App\Models\Title;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'employee_id' => Employee::factory(),
            'title_id' => Title::factory(),
            'department_id' => Department::factory(),
            'pay' => $this->faker->randomDigit,
        ];
    }

    /**
     * Indicate that the request has been paid for.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function employee_id($emp_id)
    {
        return $this->state(function (array $attributes) use($emp_id) {
            return [
                'employee_id' => $emp_id,
            ];
        });
    }
}
