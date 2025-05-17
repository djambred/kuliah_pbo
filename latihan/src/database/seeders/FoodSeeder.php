<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuutama = Category::firstOrCreate([
            'name' => 'Menu Utama',
            'type' => 'food',
        ]);
        Food::firstOrCreate([
            'category_id' => $menuutama->id,
            'image' => '',
            'name' => 'Nasi Goreng',
            'price' => 20000,
        ]);
    }
}
