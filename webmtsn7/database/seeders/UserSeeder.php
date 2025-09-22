<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('admin123'),
                'role' => 'Admin',
            ],
            [
                'username' => 'operator1',
                'password' => Hash::make('operator123'),
                'role' => 'Operator',
            ],
        ]);
    }
}
