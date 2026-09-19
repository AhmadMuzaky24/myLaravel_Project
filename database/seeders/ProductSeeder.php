<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Sembako
            [
                'category_id' => 1,
                'code' => 'SMB001',
                'name' => 'Indomie Goreng',
                'unit' => 'pcs',
                'price' => 3000,
                'stock' => 20,
                'image' => null,
            ],
            [
                'category_id' => 1,
                'code' => 'SMB002',
                'name' => 'Beras 5 Kg',
                'unit' => 'karung',
                'price' => 75000,
                'stock' => 15,
                'image' => null,
            ],

            // Minuman
            [
                'category_id' => 2,
                'code' => 'MNM001',
                'name' => 'Aqua 600ml',
                'unit' => 'botol',
                'price' => 3500,
                'stock' => 7,
                'image' => null,
            ],
            [
                'category_id' => 2,
                'code' => 'MNM002',
                'name' => 'Teh Pucuk Harum',
                'unit' => 'botol',
                'price' => 4000,
                'stock' => 3,
                'image' => null,
            ],

            // Makanan Ringan
            [
                'category_id' => 3,
                'code' => 'MKN001',
                'name' => 'Chitato',
                'unit' => 'pcs',
                'price' => 12000,
                'stock' => 0,
                'image' => null,
            ],

            // Kebutuhan Rumah Tangga
            [
                'category_id' => 4,
                'code' => 'KRT001',
                'name' => 'Sabun Lifebuoy',
                'unit' => 'pcs',
                'price' => 5000,
                'stock' => 25,
                'image' => null,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
