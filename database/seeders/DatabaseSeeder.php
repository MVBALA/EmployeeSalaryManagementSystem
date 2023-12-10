<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Controllers\EmployeeController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(SalaryPAySeeder::class);
    }

}
