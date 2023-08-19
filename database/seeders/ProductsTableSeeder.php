<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // قم بإزة بيانات حية في جدول Productات
        // Product::truncate();

        // إضافة بيانات Productات جديدة
        Product::create([
            'name' => 'Product 1',
            'image' => 'image1.jpg',
            'details' => 'details Product 1',
            'price' => 100.00,
            'category_id' => 1,
            'brand_id' => 1,
        ]);

        Product::create([
            'name' => 'Product 2',
            'image' => 'image2.jpg',
            'details' => 'details Product 2',
            'price' => 150.00,
            'category_id' => 2,
            'brand_id' => 2,
        ]);

        Product::create([
            'name' => 'Product 3',
            'image' => 'image2.jpg',
            'details' => 'details Product 3',
            'price' => 150.00,
            'category_id' => 3,
            'brand_id' => 3,
        ]);

        Product::create([
            'name' => 'Product 4',
            'image' => 'image4.jpg',
            'details' => 'details Product 4',
            'price' => 100.00,
            'category_id' => 1,
            'brand_id' => 1,
        ]);

        Product::create([
            'name' => 'Product 5',
            'image' => 'image5.jpg',
            'details' => 'details Product 5',
            'price' => 150.00,
            'category_id' => 2,
            'brand_id' => 2,
        ]);

        Product::create([
            'name' => 'Product 6',
            'image' => 'image6.jpg',
            'details' => 'details Product 6',
            'price' => 150.00,
            'category_id' => 3,
            'brand_id' => 3,
        ]);
        // أضف مزيد من بيانات Productات حسب حاجة
    }
}
