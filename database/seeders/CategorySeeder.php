<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['id' => 1, 'name' => 'Mouse'],
            ['id' => 2, 'name' => 'Keyboard'],
            ['id' => 3, 'name' => 'Monitor'],
        ];
        DB::table('categories')->insert($categories);
    }
}
