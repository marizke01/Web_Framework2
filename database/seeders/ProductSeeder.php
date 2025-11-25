<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;  
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
                'image' => 'amplang8.jpeg',
                'weight' => '85',
            ],
            [
                'name' => 'Amplang 120 gr',
                'category' => 'Original',
                'description' => 'Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.',
                'price' => 20000,
                'image' => 'amplang3.jpeg', // Ganti dengan nama file Anda yang benar
                'weight' => '120',
            ],
            [
                'name' => 'Amplang 180 gr',
                'category' => 'Original',
                'description' => 'Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.',
                'price' => 30000,
                'image' => 'amplang4.jpeg',
                'weight' => '180',
            ],
            [
                'name' => 'Amplang 500 gr',
                'category' => 'Original',
                'description' => 'Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.',
                'price' => 75000,
                'image' => 'amplang 6.jpeg',
                'weight' => '500',
            ],
            [
                'name' => 'Amplang 1000 gr',
                'category' => 'Original',
                'description' => 'Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.',
                'price' => 150000,
                'image' => 'amplang7.jpeg',
                'weight' => '1000',
            ],
            [
                'name' => 'Amplang 1500 gr',
                'category' => 'Original',
                'description' => 'Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.',
                'price' => 200000,
                'image' => 'amplang9.jpeg',
                'weight' => '1500',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
