<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // قم بإزة بيانات حية في جدول علامات
        // Brand::truncate();

         // إضافة بيانات علامات  جديدة
        Brand::create([
             'name' => 'Brand_1',
             'image' => 'image1.jpg',
             'details' => 'details Brand_1',
         ]);

        Brand::create([
             'name' => 'Brand_2',
             'image' => 'image2.jpg',
             'details' => 'details Brand_2',
         ]);

        Brand::create([
            'name' => 'Brand_3',
            'image' => 'image3.jpg',
            'details' => 'details Brand_3',
        ]);

       Brand::create([
            'name' => 'Brand_4',
            'image' => 'image4.jpg',
            'details' => 'details Brand_4',
        ]);
         // أضف مزيد من بيانات علامات  حسب حاجة
    }
}
