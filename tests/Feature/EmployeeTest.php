<?php

namespace Tests\Feature;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Factories\EmployeeFactory;

class EmployeeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;


    public function test_employee_data_create_and_stored_successfully()
    {
        $employeeData = [
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

        //creating employee record
        $employee = Employee::create($employeeData);

        //Checking the data is stored in the database
        $this->assertDatabaseHas('employees', $employeeData);
    }

    public function test_employee_data_deleted()
    {

        //checking employee data deleted

        $employee = EmployeeFactory::new()->create();
        $employee->delete();
        $this->assertDatabaseMissing('employees', ['id' => $employee->id]);

    }

    public function test_searching_employee_in_database()
    {

        //searching for an employee
        $employee = EmployeeFactory::new()->create();
        $this->assertDatabaseHas('employees', ['name' => $employee->name]);

    }
}
