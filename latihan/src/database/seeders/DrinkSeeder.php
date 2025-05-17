<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Drink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuutama = Category::firstOrCreate([
            'name' => 'Dingin',
            'type' => 'drink',
        ]);
        Drink::firstOrCreate([
            'category_id' => $menuutama->id,
            'image' => '',
            'name' => 'Kopi Hitam',
            'price' => 15000,
        ]);
    }
}
