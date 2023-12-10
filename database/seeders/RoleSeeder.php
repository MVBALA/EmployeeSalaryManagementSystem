<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Role::create([
            'name' => 'superadmin'
        ])->givePermissionTo(['employee.read', 'employee.write', 'payment.read', 'payment.write']);

        Role::create([
            'name' => 'admin'
        ])->givePermissionTo(['employee.read', 'employee.write', 'payment.read', 'payment.write']);

        Role::create([
            'name' => 'accountant'
        ])->givePermissionTo(['payment.read', 'payment.write', 'salary.read', 'salary.write']);

    }
}
