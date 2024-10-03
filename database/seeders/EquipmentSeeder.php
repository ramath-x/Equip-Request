<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $equipment = [
            ['name' => 'Logitech MX Master 3', 'category_id' => 1, 'price' => 99.99],  // Mouse
            ['name' => 'Razer DeathAdder V2', 'category_id' => 1, 'price' => 69.99],  // Mouse
            ['name' => 'Microsoft Sculpt Ergonomic', 'category_id' => 2, 'price' => 89.99],  // Keyboard
            ['name' => 'Keychron K2', 'category_id' => 2, 'price' => 79.99],  // Keyboard
            ['name' => 'Dell UltraSharp U2721DE', 'category_id' => 3, 'price' => 499.99],  // Monitor
            ['name' => 'LG 27UK650-W', 'category_id' => 3, 'price' => 379.99],  // Monitor
        ];

        DB::table('equipment')->insert($equipment);
    }
}
