<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->timestamps();
            $table->bigInteger('brand_id')->unsigned()->index();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->bigInteger('subcategory_id')->unsigned()->index();
            $table->string('name');
            $table->string('sku');
            $table->integer('status')->default(0);
            $table->integer('stock')->default(0);
            $table->string('condition');
            $table->string('cpu')->nullable();
            $table->string('processor_brand')->nullable();
            $table->integer('rear_camera')->nullable();
            $table->integer('front_camera')->nullable();
            $table->string('cellular')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('sim_card')->nullable();
            $table->integer('battery')->nullable();
            $table->integer('screen_size')->nullable();
            $table->string('language')->nullable();
            $table->string('display_type')->nullable();
            $table->longText('details');
            $table->longText('description');
            $table->text('box');
            $table->integer('price');
            $table->integer('sale_price');
            $table->string('country');
            $table->string('weight');
            $table->string('size');
            $table->foreign('brand_id')->references('id')
                ->on('brands')->onDelete('cascade');
            $table->foreign('category_id')->references('id')
                ->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')
                ->on('sub_categories')->onDelete('cascade');

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
}
