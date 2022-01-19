<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('tagline');
            $table->integer('status')->default(1);
            $table->string('action')->nullable();
            $table->bigInteger('product_id')->index()->unsigned()
                ->nullable();
            $table->bigInteger('blog_id')->index()->unsigned()
                ->nullable();
            $table->foreign('blog_id')->references('id')
                ->on('blogs')->onDelete('cascade');
            $table->foreign('product_id')->references('id')
                ->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
