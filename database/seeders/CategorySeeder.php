<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Category 1',
            'thumbnail' => 'beef.jpg',
        ]);

        Category::create([
            'name' => 'Category 2',
            'thumbnail' => 'boneless.jpg',
        ]);
    }
}