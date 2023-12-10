<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Payment;
use App\Models\Employee;
use App\Models\SalaryPay;


class PaymentTest extends TestCase
{
    use RefreshDatabase;

    public function test_payment_data_create_and_stored_successfully()
    {
        $employee = Employee::factory()->create();
        $salaryPay = SalaryPay::factory()->create();

        $formdata = [
            'employee_id' => $employee->id,
            'employee_name' => $employee->name,
            'month' => fake()->month(),
            'year' => fake()->year(),
            'salary_id' => $salaryPay->id,
            'amount' => $salaryPay->total,
            'status' => fake()->randomElement(['Pending', 'Approved']),
        ];

        //creating payment data
        $payment = Payment::create($formdata);

        //checking the database has payment data
        $this->assertDatabaseHas('payments', $formdata);
    }
}
