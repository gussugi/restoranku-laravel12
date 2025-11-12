<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['role_name' => 'Admin', 'description' => 'Administrator with full access'],
            ['role_name' => 'Cashier', 'description' => 'Responsible for handling sales transactions'],
            ['role_name' => 'Chef', 'description' => 'Handles food preparation and kitchen operations'],
            ['role_name' => 'Customer', 'description' => 'Costumer role'],
        ];
        DB::table('roles')->insert($roles);
    }
}
