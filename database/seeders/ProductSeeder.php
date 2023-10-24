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
            'name'=>'Banana',
            'main_price'=>'0.890',
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
            'category_id'=>'2',
            'name'=>'Eggplant',
            'main_price'=>'0.890',
            'description'=>'ffffffffffffff',
            'main_image'=>'image\product/5bbde55ee3323-f1d7707e71efa6a29063e55e5c49db78.png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'2',
            'name'=>'Avocado',
            'main_price'=>'2.490',
            'description'=>'ffffffffffffff',
            'main_image'=>'image/product/avocado-juice-fruit-vegetable-guacamole-avocado-15ef7f2e6fb831e8da3c703e4f24b50d.png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'2',
            'name'=>'Carrot',
            'main_price'=>'0.590',
            'description'=>'ffffffffffffff',
            'main_image'=>'image/product/carrot-vegetable-computer-file-carrot-png-be7c2e3c8fb35196a123b3b8c0721d50.png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'2',
            'name'=>'Cauliflower',
            'main_price'=>'0.990',
            'description'=>'ffffffffffffff',
            'main_image'=>'image/product/cauliflower-aloo-gobi-organic-food-vegetable-broccoli-cauliflower-c6f8350aae5386a7b4e6c75d876f96dd.png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'2',
            'name'=>'Mango',
            'main_price'=>'1.790',
            'description'=>"Introducing our exquisite range of mango products, handpicked to
            satisfy your cravings for the delectable taste of mangoes. At our
            grocery shop, you'll find a wide selection of mango-inspired delights
            that will transport your taste buds to tropical paradise.",
            'main_image'=>'image/product/smoothie-juice-mango-fruit-flavor-mango-f412da62e84f23e56c0a5545c0b436a9.png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'2',
            'name'=>'Tomato',
            'main_price'=>'0.380',
            'description'=>'ffffffffffffff',
            'main_image'=>'image/product/cherry-tomato-tomato-sauce-salad-tomato-png-image-d62b8668847fa65578a21d62f843f540.png',
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
            'category_id'=>'1',
            'name'=>'Mango',
            'main_price'=>'1.790',
            'description'=>"Introducing our exquisite range of mango products, handpicked to
            satisfy your cravings for the delectable taste of mangoes. At our
            grocery shop, you'll find a wide selection of mango-inspired delights
            that will transport your taste buds to tropical paradise.",
            'main_image'=>'image/product/smoothie-juice-mango-fruit-flavor-mango-f412da62e84f23e56c0a5545c0b436a9.png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'1',
            'name'=>'Carrot',
            'main_price'=>'0.590',
            'description'=>'ffffffffffffff',
            'main_image'=>'image/product/carrot-vegetable-computer-file-carrot-png-be7c2e3c8fb35196a123b3b8c0721d50.png',
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
        Product::create([
            'category_id'=>'3',
            'name'=>'Mango',
            'main_price'=>'1.790',
            'description'=>"Introducing our exquisite range of mango products, handpicked to
            satisfy your cravings for the delectable taste of mangoes. At our
            grocery shop, you'll find a wide selection of mango-inspired delights
            that will transport your taste buds to tropical paradise.",
            'main_image'=>'image/product/smoothie-juice-mango-fruit-flavor-mango-f412da62e84f23e56c0a5545c0b436a9.png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'3',
            'name'=>'Carrot',
            'main_price'=>'0.590',
            'description'=>'ffffffffffffff',
            'main_image'=>'image/product/carrot-vegetable-computer-file-carrot-png-be7c2e3c8fb35196a123b3b8c0721d50.png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
    }
}
