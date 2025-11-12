<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        $categories = [
            ['category_name' => 'Appetizers', 'description' => 'Start your meal with our delicious appetizers.'],
            ['category_name' => 'Main Courses', 'description' => 'Hearty and satisfying main dishes to enjoy.'],
        ];

        DB::table('categories')->insert($categories);
    }
}
