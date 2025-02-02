<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $initialProducts = [
            [
                "name" => "beef",
                "quantity"=>2,
                "price"=>40,
                "url"=>"beef.jpg"
            ],
            [
                "name" => "executive-meat",
                "quantity"=>2,
                "price"=>370,
                "url"=>"executive-meat.jpg"
            ],
            [
                "name" => "executive-food",
                "quantity"=>1,
                "price"=>350,
                "url"=>"executive-food.jpg"
            ],
            [
                "name" => "executive-vegetable",
                "quantity"=>2,
                "price"=>260,
                "url"=>"executive-vegetable.jpg"
            ],
            [
                "name" => "fish",
                "quantity"=>2,
                "price"=>170,
                "url"=>"fish.jpg"
            ],

            [
                "name" => "dried furit",
                "quantity"=>1,
                "price"=>150,
                "url"=>"dried furit.jpg"
            ],
            [
                "name" => "dessert",
                "quantity"=>2,
                "price"=>250,
                "url"=>"dessert.jpg"
            ],
            [
                "name" => "bone-in beef",
                "quantity"=>3,
                "price"=>440,
                "url"=>"bone-in beef.jpg"
            ],
            [
                "name" => "canned-furit",
                "quantity"=>6,
                "price"=>500,
                "url"=>"canned-furit.jpg"
            ],
            ];

            foreach($initialProducts as $product ){
                Product::create($product);
            }


    }
}