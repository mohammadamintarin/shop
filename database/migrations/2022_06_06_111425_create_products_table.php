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
            $table->foreignId('category_id')->constrained();
            $table->foreignId('brand_id')->constrained();
            $table->string('title');
            $table->string('title_en');
            $table->text('description');
            $table->string('slug');
            $table->integer('price');
            $table->boolean('status')->default(0);
            $table->boolean('incredible')->default(0);
            $table->string('image');
            $table->string('title-seo');
            $table->string('description-seo');
            $table->string('keywords-seo');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
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
