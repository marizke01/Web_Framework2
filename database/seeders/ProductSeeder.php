<?php

// database/seeders/ProductSeeder.php
namespace Database\Seeders; 
 
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Amplang 85 gr',
                'category' => 'Original',
                'description' => 'Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.',
                'price' => 12500,
                'stock' => 150,
                'image' => 'amplang8.jpeg',
                'net_weight' => '85',
            ],
            [
                'name' => 'Amplang 120 gr',
                'category' => 'Original',
                'description' => 'Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.',
                'price' => 20000,
                'stock' => 100,
                'image' => 'amplang_pedas.jpeg', // Ganti dengan nama file Anda yang benar
                'net_weight' => '120',
            ],
            [
                'name' => 'Amplang 180 gr',
                'category' => 'Original',
                'description' => 'Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.',
                'price' => 30000,
                'stock' => 80,
                'image' => 'amplang4.jpeg',
                'net_weight' => '180',
            ],
            [
                'name' => 'Amplang 500 gr',
                'category' => 'Original',
                'description' => 'Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.',
                'price' => 75000,
                'stock' => 50,
                'image' => 'amplang 6.jpeg',
                'net_weight' => '500',
            ],
            [
                'name' => 'Amplang 1000 gr',
                'category' => 'Original',
                'description' => 'Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.',
                'price' => 150000,
                'stock' => 30,
                'image' => 'amplang7.jpeg',
                'net_weight' => '1000',
            ],
            [
                'name' => 'Amplang 1500 gr',
                'category' => 'Original',
                'description' => 'Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.',
                'price' => 200000,
                'stock' => 20,
                'image' => 'amplang9.jpeg',
                'net_weight' => '1500',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
