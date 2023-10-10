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
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('name');
            $table->decimal('main_price');
            $table->text('description');
            $table->string('main_image');
            $table->boolean('availability')->nullable();
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade');
            $table->string('main_unit')->nullable();
            $table->string('main_weight')->nullable();
            $table->bigInteger('Qty')->nullable();
            $table->date('Expiration_Date')->nullable();
            $table->bigInteger('supplier_id')->nullable();
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
