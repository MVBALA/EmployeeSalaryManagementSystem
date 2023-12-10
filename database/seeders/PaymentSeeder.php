<?php

namespace Database\Seeders;

use App\Models\Payment;
use Database\Factories\PaymentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentFactory::new()->count(200)->create();
    }

}
