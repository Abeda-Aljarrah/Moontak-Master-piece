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
            'category_id'=>'2',
            'name'=>'Garlic',
            'main_price'=>'1.190',
            'description'=>'A perfect side dish for any meal it pairs well with salads pasta & soups. Can be used as a party snack as well. Get ready to relish the aroma and flavour of the freshly harvested Garlic from the hills of Ooty.',
            'main_image'=>'image/product/garlic-onion-food-wholesale-spice-garlic-ca1c2c679c9e6330a89901b5559ed121.png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'Piece',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'1',
            'name'=>'Chicken Legs',
            'main_price'=>'1.790',
            'description'=>'This is one of the most go-to pieces of chicken, as it is easy to cook. One can produce countless culinary methods to cook this deliciousness. Savoury, sweet, spicy: there are more than a hundred recipes to cook a drumstick.',
            'main_image'=>'image\product\pngegg (8).png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'1',
            'name'=>'Beef Leg',
            'main_price'=>'3.590',
            'description'=>"It is one of the most popular meats in India. Its flavour is slightly stronger than meat and is an ideal curry meat.",
            'main_image'=>'image\product\pngegg (9).png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'1',
            'name'=>'Chicken Breast',
            'main_price'=>'3.493',
            'description'=>'Filled with vitamins. minerals and protein. chicken promotes brain development. strengthens your bones. aids in weight loss. builds muscle and helps in a healthy heart.',
            'main_image'=>'image\product\pngegg (12).png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'1',
            'name'=>'Beef Mince',
            'main_price'=>'7.490',
            'description'=>'Minced from the most tender and flavoursome parts of the mutton make shami kebabs keema matar methi keema keema dum malai koftas keema parathas and much more.',
            'main_image'=>'image\product\pngegg (11).png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'3',
            'name'=>'Mozzarella',
            'main_price'=>'7.990',
            'description'=>"This cheese is characterized by a great melting quality, which is its ability to melt more uniform than other cheeses. It is also one of the cheeses used for Fondue. Thick and creamy with the goodness of milkNo preservative no artificial coloursMade from cow milk.",
            'main_image'=>'image\product\pngegg (13).png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'kg',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'3',
            'name'=>'Eggs X Large',
            'main_price'=>'3.250',
            'description'=>'Pack size : 30 Pieces, Eggs are one of the common food items in most households. From breakfast to dinner. eggs are indulged in various ways. Poached. boiled. fried. we all have our own favorite choices. Not only are they delicious. but they are also crammed with health benefits.',
            'main_image'=>'image\product\pngegg (15).png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'Pack',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'3',
            'name'=>'Alyoum Labneh',
            'main_price'=>'2.500',
            'description'=>'Pack size : 500g, It combines many taste and health advantages. Made from a high quality cows milk. culture. and salt. this labneh is a healthy addition to your fridge.',
            'main_image'=>'image\product\pngegg (14).png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'Pack',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
        Product::create([
            'category_id'=>'3',
            'name'=>'Milk Full Fat',
            'main_price'=>'3.350',
            'description'=>'Pack size : 1 Liter 4 Pieces, This 100% pure cows milk provides a full fat and flavorful version of dairy foods. Plus. milk contains zero water. milk powder and additives. ensuring safe consumption. By including this milk in your regular diet. you pave a clear path towards a healthy life.',
            'main_image'=>'image\product\pngegg (16).png',
            'availability'=>'1',
            // 'discount_id'=>'1',
            'Qty'=>'10',
            'main_unit'=>'Pack',
            'main_weight'=>'1',
            // 'Expiration_Date'=>'1/1'
        ]);
    }
}
