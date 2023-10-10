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
            'image' => 'image\icons\barbecue.png',
        ]);
        Category::create([
            'name' => 'Fruits & Vegetables',
            'image' => 'image\icons\healthy-food (2).png',
        ]);
        Category::create([
            'name' => 'Dairy',
            'image' => 'image\icons\dairy.png',
        ]);
        Category::create([
            'name' => 'Cleaning & Household',
            'image' => 'image\icons\cleaning.png',
        ]);
        Category::create([
            'name' => 'Food Cupboard',
            'image' => 'image\icons\shopping-cart.png',
        ]);
        Category::create([
            'name' => 'Baby Products',
            'image' => 'image\icons\baby-products (1).png',
        ]);
    }
}
