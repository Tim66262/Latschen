<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->timestamps();
            $table->integer('seller_id')->unsigned();
            $table->foreign('seller_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->string('name');
            $table->string('quality');
            $table->boolean('cardboard');
            $table->integer('price');
            $table->string('imagePath');
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
