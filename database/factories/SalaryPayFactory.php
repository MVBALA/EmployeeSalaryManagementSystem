<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SalaryPay;
use App\Models\Employee;

class SalaryPayFactory extends Factory
{
    protected $model = SalaryPay::class;

    public function definition()
    {
        $employee = Employee::inRandomOrder()->first();

        $basicPay = $this->faker->randomFloat(2, 3000, 8000);
        $houseRentAllowance = $this->faker->randomFloat(2, 500, 2000);
        $specialAllowance = $this->faker->randomFloat(2, 100, 1000);
        $pf = $this->faker->randomFloat(2, 100, 500);
        $healthInsurance = $this->faker->randomFloat(2, 50, 200);
        $total = $basicPay + $houseRentAllowance + $specialAllowance - $pf - $healthInsurance;

        return [
            'employee_id' => $employee->id,
            'position' => $this->faker->jobTitle,
            'basic_pay' => $basicPay,
            'house_rent_allowance' => $houseRentAllowance,
            'special_allowance' => $specialAllowance,
            'pf' => $pf,
            'health_insurance' => $healthInsurance,
            'total' => $total,
        ];
    }
}
