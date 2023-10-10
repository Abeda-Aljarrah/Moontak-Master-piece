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
        Schema::create('delivery_infos', function (Blueprint $table) {
            $table->id();
            $table->string('main_address');
            $table->string('street_name');
            $table->string('building_name');
            $table->string('city');
            $table->integer('postal_code');
            $table->integer('phone');
            $table->text('notes');
            $table->string('delivery_status');
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
        Schema::dropIfExists('delivery_infos');
    }
};
