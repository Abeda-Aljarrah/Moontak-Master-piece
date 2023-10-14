<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'category_id'=>'2',
            'name'=>'banana',
            'main_price'=>'0.2',
            'description'=>'ffffffffffffff',
            'main_image'=>'image\product\banana-clip-art-banana-picture-28804bd7e5fc612e7ec18047d47616a3.png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'1',
            'name'=>'banana',
            'main_price'=>'0.1',
            'description'=>'ffffffffffffff',
            'main_image'=>'image\product\banana-clip-art-banana-picture-28804bd7e5fc612e7ec18047d47616a3.png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'3',
            'name'=>'banana',
            'main_price'=>'0.3',
            'description'=>'ffffffffffffff',
            'main_image'=>'image\product\banana-clip-art-banana-picture-28804bd7e5fc612e7ec18047d47616a3.png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
    }
}
