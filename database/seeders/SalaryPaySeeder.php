<?php

namespace Database\Seeders;

use App\Models\SalaryPay;
use Database\Factories\SalaryPayFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalaryPaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        SalaryPayFactory::new()->count(100)->create();
    }
}
