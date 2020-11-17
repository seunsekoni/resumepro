<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Department;
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
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName($gender),
            'middle_initial' => ucwords($this->faker->randomLetter),
            'sex' => $gender,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'region' => $this->faker->city,
            'postal_code' => $this->faker->postCode,
            'home_phone' => $this->faker->phoneNumber,
            'office_phone' => $this->faker->phoneNumber,
            'office_location' => $this->faker->state,
            'manager_id' => $this->faker->randomNumber,
            'vacation_hours' => $this->faker->randomDigit,
            'sick_leave_hours' => $this->faker->randomDigit,
            'department_id' => Department::factory(),
        ];
    }
}
