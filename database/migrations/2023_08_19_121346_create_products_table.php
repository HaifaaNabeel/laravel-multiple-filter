<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->longText('details');
            $table->decimal('price');
            $table->unsignedBigInteger('category_id'); // مفتاح خارجي لحقل category_id
            $table->unsignedBigInteger('brand_id'); // مفتاح خارجي لحقل brand_id
            $table->timestamps();
            // إضافة القيود والعلاقات للمفاتيح الخارجية
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
