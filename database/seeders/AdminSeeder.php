<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Superadmin if not exists
        $superadmin = User::firstOrNew([
            'email' => 'superadmin@mallow-tech.com',
        ]);

        if (!$superadmin->exists) {
            $superadmin->name = 'Superadmin';
            $superadmin->password = Hash::make('12345678');
            $superadmin->save();
        }

        $superadmin->assignRole('superadmin');

        // Create Admin if not exists
        $admin = User::firstOrNew([
            'email' => 'admin@mallow-tech.com',
        ]);

        if (!$admin->exists) {
            $admin->name = 'Admin';
            $admin->password = Hash::make('12345678');
            $admin->save();
        }

        $admin->assignRole('admin');

        // Create Accountant if not exists
        $accountant = User::firstOrNew([
            'email' => 'accountant@mallow-tech.com',
        ]);

        if (!$accountant->exists) {
            $accountant->name = 'Accountant';
            $accountant->password = Hash::make('12345678');
            $accountant->save();
        }

        $accountant->assignRole('accountant');
    }
}
