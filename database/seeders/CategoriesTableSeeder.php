<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // قم بإزة بيانات حية في جدول فئات
        //Category::truncate();

        // إضافة بيانات فئات جديدة
       Category::create([
            'name' => 'Category_1',
            'image' => 'image1.jpg',
            'details' => ' details Category_1',
        ]);

       Category::create([
            'name' => 'Category_2',
            'image' => 'image2.jpg',
            'details' => ' details Category_2',
        ]);

       Category::create([
            'name' => 'Category_3',
            'image' => 'image3.jpg',
            'details' => ' details Category_3',
        ]);

       Category::create([
            'name' => 'Category_4',
            'image' => 'image4.jpg',
            'details' => ' details Category_4',
        ]);
        // أضف مزيد من بيانات فئات حسب حاجة
    }
}
