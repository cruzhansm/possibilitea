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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');

            $table->unsignedBigInteger('subcategory_id');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->integer('quantity');
            $table->enum('size', ['16oz', '22oz'])->nullable();
            $table->float('price');
            $table->unsignedBigInteger('addon_id')->nullable();
            $table->foreign('addon_id')->references('id')->on('addons')->onDelete('cascade');
            $table->unsignedBigInteger('sugarlvl_id')->nullable();
            $table->foreign('sugarlvl_id')->references('id')->on('sugar_lvls')->onDelete('cascade');
            $table->enum('temperature',  ['hot', 'cold'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
};
