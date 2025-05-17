<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::firstOrCreate([
            'name' => 'Menu Utama',
            'type' => 'food',
        ]);

        Category::firstOrCreate([
            'name' => 'Dingin',
            'type' => 'drink',
        ]);
    }
}
