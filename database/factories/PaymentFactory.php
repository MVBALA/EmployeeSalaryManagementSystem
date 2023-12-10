<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Payment;
use App\Models\Employee;

// Import the Employee model if not already imported
use App\Models\SalaryPay;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {

        $employee = Employee::factory()->create();
        $salaryPay = SalaryPay::factory()->create();

        return [
            'employee_id' => $employee->id,
            'employee_name' => $employee->name,
            'month' => $this->faker->monthName,
            'year' => $this->faker->year,
            'salary_id' => $salaryPay->id,
            'amount' => $salaryPay->total,
            'status' => $this->faker->randomElement(['Pending', 'Approved']),
        ];
    }
}

