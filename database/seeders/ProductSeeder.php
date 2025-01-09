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
            ]
            ];

            foreach($initialProducts as $product ){
                Product::create($product);
            }


    }
}
