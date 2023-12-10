<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'email' => fake()->unique()->safeEmail,
            'phone_number' => fake()->phoneNumber,
            'date_of_birth' => fake()->date,
            'gender' => fake()->randomElement(['Male', 'Female', 'Other']),
            'nationality' => fake()->country,
            'address' => fake()->address,
            'job_title' => fake()->randomElement(['Manager', 'Junior Developer', 'Senior Developer', 'Technical Assistant', 'Team Leader', 'Technical Senior', 'Quality Tester']),
            'department' => fake()->randomElement(['IT', 'Finance', 'HR', 'Sales']),
            'employment_start_date' => fake()->date,
            'employment_end_date' => fake()->date(),
            'employee_status' => fake()->randomElement(['Active', 'Inactive']),
        ];
    }
}
