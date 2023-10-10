<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('periods', function (Blueprint $table) {
            $table->id();
            $table->decimal('price');
            $table->unsignedBigInteger('plan_id');
            $table->string('title');
            $table->timestamps();
            $table->foreign('plan_id')
                ->references('id')
                ->on('plans')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('periods');
    }
};
