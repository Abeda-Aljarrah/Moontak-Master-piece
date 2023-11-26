<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Meat & Poultry',
            'image' => 'image\icons\pngegg.png',
        ]);
        Category::create([
            'name' => 'Fruits & Vegetables',
            'image' => 'image\icons\pngegg (1).png',
        ]);
        Category::create([
            'name' => 'Dairy',
            'image' => 'image\icons\pngegg (2).png',
        ]);
        Category::create([
            'name' => 'Cleaning & Household',
            'image' => 'image\icons\pngegg (3).png',
        ]);
        Category::create([
            'name' => 'Food Cupboard',
            'image' => 'image\icons\pngegg (4).png',
        ]);
        Category::create([
            'name' => 'Baby Products',
            'image' => 'image\icons\pngegg (7).png',
        ]);
    }
}
