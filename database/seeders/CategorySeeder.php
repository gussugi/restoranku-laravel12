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
            ['category_name' => 'Manakanan', 'description' => 'Ini adalah makanan.'],
            ['category_name' => 'Minuman', 'description' => 'Ini adalah minuman.'],
        ];

        DB::table('categories')->insert($categories);
    }
}
