<?php

namespace Database\Seeders;

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
        $products = [
            [
                'name' => 'Shirt',
                'description' => 'mens shirt',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Shirt',
                'price' => 30
            ],
            [
                'name' => 'Pent',
                'description' => 'Mens Pent',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Pent',
                'price' => 40
            ],
            [
                'name' => 'Belt',
                'description' => 'Formal Belt',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=belt',
                'price' => 20
            ],
            [
                'name' => 'Shoes',
                'description' => 'Casual Shoes',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Shoes',
                'price' => 90
            ]
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
